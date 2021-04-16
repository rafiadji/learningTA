<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
	<div class="container d-flex">
		<div class="logo mr-auto">
			<h1 class="text-light"><a href="index.html"><span>e</span>Business</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>
		<nav class="nav-menu d-none d-lg-block">
			<ul>
				<li class="active"><a href="{{ url('/') }}">Artikel</a></li>
				<li><a href="#">Game</a></li>
				<li><a href="{{ url('/video') }}">Video</a></li>
				<li><a href="{{ url('/book') }}">E-Book</a></li>
				@if (Route::has('login'))
						@auth
							<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						@else
							<li><a href="{{ route('login') }}">Log in</a></li>

							@if (Route::has('register'))
								<li><a href="{{ route('register') }}">Register</a></li>
							@endif
						@endauth
				@endif
			</ul>
		</nav><!-- .nav-menu -->
	</div>
</header><!-- End Header -->
