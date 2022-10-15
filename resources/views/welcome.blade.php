<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amichand </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    <!-- Favicon -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>

<body>
    <div id="app">

    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<!------------------------------------------
        Main JavaScript
      <------------------------------------------>
<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>


<!-- Optional JavaScript -->
<script src="{{ asset('js/bootstrap-dropdownhover.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-slider.js')}}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/css3-animate-it.js')}}"></script>
<script src="{{ asset('js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/player-min.js')}}"></script>

<!-- Custom JavaScript -->
<script src="{{ asset('js/script.js')}}"></script>

</html>
