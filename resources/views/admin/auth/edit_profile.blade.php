@extends('layouts.master')
@section('title', 'تعديل ملفي الشخصي')
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> <i class="fas fa-user"></i> تعديل ملفي الشخصي </h4>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    <!-- row -->
    <div class="row row-sm">

        <!-- /Col -->
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    @include('includes.errors')
                    @include('includes.success')

                    <form method="post" action="{{route('post.edit.profile')}}">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>الأسم</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" name="name" required>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>البريد الألكتروني</label>
                                    <input value="{{$data->email}}" type="email" class="form-control" name="email" required>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>كلمة المرور الحالية</label>
                                    <input  class="form-control" type="text" name="current_password" maxlength="30" >
                                    @error('current_password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label> كلمة المرور الجديدة</label>
                                    <input  class="form-control" type="text" name="password" maxlength="30" >
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-12">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success">حفظ</button>
                            <button type="reset" class="btn btn-danger">الغاء</button>
                        </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection

