<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {

        $category = Category::where('status', 1)->get();


        $data = Order::leftJoin('categories', 'categories.id', '=', 'orders.category_id')


            ->get(['orders.image', 'orders.id', 'orders.status', 'orders.name', 'orders.price', 'categories.title']);
        // dd($data);
        // $data = Order::all();
        return view('admins.orders.index', compact('data', 'category'));
    }


    public function store(Request $request)
    {
        // dd($request->all());


        // dd($request->all());
        $request->validate(
            [
                'category_id' => 'required',
                'name' => 'required',
                'price' => 'required',
                'image' => 'required|max:2000',

            ],
            [
                'category_id.required' => "กรุณาเลือกประเภท",
                'name.required' => "กรุณากรอกชื่อรายการอาหาร",
                'price.required' => "กรุณากรอกราคา",
                'image.required' => "กรุณาเลือกรูปภาพ",
                'image.max' => "กรุณาเลือกรูปภาพที่มีขนาดไม่เกิน 2 mb",


            ],

        );



        //การเข้ารหัสรูปภาพ
        $service_image = $request->file('image');


        //generate ชื่อภาพ
        $name_gen = hexdec(uniqid());

        //ดึงนามสกุลไฟล์ภาพ
        $img_ext = strtolower($service_image->getClientOriginalExtension());
        //รวมชื่อกับนามสกุลไฟล์ 
        $img_name = $name_gen . '.' . $img_ext;
        // dd($img_name);
        //บันทึกข้อมูลเเละอัพโหลด
        $upload_location = 'image/orders/';
        $full_path = $upload_location . $img_name;
        // dd($full_path);


        $data = new Order();
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->image = $full_path;
        $data->price = $request->price;
        $data->status = 1;
        $data->created_at = Carbon::now();

        if ($data->save()) {
            //อัพโหลดภาพ
            $service_image->move($upload_location, $img_name);
            // return redirect()->back()->with('success', 'เพิ่มข้อมูลผู้ดูเเลระบบเรียบร้อยเเล้ว');
            return redirect()->route('admin.order')->with('success', 'เพิ่มข้อมูลสำเร็จ');
        } else {
            return redirect()->back()->with('error');
        }
    }
    public function edit($id)
    {

        $category = Category::where('status', 1)->get();

        $data = Order::find($id);
        return view('admins.orders.edit', compact('data', 'category'));
    }




    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
            [
                'category_id' => 'required',
                'name' => 'required',
                'price' => 'required',
                'image' => 'max:2000',

            ],
            [
                'category_id.required' => "กรุณาเลือกประเภท",
                'name.required' => "กรุณากรอกชื่อรายการอาหาร",
                'price.required' => "กรุณากรอกราคา",

                'image.max' => "กรุณาเลือกรูปภาพที่มีขนาดไม่เกิน 2 mb",


            ],

        );




        //การเข้ารหัสรูปภาพ
        $service_image = $request->file('image');


        //อัพเดทภาพเเละชื่อ
        if ($service_image) {
            //generate ชื่อภาพ
            $name_gen = hexdec(uniqid());

            //ดึงนามสกุลไฟล์ภาพ
            $img_ext = strtolower($service_image->getClientOriginalExtension());
            //รวมชื่อกับนามสกุลไฟล์ 
            $img_name = $name_gen . '.' . $img_ext;

            //อัพโหลดเเละอัพเดทข้อมูล
            $upload_location = 'image/orders/';
            $full_path = $upload_location . $img_name;

            //อัพเดทข้อมูล
            Order::find($id)->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'image' => $full_path,
            ]);

            //ลบภาพเก่าเเละอัพภาพใหม่เเทนที่
            $old_image = $request->old_image;
            unlink($old_image);

            //อัพโหลดภาพ
            $service_image->move($upload_location, $img_name);

            return redirect()->route('admin.order')->with('success', "อัพเดทข้อมูลเรียบร้อย");
        } else {
            //อัพเดทชื่ออย่างเดียว
            //อัพเดทข้อมูล
            Order::find($id)->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
            ]);
            return redirect()->route('admin.order')->with('success', "อัพเดทข้อมูลเรียบร้อย");
        }
    }


    public function delete($id)
    {

        //1.ลบภาพ
        $image = Order::find($id)->image;
        unlink($image);
        //2.ลบข้อมูลจากฐานข้อมูล
        $delete = Order::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
