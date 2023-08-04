@extends('layouts.master')
@section('title', 'الصفحة الرئيسية')
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">

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

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="text-center" style="margin: 100px auto">
                                <h1>  مرحبا بعودتك {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
                                <br>
                                <a target="_blank" class="btn btn-primary" href="{{route('front.home')}}">  الدخول الي الموقع</a>

                            </div>

                            <!--
                            <div class="row row-sm">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden sales-card bg-primary-gradient">
                                        <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                            <div class="">
                                                <h6 class="mb-3 tx-12 text-white">جهات الأتصال اليوم</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h4 class="tx-20 font-weight-bold mb-1 text-white">20</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden sales-card bg-danger-gradient">
                                        <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                            <div class="">
                                                <h6 class="mb-3 tx-12 text-white">عدد الكتب اليوم</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h4 class="tx-20 font-weight-bold mb-1 text-white">2</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden sales-card bg-success-gradient">
                                        <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                            <div class="">
                                                <h6 class="mb-3 tx-12 text-white">TOTAL EARNINGS</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
                                                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                                    </div>
                                                    <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> 52.09%</span>
										</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden sales-card bg-warning-gradient">
                                        <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                            <div class="">
                                                <h6 class="mb-3 tx-12 text-white">PRODUCT SOLD</h6>
                                            </div>
                                            <div class="pb-0 mt-0">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
                                                        <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                                    </div>
                                                    <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -152.3</span>
										</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            row closed -->

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

