@extends('layouts.master')
@section('title', 'اعدادات الموقع')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <style>

        .custom-control-input {
            position: revert !important;
            opacity: 11 !important;
        }
        .tag {background-color: #16A2B7 !important;}

        .note-editor .note-toolbar .note-dropdown-menu, .note-popover .popover-content .note-dropdown-menu {
            left: 0;
            right: 0 !important;
        }
        .note-group-image-url {display: none}
        .bootstrap-tagsinput {
            width: 100%;
            text-align: left;
            direction: ltr;
        }
    </style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"><i class="fas fa-tools side-menu__icon icon-side"></i>اعدادات الموقع </h4>
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

                    <form method="post" action="{{route('edit.meta')}}">
                        @csrf
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>الوصف </label>
                                    <textarea class="form-control" name="meta" rows="5">{{$description}}</textarea>
                                    @error('meta')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lastName"> أشارات الموقع</label>
                                    <input type="text"  data-role="tagsinput" name="keywords" value="{{$keywords}}" class="form-control">
                                    @error('keywords')
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

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
