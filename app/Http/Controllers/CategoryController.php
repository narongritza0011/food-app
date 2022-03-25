<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admins.categorys.index', compact('data'));
    }


    public function store(Request $request)
    {


        // dd($request->all());

        $request->validate(
            [
                'title' => 'required|max:255',
            ],
            [
                'title.required' => "กรุณากรอกชื่อประเภทอาหาร",
                'title.max' => "ห้ามกรอกเกิน 255 ตัวอักษร",
            ],

        );

        $data = new Category();
        $data->title = $request->title;
        $data->status = 1;

        if ($data->save()) {
            // return redirect()->back()->with('success', 'เพิ่มข้อมูลผู้ดูเเลระบบเรียบร้อยเเล้ว');
            return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'เพิ่มช้อมูลไม่สำเร็จ!');
        }
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admins.categorys.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
            [
                'title' => 'required|max:255',
            ],
            [
                'title.required' => "กรุณากรอกชื่อประเภทอาหาร",
                'title.max' => "ห้ามกรอกเกิน 255 ตัวอักษร",
            ],

        );
        Category::find($id)->update([
            'title' => $request->title,
            'status' => $request->status,
        ]);

        // return redirect()->route('services')->with('success', "อัพเดทประเภทห้องพักเรียบร้อย");
        return redirect()->route('admin.category')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }


    public function delete($id)
    {
        $delete = Category::find($id)->delete();

        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
