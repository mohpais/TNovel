@extends('layouts.app')

@section('content')
	<div class="ht__bradcaump__area bg-image--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                    	<h2 class="bradcaump-title">Novel Deskripsi</h2>
                        <nav class="bradcaump-content">
                          <a class="breadcrumb_item" href="/">Home</a>
                          <span class="brd-separetor">/</span>
                          <span class="breadcrumb_item active" style="color: #000 !important;">Novel {{$novel->nama}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action">
		        							  <a href="#"><img src="/images/post/{{$novel->gambar}}" alt=""></a>
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{$novel->nama}}</h1>
                                        <div class="product_meta">
                                            <span class="posted_in">Categories: 
                                                <a href="#">Adventure</a>, 
                                                <a href="#">Kids' Music</a>
                                            </span>
                                        </div>
										<div class="product__overview">
                                            <span style="font-size: 16px; color: #ff471a"><b>Tipe :</b></span>
                                            <p>{{$novel->tipe}}</p>
                                            <span style="font-size: 16px; color: #ff471a"><b>Author :</b></span>
                                            <p>{{$novel->penulis}}</p>
                                            <span style="font-size: 16px; color: #ff471a"><b>Sinopsis :</b></span>
        									<p>{{$novel->sinopsis}}</p>
        								</div>
        								<div class="box-tocart d-flex">
        									<div class="addtocart__actions">
        										<button class="tocart" type="submit" title="Add to Cart">Baca...</button>
        									</div>
											<div class="product-addto-links clearfix">
												<a class="wishlist" href="#"></a>
												<a class="compare" href="#"></a>
											</div>
        								</div>
										
										<div class="product-share">
											<ul>
												<li class="categories-title">Share :</li>
												<li>
													<a href="#">
														<i class="icon-social-twitter icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-tumblr icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-facebook icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-linkedin icons"></i>
													</a>
												</li>
											</ul>
										</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Novel Chapter's</h3>
        						<ul class="list-group">
									@if($count != 0)
									@foreach ($chapter as $item)
        							<li class="list-group-item">
                                        <a href="/read/{{$item->slug}}">Chapter {{$item->chapter}}</a>
                                    </li>
									@endforeach
									@else
                                    <li class="list-group-item"><h3>Belum ada Chapter!</h3></li>
                                    @endif
        							{{-- @foreach ($chapter as $item)
        							<li class="list-group-item">
                                        <a href="/read/{{$item->slug}}">Chapter {{$item->chapter}}</a>
                                    </li>
        							@endforeach --}}
        						</ul>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
        							<li><a href="#">Adventure</a></li>
        							<li><a href="#">Magic</a></li>
        							<li><a href="#">Comedy</a></li>
        							<li><a href="#">Isekai</a></li>
        							<li><a href="#">Mystery</a></li>
        							<li><a href="#">Martial Art</a></li>
        							<li><a href="#">Mecha</a></li>
        							<li><a href="#">Fantasy</a></li>
        							<li><a href="#">Demon</a></li>
        						</ul>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="{{asset('user/images/iklan.jpg')}}" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->

@endsection