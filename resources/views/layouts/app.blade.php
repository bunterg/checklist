<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>CheckList</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('vendor/font-awesome/4.5.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link href="{{ asset('vendor/css/fonts.googleapis.com.css') }}" rel="stylesheet" />

	<!-- ace styles -->
	<link href="{{ asset('vendor/css/ace.min.css') }}" rel="stylesheet" type="text/css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ asset('vendor/css/ace-part2.min.min.css') }}" class="ace-main-stylesheet" />
		<![endif]-->
	<link href="{{ asset('vendor/css/ace-skins.min.css') }}" rel="stylesheet" type="text/css" />

	<!--[if lte IE 9]>
            <link href="{{ asset('vendor/css/ace-ie.min.css') }}" rel="stylesheet" type="text/css" />
		<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="{{ asset('vendor/js/ace-extra.min.js') }}"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
        <script src="{{ asset('vendor/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('vendor/js/respond.min.js') }}"></script>
		<![endif]-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="no-skin">
	@if (Auth::guest()) @include('layouts.partials.navbarGuest') @else @include('layouts.partials.navbar') @endif

	<div class="main-container ace-save-state" id="main-container">

		@if (Auth::guest()) @else @include('layouts.partials.sidebar') @endif


		<div class="main-content">
			<div class="main-content-inner">
				<!-- class="breadcrumbs ace-save-state" eliminado por complicaciones -->
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							@yield('content')
							<!-- PAGE CONTENT ENDS -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.page-content -->
			</div>
		</div>
		<!-- /.main-content -->

		@include('layouts.partials.footer')
	</div>
	<!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>

	<!-- <![endif]-->

	<!--[if IE]>
		<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
		<![endif]-->
	<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
  </script>
	<script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>

	<!-- page specific plugin scripts -->

	<!-- ace scripts -->
	<script src="{{ asset('vendor/js/ace-elements.min.js') }}"></script>
	<script src="{{ asset('vendor/js/ace.min.js') }}"></script>

	<!-- inline scripts related to this page -->
</body>

</html>