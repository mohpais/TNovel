<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>TNovel | Baca Novel Bahasa Indonesia</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('user/style.css')}}">
	<link rel="stylesheet" href="{{asset('user/custom.css')}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('user/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('user/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="/">
								<img src="{{asset('user/images/logo/logo.png')}}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="/">Home</a></li>
								<li><a href="/listnovel">Novel List</a></li>
								<li><a href="reqNovel">Req Novel</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search">
								<a class="search__active" href="#"></a>
							</li>
							{{-- <li class="wishlist"><a href="#" ></a></li> --}}
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												{{-- @foreach ($wish as $item)													
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="/view/{{$item->slug}}"><img src="images/post/{{$item->gambar}}" alt="product images"></a>
													</div>
													<div class="content" style="">
														<h6><a href="product-details.html">{{$item->nama}}</a></h6>
														<div class="product_prize d-flex justify-content-between">
															<ul class="d-flex justify-content-end" style="float: right !important;">
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												@endforeach --}}
											</div>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="login"><a href="/login"></a></li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="/">Home</a></li>
								<li><a href="/listnovel">List Novel</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="#">About Page</a></li>
										<li><a href="#">Portfolio</a>
											<ul>
												<li><a href="#">Portfolio</a></li>
												<li><a href="portfolio-#">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="/reqNovel">Req Novel</a></li>
									</ul>
								</li>
								<li><a href="/reqNovel">Req Novel</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->

		@yield('content')

				<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="{{asset('user/images/logo/3.png')}}" alt="logo">
									</a>
									<p>A place to read free novel subtitle Indonesia</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="#">Trending</a></li>
										<li><a href="#">Best Seller</a></li>
										<li><a href="#">All Product</a></li>
										<li><a href="#">Wishlist</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> by <a href="#">TNovel.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="{{asset('user/images/icons/payment.png')}}" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{asset('user/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('user/js/popper.min.js')}}"></script>
	<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('user/js/plugins.js')}}"></script>
	<script src="{{asset('user/js/active.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		}
		
		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
		}
	</script>	
	
</body>
</html>