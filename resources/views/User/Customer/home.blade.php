@extends('Layout.Customer.master')
@push('css')
	<title>
		{{ __('Trang chủ') }}
	</title>
@endpush

@section('content')
	<div class="blog-posts">
		
		<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ asset('custom/img/bg-football-ground.jpg') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="title">Cuộc sống giống như bóng đá, chúng ta cần mục tiêu</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="main main-raised">
			<div class="container">

				<div class="section">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<ul class="nav nav-pills nav-pills-primary">
							  <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
							  <li><a href="#pill2" data-toggle="tab">World</a></li>
							  <li><a href="#pill3" data-toggle="tab">Arts</a></li>
							  <li><a href="#pill4" data-toggle="tab">Tech</a></li>
							  <li><a href="#pill5" data-toggle="tab">Business</a></li>
							</ul>
							<div class="tab-content tab-space">
								<div class="tab-pane active" id="pill1">

								</div>
								<div class="tab-pane" id="pill2">

								</div>
								<div class="tab-pane" id="pill3">

								</div>
								<div class="tab-pane" id="pill4">

								</div>
							</div>

						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="card card-raised card-background" style="background-image: url('../assets/img/examples/office2.jpg')">
								<div class="card-content">
									<h6 class="category text-info">Worlds</h6>
									<a href="#pablo">
										<h3 class="card-title">The Best Productivity Apps on Market</h3>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-danger btn-round">
										<i class="material-icons">format_align_left</i> Read Article
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-raised card-background" style="background-image: url('../assets/img/examples/blog8.jpg')">
								<div class="card-content">
									<h6 class="category text-info">Business</h6>
									<h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-primary btn-round">
										<i class="material-icons">format_align_left</i> Read Article
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card card-raised card-background" style="background-image: url('../assets/img/examples/card-project6.jpg')">
								<div class="card-content">
									<h6 class="category text-info">Marketing</h6>
									<h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-warning btn-round">
										<i class="material-icons">subject</i> Read Case Study
									</a>
									<a href="#pablo" class="btn btn-white btn-just-icon btn-simple" title="Save to Pocket" rel="tooltip">
										<i class="fa fa-get-pocket"></i>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="section">
					<h3 class="title text-center">You may also be interested in</h3>
					<br />
					<div class="row">
						<div class="col-md-4">
							<div class="card card-plain card-blog">
								<div class="card-image">
									<a href="#pablo">
										<img class="img img-raised" src="../assets/img/bg5.jpg" />
									</a>
								</div>

								<div class="card-content">
									<h6 class="category text-info">Enterprise</h6>
									<h4 class="card-title">
										<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
									</h4>
									<p class="card-description">
										Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-plain card-blog">
								<div class="card-image">
									<a href="#pablo">
										<img class="img img-raised" src="../assets/img/examples/blog5.jpg" />
									</a>
								</div>
								<div class="card-content">
									<h6 class="category text-success">
										Startups
									</h6>
									<h4 class="card-title">
										<a href="#pablo">Lyft launching cross-platform service this week</a>
									</h4>
									<p class="card-description">
										Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-plain card-blog">
								<div class="card-image">
									<a href="#pablo">
										<img class="img img-raised" src="../assets/img/examples/blog6.jpg" />
									</a>
								</div>

								<div class="card-content">
									<h6 class="category text-danger">
										<i class="material-icons">trending_up</i> Enterprise
									</h6>
									<h4 class="card-title">
										<a href="#pablo">6 insights into the French Fashion landscape</a>
									</h4>
									<p class="card-description">
										Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="team-5 section-image" style="background-image: url('{{ asset('custom/img/bg10.jpg') }}')">

				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="../assets/img/faces/card-profile1-square.jpg" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="card-content">
										<h4 class="card-title">Alec Thompson</h4>
										<h6 class="category text-muted">Author of the Month</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="../assets/img/faces/card-profile4-square.jpg" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="card-content">
										<h4 class="card-title">Kendall Andrew</h4>
										<h6 class="category text-muted">Author of the Week</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-dribbble"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<div class="subscribe-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3 class="title">Get Tips & Tricks every Week!</h4>
							<p class="description">
								Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
							</p>
						</div>
						<div class="col-md-6">
							<div class="card card-plain card-form-horizontal">
								<div class="card-content">
									<form method="" action="">
										<div class="row">
											<div class="col-md-8">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">mail</i>
													</span>
													<input type="email" value="" placeholder="Your Email..." class="form-control" />
												</div>
											</div>
											<div class="col-md-4">
												<button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
	    </div>

    </div>
@endsection