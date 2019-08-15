@extends('layouts.app')

@section('content')
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Read <span>your </span></h2>
		            				<h2>favourite <span>Novel </span></h2>
		            				<h2>from <span>TNovel </span></h2>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Novel</span></h2>
							<p style="font-size: 16px;">List NOVEL terbaru di web TNovel disini dengan cara di slide ke samping yaa.</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					@foreach ($novel as $data)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="/view/{{$data->slug}}">
									<img src="images/post/{{$data->gambar}}" alt="product image">
								</a>
							</div>
							<div class="product__content content--center">
								<h4><a href="">{{$data->nama}}</a></h4>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li>
												<a class="wishlist" href="#">
													<i class="fa fa-heart"></i>
												</a>
											</li>
											<li>
												<a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#novel-{{$data->slug}}">
													<i class="fa fa-eye"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- <div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p style="font-size: 16px;">Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->
		<!-- Last Chapter -->
		@include('inc.latestChapter')
		<!-- End Last Chapter -->		
		<!-- QUICKVIEW NOVEL -->
		@include('inc.viewNovel')
		<!-- END QUICKVIEW NOVEL -->
@endsection