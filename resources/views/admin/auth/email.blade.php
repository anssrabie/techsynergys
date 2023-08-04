@extends('layouts.master2')
@section('title', 'أستعادة كلمة المرور')
@section('css')
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
                                            <h2>أستعادة كلمة المرور</h2>
                                            <h6 class="font-weight-semibold mb-4 text-muted">سيتم أرسال رابط اعادة تعين كلمة المرور الخاصة بك عبر البريد الألكتروني</h6>
                                            @include('includes.errors')
                                            @include('includes.success')
                                            <form action="{{route('post.reset')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>البريد الألكتروني</label>
                                                    <input class="form-control" name="email" placeholder="أكتب البريد الخاص بك" type="email">
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <button class="btn btn-main-primary btn-block">أرسل</button>

                                            </form>

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
