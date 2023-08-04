@extends('layouts.master')
@section('title', 'التواصل الأجتماعي')
@section('css')
<style>
    input {
        text-align: left;
    }
</style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> <i class="fas fa-share-alt side-menu__icon icon-side"></i>التواصل الأجتماعي</h4>
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

                    <form method="post" action="{{route('update.social')}}">
                        @csrf
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>أسم الفيسبوك</label>
                                    <input type="text" class="form-control en" name="facebook_name" value="{{$facebook->name}}">
                                    @error('facebook_name')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>رابط الفيسبوك</label>
                                    <input type="text" class="form-control en" name="facebook_link" value="{{$facebook->link}}">
                                    @error('facebook_link')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>أسم الأنستجرام</label>
                                    <input type="text" class="form-control en" name="instagram_name" value="{{$instagram->name}}">
                                    @error('instagram_name')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>رابط الأنستجرام</label>
                                    <input type="text" class="form-control en" name="instagram_link" value="{{$instagram->link}}">
                                    @error('instagram_link')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>رقم الواتساب</label>
                                    <input type="text" class="form-control en" name="whats_number" value="{{$whats->name}}">
                                    @error('whats_name')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>رابط الواتساب</label>
                                    <input type="text" class="form-control en"  value="{{$whats->link}}" readonly>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>رقم التيليجرام أو الأسم</label>
                                    <input type="text" class="form-control en" name="telegram_name" value="{{$telegram->name}}">
                                    @error('telegram_name')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>رابط التيليجرام</label>
                                    <input type="text" class="form-control en"  value="{{$telegram->link}}" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>البريد الإلكترونى</label>
                                    <input type="text" class="form-control en" name="email" value="{{$email->link}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input type="text" class="form-control en" name="phone" value="{{$phone->link}}">
                                    @error('phone')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                        <div class="form-group mt-2">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                                <button type="reset" class="btn btn-danger">الغاء</button>
                            </div>
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

