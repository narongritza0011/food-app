@extends('layouts.master')

@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">รายการอาหาร</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                        ข้อมูลอาหาร</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!--div-->
        <div class="row">
            <div class="col-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">เเก้ไขรายการอาหาร</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('order.update', $data->id) }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf


                            <img alt="Responsive image" id="output" class="img-thumbnail wd-100p wd-sm-200"
                                src="{{ asset($data->image) }}">


                            <div class="form-group">



                                <div class="row row-sm">
                                    <label class="mg-b-10">รูปภาพ</label>
                                    <div class="col-sm-12">
                                        <div class="input-group file-browser">

                                            <input type="file" accept="image/*" class="form-control  browse-file"
                                                name="image" onchange="loadFile(event)" value="{{ $data->image }}">

                                            <input type="hidden" name="old_image" value="{{ $data->image }}">

                                        </div>
                                    </div>
                                </div>

                                @error('image')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>







                            <div class="form-group">
                                <label class="mg-b-10">ชื่อ</label>
                                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                @error('name')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="mg-b-10">ประเภท</label>
                                <select class="form-control select2-no-search" name="category_id">

                                    @foreach ($category as $cate)
                                        <option {{ $data->category_id == $cate->id ? 'selected' : '' }}
                                            value="{{ $cate->id }}">
                                            {{ $cate->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mg-b-10">ราคา</label>

                                <input type="number" class="form-control" min="0"
                                    value="{{ number_format($data->price, 2) }}" name="price">
                                @error('price')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">สถานะ</p>
                                <select class="form-control select2-no-search" name="status">

                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>
                                        เปิดใช้งาน
                                    </option>
                                    <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>
                                        ปิดใช้งาน
                                    </option>

                                </select>
                            </div>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class=" btn btn-success-gradient">บันทึก</button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>

        </div>

    </div>
    <!-- Container closed -->
@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
