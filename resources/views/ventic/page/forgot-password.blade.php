<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
	<title>Ventic - Event Ticketing Bootstrap 5 Admin Template</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	<meta name="keywords" content="admin, admin panel, admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system">
	<meta name="description" content="Enhance your event management with Ventic - the ultimate Event Ticketing Bootstrap 5 Admin Template. Streamline ticket sales, track attendance, and manage your events effortlessly with this powerful and user-friendly template. Elevate your event experience today!" >
	<meta property="og:title" content="Ventic - Event Ticketing Bootstrap 5 Admin Template">
	<meta property="og:description" content="Enhance your event management with Ventic - the ultimate Event Ticketing Bootstrap 5 Admin Template. Streamline ticket sales, track attendance, and manage your events effortlessly with this powerful and user-friendly template. Elevate your event experience today! ">
	<meta property="og:image" content="https://ventic.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
	
	<link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="{{ url('index') }}"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form action="{{ url('index') }}">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>
</html>