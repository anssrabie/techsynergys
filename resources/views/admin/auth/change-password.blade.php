@extends('layouts.master2')
@section('title', 'تغير كلمة المرور')
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
												<h2>تغير كلمة المرور</h2>
                                                @include('includes.errors')
                                                @include('includes.success')
												<form action="{{route('post.change.password', $reset->user_id)}}" method="POST">
                                                    @csrf
													<div class="form-group">
														<label>كلمة المرور الجديدة <small class="text-muted">( يجب ان تكون 8 أحرف على الأقل )</small></label>
                                                        <input class="form-control" name="password" type="password">
                                                        @error('password')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
													</div>
                                                    <div class="form-group">
                                                        <label>تأكيد كلمة المرور</label>
                                                        <input class="form-control" name="confirm-password"  type="password">
                                                        @error('confirm-password')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <button class="btn btn-main-primary btn-block">حفظ</button>

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
