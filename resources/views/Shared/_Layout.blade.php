<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="{{asset('http://www.fidcr.com/images/fb/fidcr.jpg')}}" />
    <meta property="og:title" content="{{asset('FID Costa Rica 2017. 10, 11 y 12 de marzo')}}" />
    <title>MAE</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Crimson+Text:700')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{asset('javascripts/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('javascripts/jquery.animate-enhanced.min.js')}}"></script>
    <script src="{{asset('slider/jssor.slider.mini.js')}}"></script>
    <script src="{{asset('javascripts/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('javascripts/isotope.js')}}"></script>
    <script src="{{asset('javascripts/application.js')}}"></script>
    
</head>
<body>
    @yield('content')
</body>
</html>