@extends('Layout.Customer.User.master')
@push('css')
	<title>
		{{ __('Đổi mật khẩu') }}
	</title>
@endpush

@section('content')
	<div class="blog-posts">
		
		<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ asset('custom/img/bg8.jpg') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="title" id="title_page">
							{{-- {{ __('Rèn luyện thể thao, đẩy lùi dịch bệnh') }} --}}
						</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="main main-raised">
			<div class="container">

				<div class="section">
					<div class="row" id="row-title-notice">
						<div class="col-md-6 col-md-offset-3 text-center">
                        	<h2 class="title">{{ __('Thay đổi') }}</h2>
							<div class="tab-space" id="row-title"></div>
						</div>

						<div class="col-md-12 p-0" id="alert-select-warning"></div>
						@include('Layout.Customer.Notification.message_basic')
					</div>


					<div class="row">
						
						<form class="form" method="POST" action="{{ route('customer.profile.update.password') }}">
							@csrf
							<div class="col-md-6 col-md-offset-3">

								<div class="col-md-12">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock</i>
										</span>
										<input type="password" class="form-control" id="name" name="profile[old_password]" placeholder="Mật khẩu cũ..." value="">
				                        @if (!empty($errors) && $errors->has('old_password'))
				                            <label class="error text-danger" for="name">
				                                {{ $errors->first('old_password') }}
				                            </label>
				                        @endif
									</div>
								</div>

								<div class="col-md-12">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" id="phone" name="profile[password]" placeholder="Mật khẩu mới..." value="">
				                        @if (!empty($errors) && $errors->has('password'))
				                            <label class="error text-danger" for="phone">
				                                {{ $errors->first('password') }}
				                            </label>
				                        @endif
									</div>
								</div>

								<div class="col-md-12">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" id="email" name="profile[password_confirmation]" placeholder="Nhập lại mật khẩu..." value="">
				                        @if (!empty($errors) && $errors->has('password_confirmation'))
				                            <label class="error text-danger" for="phone">
				                                {{ $errors->first('password_confirmation') }}
				                            </label>
				                        @endif
									</div>
								</div>

								<div class="col-md-12 text-center">
									<button class="btn btn-info">
										{{ __('Cập nhật') }}
									</button>
								</div>

							</div>
						</form>

					</div>{{-- end row --}}
				</div>

			</div>

	    </div>

    </div>
@endsection