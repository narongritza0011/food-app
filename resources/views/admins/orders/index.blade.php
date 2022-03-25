@extends('layouts.master')

@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">@lang('lang.order_t')</h4><span
                        class="text-muted mt-1 tx-13 ms-2 mb-0">/
                        @lang('lang.order_data')</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!--div-->
        <div class="row">
            <div class="col-9">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">

                        </div>

                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-solid-success" role="alert">
                                <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span></button>
                                {{ session()->get('success') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="example" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">@lang('lang.tb_num')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_image')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_name')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_cate')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_price')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_status')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_manage')</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset($row->image) }}" class="img-thumbnail wd-50 wd-sm-100"
                                                    alt="ไม่มีรูป"></td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td><span class="text-success">{{ number_format($row->price, 2) }}</span>
                                            </td>

                                            <td>
                                                @if ($row->status == 1)
                                                    <span class="badge rounded-pill bg-success">เปิดใช้งาน</span>
                                                @elseif($row->status == 2)
                                                    <span class="badge rounded-pill bg-danger">ปิดใช้งาน</span>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <a href="{{ route('order.edit', $row->id) }}"
                                                            class="btn btn-warning-gradient "><i
                                                                class="fa fa-edit"></i></a>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="{{ route('order.delete', $row->id) }}"
                                                            class="btn btn-danger-gradient"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>


                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">@lang('lang.form_order_title')</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('order.store') }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf


                            <img alt="Responsive image" id="output" class="img-thumbnail wd-100p wd-sm-200"
                                src="{{ asset('../../assets/img/photos/1.jpg') }}">


                            <div class="form-group">

                                <div class="row row-sm">
                                    <label class="mg-b-10">@lang('lang.form_order_image')</label>
                                    <div class="col-sm-12">
                                        <div class="input-group file-browser">

                                            <input type="file" accept="image/*" class="form-control  browse-file"
                                                name="image" onchange="loadFile(event)">
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
                                <label class="mg-b-10">@lang('lang.form_order_name')</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="mg-b-10">@lang('lang.form_order_cate')</label>
                                <select class="form-control select2-no-search" name="category_id">
                                    <option selected disabled>
                                        Select
                                    </option>
                                    @foreach ($category as $cate)
                                        <option value="{{ $cate->id }}">
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
                                <label class="mg-b-10">@lang('lang.form_order_price')</label>

                                <input type="number" class="form-control" min="0" name="price">
                                @error('price')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class=" btn btn-success-gradient">@lang('lang.submit')</button>
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
