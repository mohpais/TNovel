<!doctype html>
<html lang="en">

<head>
	<title>Author-System </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('author/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('author/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('author/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('author/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('author/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('author/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- TOASTR -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('author/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('author/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
			@include('author.inc.navbar')
		<!-- END-NAVBAR -->
		<!-- LEFT SIDEBAR -->
			@include('author.inc.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="#" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('author/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('author/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('author/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('author/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
	var konten = document.getElementById("konten");
		CKEDITOR.replace(konten,{
		language:'en-gb'
	});
	CKEDITOR.config.allowedContent = true;
	</script>
	<script>
		@if(Session::has('success'))
			toastr.success("{{Session::get('success')}}", ":)")
		@endif
	</script>
	@yield('js')
</body>

</html>

