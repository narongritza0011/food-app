@extends('layouts.master')

@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">@lang('lang.category_menu')</h4><span
                        class="text-muted mt-1 tx-13 ms-2 mb-0">/
                        @lang('lang.cate_data')</span>
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
                                        <th class="border-bottom-0">@lang('lang.tb_cate')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_status')</th>
                                        <th class="border-bottom-0">@lang('lang.tb_manage')</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <span class="badge rounded-pill bg-success">เปิดใช้งาน</span>
                                                @elseif($row->status == 2)
                                                    <span class="badge rounded-pill bg-danger">ปิดใช้งาน</span>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <a href="{{ route('category.edit', $row->id) }}"
                                                            class="btn btn-warning-gradient "><i
                                                                class="fa fa-edit"></i></a>
                                                    </div>


                                                  
                                                    <div class="col-2">
                                                        <a href="{{ route('category.delete', $row->id) }}"
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
                        <h4 class="card-title mb-1">@lang('lang.form_cate_title')</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ localize_route('category.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="mg-b-10">@lang('lang.form_order_cate')</label>

                                <input type="text" class="form-control" placeholder="" name="title">
                                @error('title')
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
