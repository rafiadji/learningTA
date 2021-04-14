<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AdminLTE 3 | Blank Page</title>

	@include('layouts.back.callhead')
</head>
<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		@include('layouts.back.header')
		@include('layouts.back.side')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				@yield('content-header')
			</section>

			<!-- Main content -->
			<section class="content">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		@include('layouts.back.footer')

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	@include('layouts.back.callfoot')
</body>
</html>
