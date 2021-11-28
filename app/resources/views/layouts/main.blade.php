<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (!empty($title))
            {{$title}} - Маркетплейс шпион
        @else
           Маркетплейс шпион
        @endif
    </title>

    <!-- Scripts -->
    <script src="{{asset('/js/app.js')}}"></script>
    <!-- Styles -->
    <link href="{{asset("/css/app.css")}}" rel="stylesheet">
    <link href="{{asset("/css/apps.css")}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="main">

    @include("inc.nav")
</div>

<div class="container">
    @yield('content')
</div>




<div class="footer container-fluid">
    <div class="container">

    </div>
</div>

</body>
</html>
