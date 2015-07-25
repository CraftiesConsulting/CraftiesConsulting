<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Alaba mustapha, crafties consulting ilorin, IT solution, It firm ilorin" />
	<meta name="description" content="Carfties consulting limited, ICT ilorin, IT firm Ilorin, IT training center ilorin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<title>Crafties Consulting Limited</title>

	<!-- jQuery Files -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" title="main-css">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet" >
	<link href="css/jquery.snippet.css" rel="stylesheet">
	<link href="css/buttons.css" rel="stylesheet">
    <link href="css/info.css" rel="stylesheet">	{{--<link href="css/style-switcher.css" rel="stylesheet">--}}

	<!-- Alternate Stylesheets // choose what you want and remove rest for production -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/seagul.css" title="seagul">
	<link rel="alternate stylesheet" type="text/css" href="css/width-full.css" title="width-full">


	<!-- Icon Fonts -->
	<link href='css/ionicons.min.css' rel='stylesheet' type='text/css'>
	<link href='css/font-awesome.css' rel='stylesheet' type='text/css'>

	<!-- Magnific Popup -->
	<link href='css/magnific-popup.css' rel='stylesheet' type='text/css'>
</head>
<body class="">
<!-- Start Switcher -->
	<div class="info_box">
	    <div class="info-icon">
	        <i class="fa fa-info fa-spin fa-2x"></i>
	    </div><!-- end opener icon -->
	    <div class="form_holder">
	        <div class="row">
	            <div class="col-sm-12">
	                <div class="predefined_styles">
	                        <h4>Upcoming event</h4>
	                        <hr>
                            <img src="images/yibc_flier.jpg" alt="Young innovators boot camp">
                            <hr>
                            <a href="{{ url('yibc') }}" title="Young innovators Boot camp" class="button button-glow button-border button-rounded button-primary">Read more</a>
	                </div><!-- end predefined_styles -->
	            </div><!-- end col -->
	        </div><!-- end row -->
	    </div><!-- end form_holder -->
	</div><!-- end demo_changer -->
	<!-- End Switcher -->


@yield('content')

	<!-- Javascript Files -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/hover-dropdown.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.snippet.min.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/style-switcher.js"></script>
	<script type="text/javascript" src="js/info-switcher.js"></script>
	<script type="text/javascript" src="js/activate-snippet.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
    <script>
		var config = {
		easing: 'hustle',
		mobile:  true,
		delay:  'onload'
		}
		window.sr = new scrollReveal( config );
    </script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>