<!DOCTYPE html>
<html>
	<head>
		@include('admin.includes.head')
		@yield('styles-include')
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<!-- Navigation -->
			<section id="navigation">
			@include('admin.includes.navbar')
			</section>
			<!-- Sidebar -->
			<section id="sidebar">
			@include('admin.includes.left-sidebar')
			</section> <!-- Sidebar -->

			<!-- Content -->
			<section class="content-wrapper">
			@yield('content-header')
			@yield('content-body')
			</section> <!-- Content -->
		</div>


		<footer id="footer-navigation">
		@include('admin.includes.essential-js')
		</footer>


		@yield('scripts-include')

</body>

</html>
