<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>{{ APP_BUSSINESS_NAME }} | Tienda</title>
		<!-- SEO Meta Tags-->
		<meta name="description" content="{{ APP_BUSSINESS_NAME }} | Tienda">
		<meta name="keywords" content="augustamoi, indumentaria, ropa, vestidos, ropa interior, lenceria, bombachas, tangas">
		<meta name="author" content="Vimana Studio">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Mobile Specific Meta Tag-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon and Apple Icons-->
		{{--  <link rel="icon" type="image/x-icon" href="favicon.ico">  --}}
		<link rel="icon" type="image/png" href="{{ asset('images/web/favicon.png') }}">
		<link rel="apple-touch-icon" href="{{ asset('images/web/favicon.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/web/favicon.png') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/web/favicon.png') }}">
		<link rel="apple-touch-icon" sizes="167x167" href="{{ asset('images/web/favicon.png') }}">
		<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
		<link rel="stylesheet" media="screen" href="{{ asset('store-ui/css/vendor.min.css') }}">
		<link rel="stylesheet" media="screen" href="{{ asset('store-ui/css/iziToast.min.css') }}">
		<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/all.css') }}">
		<!-- Main Template Styles-->
		<link rel="stylesheet" media="screen" href="{{ asset('css/store-custom.css') }}">
		@yield('styles')
		<!-- Modernizr-->
		<script src="{{ asset('store-ui/js/modernizr.min.js') }}"></script>
		{!! $google_analytics !!}
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '355206442098319'); 
			fbq('track', 'Visitas');
		
			</script>
			<noscript>
			<img height="1" width="1" 
			src="https://www.facebook.com/tr?id=355206442098319&ev=PageView
			&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->

	</head>
	<!-- Body-->
	<body>
		<div class="main-wrapper">
			{{-- <div id="MainOverlay" class="main-overlay"></div> --}}
			<div id="full-loader" class="full-loader Hidden">
				<div class="inner">
					<img src="{{ asset('store-ui/images/loader.gif') }}" alt="Loader">
				</div>
			</div>
			
			@yield('modal')
			@include('store.partials.topbar')
			@include('store.partials.nav') {{-- ToolBar is inside this nav include --}}
			@include('store.partials.alerts')
			
			{{-- Checkout Sidebar --}}
			@include('store.partials.cart-sidebar')
			<div class="container-fluid custom-page-title pad0"> @yield('header-image') </div>
			
			{{-- Site Content --}}
			<div class="content"> @yield('content') </div>
		</div>	
		<!-- Site Footer-->
		<footer class="site-footer">
			<div class="container">
				<p class="footer-copyright">
					© {{ date('Y') }} - Desarrollado por <a href="https://vimanastudio.com.ar" target="_blank">&nbsp; Vimana Studio </a>
				</p>
			</div>
		</footer>

		{{-- Whats App Cta--}}
		<div class="floating-bottom-cta">
			<div class="inner">
				<a href="https://wa.me/5491133212292" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
	
		{{-- Back To Top Button --}}
		<a class="scroll-to-top-btn" href="#"> <i class="icon-arrow-up"></i> </a>

		{{-- Backdrop --}}
		<div class="site-backdrop"></div>

		{{-- JavaScript (jQuery) libraries, vendor and custom scripts --}}
		<script src="{{ asset('store-ui/js/vendor.min.js') }}"></script>
		<script src="{{ asset('store-ui/js/scripts.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery/jquery-3.4.0.min.js') }}"></script>
		<script src="{{ asset('store-ui/js/iziToast.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		@include('store.partials.scripts')
		@yield('scripts')
		@if(isset($_GET['checkout-on']))
			<script>
				checkoutSidebar('show');
			</script>
		@endif
		<script>
			$('#AddToCartFormBtn').click(function(){
				fbq('track', 'Items agregados');
			});
			
			$('.AddToFavs ').click(function(){
				fbq('track', 'Favoritos');
			});
		</script>
	</body>
</html>





