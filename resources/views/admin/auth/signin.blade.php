@extends('layouts.master2')
@section('title', 'تسجيل الدخول')
@section('css')
    <style>
        .main-signin-footer a {font-weight: 100 !important;}
    </style>
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The content half -->
            <div class="col-md-12 bg-white">

                <div class="login d-flex align-items-center py-2">



                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">

                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>مرحبا بعودتك</h2>
                                            <h5 class="font-weight-semibold mb-4 ">من فضلك سجل دخولك للمتابعة</h5>
                                            @include('includes.errors')
                                            @include('includes.success')
                                            <form action="{{route('post.login')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>البريد الألكتروني</label>
                                                    <input class="form-control" value="{{old('email')}}" name="email" placeholder="أدخل بريدك الإلكتروني" type="email">
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>كلمة المرور</label>
                                                    <input class="form-control" name="password" placeholder="أدخل كلمة المرور" type="password">
                                                    @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div><button class="btn btn-main-primary btn-block">دخول</button>

                                            </form>
                                            <div class="main-signin-footer mt-1">
                                                <p><a href="{{route('reset.email')}}">هل نسيت كلمة المرور ؟</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
@endsection
@section('js')
@endsection
