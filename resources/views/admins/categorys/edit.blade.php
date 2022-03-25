@extends('layouts.master')

@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">หมวดหมู่</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                        ข้อมูลประเภทอาหาร</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!--div-->
        <div class="row">
            <div class="col-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">เเก้ไขข้อมูลประเภทอาหาร</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('category.update', $data->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">

                                <p class="mg-b-10">ชื่อประเภท</p>

                                <input type="text" class="form-control" value="{{ $data->title }}"
                                    placeholder="ชื่อประเภท" name="title">
                                @error('title')
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
