		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Latest <span class="color--theme">Chapter</span></h2>
							<p style="font-size: 16px;">List chapter terakhir yang kami posting dapat dilihat disini dengan cara di slide ke samping yaa.  Selamat membaca! :)</p>
						</div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                            @foreach ($chapter as $item)
                            <div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="/read/{{$item->slug}}"><img src="images/post/{{$item->novel->gambar}}" alt="product image"></a>
											<a class="second__img animation1" href="/read/{{$item->slug}}"><img src="images/post/{{$item->novel->gambar}}" alt="product image"></a>
											<div class="hot__box" style="background-color: #ff3300">
												<span class="hot-label">Chapter {{$item->chapter}}</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
                                            <h4 style="color: #ff3300">{{$item->novel->nama}}</h4>
											<h4><a href="#" style="font-size:14px !important;">{{$item->judul}}</a></h4>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="compare" title="Read Chapter" href="/read/{{$item->slug}}"><i class="bi bi-book"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#novel-{{$item->novel->slug}}"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
                            </div>
                            @endforeach
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->