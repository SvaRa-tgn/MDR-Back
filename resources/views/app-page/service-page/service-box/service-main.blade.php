@extends('app-page/service-page/service')
@section('content')
    <section class="breadcrumbs">
        <div class="wrap-breadcrumbs">
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('/.index')}}">Главная</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Услуги
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-min-aside">
        <aside class="aside aside-min alt-bg">
            <article class="aside-name-block">
                <h2 class="aside-block-h2 ab-left alt-color">
                    Услуги
                </h2>
            </article>
        </aside>

        <div class="content-main-block">
            <ul class="main-block-list block-3fr box-align-right">
                <li class="main-block-item">
                    <a class="main-block-link" href="{{route('oplata')}}">
                        <img class="main-block-item-img" src="{{asset('/img/static/inform/4.jpg')}}" alt="Оплата">
                        <div class="filter-main" data-link="Посмотреть">
                            <div class="main-block-box-content position-for-catalog">
                                <div class="main-block-info">
                                    <article class="main-block-article">
                                        Оплата
                                    </article>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="main-block-item">
                    <a class="main-block-link" href="{{route('delivery')}}">
                        <img class="main-block-item-img" src="{{asset('/img/static/inform/7.jpg')}}" alt="Доставка">
                        <div class="filter-main" data-link="Посмотреть">
                            <div class="main-block-box-content position-for-catalog">
                                <div class="main-block-info">
                                    <article class="main-block-article">
                                        Доставка
                                    </article>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="main-block-item">
                    <a class="main-block-link" href="{{route('samovyvoz')}}">
                        <img class="main-block-item-img" src="{{asset('/img/static/inform/10.jpeg')}}" alt="Самовывоз">
                        <div class="filter-main" data-link="Посмотреть">
                            <div class="main-block-box-content position-for-catalog">
                                <div class="main-block-info">
                                    <article class="main-block-article">
                                        Самовывоз
                                    </article>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="main-block-item">
                    <a class="main-block-link" href="{{route('sborka')}}">
                        <img class="main-block-item-img" src="{{asset('/img/static/inform/8.jpg')}}" alt="Сборка">
                        <div class="filter-main" data-link="Посмотреть">
                            <div class="main-block-box-content position-for-catalog">
                                <div class="main-block-info">
                                    <article class="main-block-article">
                                        Сборка
                                    </article>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
