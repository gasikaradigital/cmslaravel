@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title> 

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="admin, admin panel, admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system">
	<meta name="description" content="@yield('page_description', $page_description ?? '')" >
	<meta property="og:title" content="Ventic - Event Ticketing Bootstrap 5 Admin Template">
	<meta property="og:description" content="@yield('page_description', $page_description ?? '')">
	<!-- <meta property="og:image" content="https://ventic.dexignzone.com/laravel/social-image.png"> -->
	<meta name="format-detection" content="telephone=no">
	
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<!-- <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png') }}"> -->
	
	@if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">
    
</head>
       
<body>
    <div class="authincation">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				@yield('content')
			</div>
		</div>
    </div>
	
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<!-- Required vendors -->
	@if(!empty(config('dz.public.global.js.top')))
        @foreach(config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
        @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.global.js.bottom')))
        @foreach(config('dz.public.global.js.bottom') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
	
	@stack('scripts')
</body>
</html>