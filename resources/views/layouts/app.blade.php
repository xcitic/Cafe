<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{env('APP_NAME')}}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/material.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">

</head>

<body class="cyan-skin intro-page cafe-lp">
    <a id="scrollToTop"></a>

    @yield('content')



    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

    <!-- Bootstrap tooltips -->
    <script src="{{asset('js/tether.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- MDB core JavaScript -->
    <script src="{{asset('js/material.min.js')}}"></script>


    <script src="{{ mix('js/app.js') }}"></script>

    @yield('scripts')

    <script>
      //Animation init
      new WOW().init();

    </script>

    <script>
        let btn = $('#scrollToTop');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>

</body>

</html>
