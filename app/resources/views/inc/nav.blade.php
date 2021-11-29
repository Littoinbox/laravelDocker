<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Главная</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs">

            @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Главная</a>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Авторизация</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a> </li>
                        @endif
                    @endauth

            @endif
            <!--<li>
                <button class="search" aria-label="Поиск" type="button"></button>
            </li>-->
        </ul>
    </div>
</div>
