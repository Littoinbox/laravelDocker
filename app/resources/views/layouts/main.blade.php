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
    <link href="{{assert("/css/app.css")}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="main">

    @include("inc.nav")

    <div class="container">
        <div class="bigLogo">
            <h1 class="mainH1"><img src="/images/big-logo.png" class="img-responsive"> SakhaLink</h1>
        </div>
    </div>
    <div class="qwizBlock">
        <h3>Тест на знание острова<br /> Сахалин</h3>
        <div class="aboutQwiz">
            Пройди тест и узнай на сколько ты знаешь<br />
            уникальные места и историю прекрасного острова
        </div>
        <div class="qwizBottom">
            <a class="btn qwizBtn" href="/quize/1"></a>
        </div>
    </div>

</div>
<div class="container">


    @yield('content')

</div>


</div>

<div class="footer container-fluid">
    <div class="container">
        <div class="logoName"><a href="/">Sakhalink</a></div>

        <div class="col-xs-12">
            <ul class="footer-menu">
                <li class="active"><a href="{{route('about')}}">О проекте</a></li>

                <li><a href="{{route('childpage')}}">Детская страничка</a></li>
                <li><a href="/podcast">Подкасты SakhaLink</a></li>
            </ul>
        </div>
        <div class="col-xs-12 social">
            <div class="col-md-3 col-xs-6"><a href="https://t.me/SakhaLink" target="_blank"><img src="https://cdn-s-assets.arzamas.academy/assets/footer/telegram-6dcb3b912e304654c50ce9d1ea2252bacb9d9a68b9563bb933c7183a42a90978.svg" class="" /> TELEGRAM</a></div>
            <div class="col-md-3 col-xs-6"><a href="https://instagram.com/sakhalink.online"  target="_blank"><img src="https://cdn-s-assets.arzamas.academy/assets/footer/instagram-a4b80c8cb352996d00b1a9b9024d6e13a9b5bee263d0dd2c43355994bffba69e.svg" class="" /> INSTAGRAM</a></div>
            <div class="col-md-3 col-xs-6"><a href="https://vk.com/publicsakhalink"  target="_blank"><img src="https://cdn-s-assets.arzamas.academy/assets/footer/vk-b80b74eb484faab6fd3ce4b3de78f8f2f9605b0d2541a9e6fa9f57f9fde72d3f.svg" class="" /> ВКОНТАКТЕ</a></div>
            <div class="col-md-3 col-xs-6"><a href="https://www.youtube.com/channel/UCrV7yKRopgGGvKboDNzPcKg"  target="_blank"><img src="https://cdn-s-assets.arzamas.academy/assets/footer/youtube-4fef51188fc1166a13873c16dee9f106aa083f6564a7af94254013eb160b802d.svg" class="" /> YOUTUBE</a></div>
        </div>
        <div class="col-xs-12 private">
            © Sakhalink 2021. Все права защищены
        </div>
    </div>
</div>

</body>
</html>
