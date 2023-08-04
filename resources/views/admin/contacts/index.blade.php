@extends('layouts.master')
@section('title', 'جهات الأتصال')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"><i class="fas fa-phone side-menu__icon icon-side"></i>  جهات الأتصال </h4>
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


                    @if(isset($contacts) AND count($contacts) > 0)

                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الأسم </th>
                                    <th>رقم الواتساب</th>
                                    <th>الموضوع</th>
                                    <th>الحالة</th>
                                    <th>تاريخ الأرسال</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr class="EventRow{{$contact->id}}">
                                        <th>{{$contact->id}}</th>
                                        <th>{{$contact->name}}</th>
                                        <th>{{$contact->whats}}</th>
                                        <th>{{$contact->subject}}</th>
                                        <th>
                                            @if($contact->seen == 1)
                                                <span id="che{{$contact->id}}" class="badge badge-danger">تمت رؤيتها</span>
                                            @else
                                                <span id="che{{$contact->id}}" class="badge badge-success">جديدة</span>
                                            @endif
                                        </th>
                                        <th>{{$contact->created_at->format('d-m-Y | h:i A')}}</th>
                                        <td  class="text-center">
                                            <a target="_blank" href="{{route('show.contact', $contact->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-clipboard"></i> عرض  </a>
                                            <a onclick="return confirm('هل أنت متأكد من حذف جهة الاتصال ؟')" href="{{route('delete.contact', $contact->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> حذف </a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>

                    @else
                        <h3>لا يوجد أي جهات اتصال الأن</h3>
                    @endif


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

@section('js')


    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable_ar.js')}}"></script>



@endsection
