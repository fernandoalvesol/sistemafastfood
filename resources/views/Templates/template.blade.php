<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <title>{{$title or 'Your Food'}}</title>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css -->
    <link rel="stylesheet" href="{{url('site/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/responsive.css')}}">
    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/5c5e6428ef.js"></script>
    <link rel="stylesheet" href="{{url('site/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('site/assets/css/font-awesome.min.css')}}">
    <!-- js -->
    <script src="{{url('site/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--Start Section-->

<div class="main_container">

    @yield('main_container')

</div>
<!--End Section -->


<footer id="footer" class="dark-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <div class="row">
            <div class="col-sm-6">
                &copy; Copyright MeatKing 2014
                <br/>Theme By <a class="themeBy" href="http://www.Themewagon.com">ThemeWagon</a>
            </div>
            <div class="col-sm-6">
                <div class="social-bar">
                    <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                    <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                    <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
                    <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
                    <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<script src="{{url('site/assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.actual.min.js')}}"></script>
<script src="{{url('site/assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('site/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('site/assets/js/main.js')}}"></script>
</body>
</html>
