<!-- Topbar-->
<div class="topbar">
	<div class="topbar-column">
		<a class="">&nbsp;<b>11-3321-2292 </b></a>
		<a class="e-mail-field" href="mailto:venta@augustamoi.com">
			<i class="icon-mail"></i>&nbsp; venta@augustamoi.com
		</a>
		
	</div>
	<div class="topbar-column">
		<a class="social-button sb-facebook shape-none sb-dark" href="https://www.facebook.com/augustamoimayorista" target="_blank">
			<i class="socicon-facebook"></i>
		</a>
		<a class="social-button sb-instagram shape-none sb-dark" href="https://www.instagram.com/augusta_moi/" target="_blank">
			<i class="socicon-instagram"></i>
		</a>
		<a class="social-button sb-instagram shape-none sb-dark" >
			<i class="fa  fa-home"></i> José María moreno 991 2G, 1424 cp
		</a>

		@if(Auth::guard('customer')->check())
			<button onclick="checkoutSidebar('show')" class="icon-btn-small"|><i class="fas fa-shopping-cart"></i></button>
		@endif
	</div>
</div>