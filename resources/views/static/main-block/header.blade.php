<body class="visible">
<div class="wrap">
    <header class="header">
        <nav class="nav-index">
            <div class="wrap-nav">
                <div class="nav-logo">
                    <a class="logo-link" href="{{route('/.index')}}">
                        <img class="img-logo" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
                    </a>
                </div>

                <ul class="navigation-list">
                    <li class="navigation-item animation-nav class-for-anime nav-positon active-link">
                        <a class="nav-link-box " href="#home">
                            В начало
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#catalog">
                            Каталог
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#new">
                            Наши новинки
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#recomendation">
                            Мы рекомендуем
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#idea">
                            Идеи для вас
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#pop">
                            Популярные товары
                        </a>
                    </li>
                    <li class="navigation-item animation-nav class-for-anime nav-positon">
                        <a class="nav-link-box" href="#footer">
                            Контакты
                        </a>
                    </li>
                </ul>

                <div class="auth">
                    <ul class="auth-list">
                        <li class="auth-item auth-search" data-tooltipe="Поиск">
                            <img class="img-auth-item" src="{{asset('/img/icon/search.png')}}" alt="Поиск по сайту">
                        </li>
                        <li class="auth-item" data-tooltipe="Избранное">
                            <a class="link-auth-item" href="{{route('profileFavorites')}}">
                                <i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="auth-item" data-tooltipe="Корзина">
                            <a class="link-auth-item" href="{{route('profileCart')}}">
                                <i class="fa fa-shopping-cart fa-2x fa-cart" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="auth-item enter-profile" @if(Auth::check())data-tooltipe="Личный кабинет" @else data-tooltipe="Вход / Регистрация"@endif>
                            <div class="wrap-auth-item-box">
                                @if(Auth::check())
                                <a class="link-auth-item" href="{{route('private')}}">
                                   <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                                </a>
                                <artical class="link-auth-item js-call">
                                   <i class="fa fa-sign-in fa-3x fa-sign" aria-hidden="true"></i>
                                </artical>
                                @else
                                <a class="link-auth-item auth-item-slid" href="{{route('private')}}">
                                   <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                                </a>
                                <artical class="link-auth-item auth-item-slid js-call">
                                   <i class="fa fa-sign-in fa-3x fa-sign" aria-hidden="true"></i>
                                </artical>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @include('app-page.index-page.index-box.index-search')
