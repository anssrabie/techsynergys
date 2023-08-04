@extends('layouts.master')
@section('title', 'عرض جهة الأتصال')

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">عرض جهة الأتصال : #{{$contact->id}}</h4>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                @if($contact->seen < 1)
                    <a onclick="return confirm('هل أنت متأكد ؟')" class="btn btn-success" href="{{route('post.show.contact', $contact->id)}}"> <i class="fas fa-check"></i> تمت رؤويتها </a>
                @else
                    <a onclick="return confirm('هل أنت متأكد ؟')" class="btn btn-danger" href="{{route('post.show.contact', $contact->id)}}"> <i class="fas fa-times"></i> غير مقرؤة </a>
                @endif
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


                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <strong> أسم الراسل : </strong>
                                    {{ $contact->name }}
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <strong> الواتساب : </strong>
                                    {{$contact->whats}}
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <strong> البريد الألكتروني : </strong>
                                    @if(!empty($contact->email))
                                    {{$contact->email}}
                                    @else
                                        لا يوجد
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <strong> الموضوع : </strong>
                                    {{$contact->subject}}
                                </div>
                            </div>



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <strong> الرسالة : </strong>
                                   {!! $contact->message !!}
                                </div>
                            </div>



                </div>

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
