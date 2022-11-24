<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	
	<!-- PAGE TITLE HERE -->
	<title>{{ (!empty($page_title))?$page_title:'' }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png' ) }}">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            @yield('authpanel')
        </div>
    </div>
<script src="{{ asset('backend/vendor/global/global.min.js' ) }}"></script>
<script src="{{ asset('backend/js/custom.min.js' ) }}"></script>
<script src="{{ asset('backend/js/dlabnav-init.js' ) }}"></script>
<script>
	@if(Session::has('success'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true,
		"timeOut": "10000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
	}
			toastr.success("{{ session('success') }}");
	@endif
  
	@if(Session::has('error'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true,
		"timeOut": "10000",
		"positionClass": "toast-top-right",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
	}
			toastr.error("{{ session('error') }}");
	@endif
  
	@if(Session::has('info'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true,
		"timeOut": "10000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
	}
			toastr.info("{{ session('info') }}");
	@endif
  
	@if(Session::has('warning'))
	toastr.options =
	{
		"closeButton" : true,
		"progressBar" : true,
		"timeOut": "10000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
	}
			toastr.warning("{{ session('warning') }}");
	@endif
  </script> 
  <script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	</script>
</body>
</html>