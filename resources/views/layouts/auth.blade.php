
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico')}}">
<title>{{ config('app.name') }} | @yield('sub-title')</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('css/colors/blue.css')}}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar" style="overflow-y: auto; height: 100vh">
    <div class="white-box" style="overflow-y: hidden;">
        @yield('content')
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script>
    @yield('additional-scripts')
</script>
</body>
</html>
