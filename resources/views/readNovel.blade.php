@extends('layouts.app')

@section('content')
	        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color: #141f1f">Baca Novel</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/" style="color: #141f1f">Home</a>
                              <span class="brd-separetor" style="color: #141f1f">/</span>
                              <span class="breadcrumb_item active" style="color: #ff2800">{{$chapter->slug}}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<!-- <div class="post-thumbnail">
									<img src="" alt="blog images">
								</div> -->
								<div class="post_wrapper">
									<div class="post_header">
										<h2 style="padding-bottom: 5px; "><span style="color: #ff2800">Chapter {{$chapter->chapter}}</span></h2>
										<h2>{{$chapter->judul}}</h2>
										<div class="blog-date-categori">
											<ul>
												<?php $time = $chapter->created_at ?>
												<li>{{$time->format('M d, Y')}}</li>
												<li>
													<span><b>Posted by </b></span>
													<a href="#" title="Posts by boighor" rel="author">{{$chapter->author}}</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="post_content" style="font-size: 16px;">
										{!! stripslashes($chapter->description) !!}
									</div>
									<br>
									<div class="bottom_content">
										@if($prevGet)
										<a href="/read/{{$prevGet->slug}}" class="btn btn-default text-left">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
										 	Previous Chapter
										</a>
										@endif
										@if($nextGet)
										<a href="/read/{{$nextGet->slug}}" class="btn btn-default text-right">Next Chapter
											<i class="fa fa-arrow-right" aria-hidden="true"></i>
										</a>
										@endif
									</div>

									<ul class="blog_meta">
										<li><a href="#">1 comments</a></li>
										<li> / </li>
										<li>Novel: <span>{{$chapter->novel->nama}}</span></li>
									</ul>
								</div>
							</article>
							<div class="comments_area">
								<h3 class="comment__title">1 comment</h3>
								<ul class="comment__list">
									<li>
										<div class="wn__comment">
											<div class="thumb">
												<img src="{{asset('user/images/blog/comment/1.jpeg')}}" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
									<li class="comment_reply">
										<div class="wn__comment">
											<div class="thumb">
												<img src="{{asset('user/images/blog/comment/1.jpeg')}}" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="comment_respond">
								<h3 class="reply_title">Leave a Reply <small><a href="#">Cancel reply</a></small></h3>
								<form class="comment__form" action="#">
									<p>Your email address will not be published.Required fields are marked </p>
									<div class="input__box">
										<textarea name="comment" placeholder="Your comment here"></textarea>
									</div>
									<div class="input__wrapper clearfix">
										<div class="input__box name one--third">
											<input type="text" placeholder="name">
										</div>
										<div class="input__box email one--third">
											<input type="email" placeholder="email">
										</div>
										<div class="input__box website one--third">
											<input type="text" placeholder="website">
										</div>
									</div>
									<div class="submite__btn">
										<a href="#">Post Comment</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Search</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Novel Tags</h3>
        						<ul>
        							<li><a href="#">Psychologi</a></li>
        							<li><a href="#">Demons</a></li>
        							<li><a href="#">Comedy Romance</a></li>
        							<li><a href="#">History</a></li>
        							<li><a href="#">Mystery</a></li>
        							<li><a href="#">Sport</a></li>
        							<li><a href="#">Martial Art</a></li>
        							<li><a href="#">Fiction</a></li>
        							<li><a href="#">Fantasy</a></li>
        						</ul>
        					</aside>
							<aside class="widget category_widget wedget__categories sidebar--banner" >
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
@endsection