@extends('app-page/info-page/info')
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
                Информация
            </li>
        </ul>
    </div>
</section>

<section class="main-block main-min-aside">
    <aside class="aside aside-min alt-bg">
        <article class="aside-name-block">
            <h2 class="aside-block-h2 ab-left alt-color">
                Информация
            </h2>
        </article>
    </aside>

    <div class="content-main-block">
        <ul class="main-block-list block-3fr box-align-right">
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('infoUser')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/1.jpg')}}" alt="Информация для покупателей">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Информация для покупателей
                                </article>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('howDesignOrder')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/2.jpg')}}" alt="Как оформить заказ">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Как оформить заказ
                                </article>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('obmenVozvrat')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/3.jpg')}}" alt="Обмен и возврат">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Обмен и возврат
                                </article>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('personalData')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/5.jpg')}}" alt="Персональные данные">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Персональные данные
                                </article>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('offerta')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/6.jpg')}}" alt="Публичная оферта">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Публичная оферта
                                </article>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="main-block-item">
                <a class="main-block-link" href="{{route('cookies')}}">
                    <img class="main-block-item-img" src="{{asset('/img/static/inform/9.jpg')}}" alt="Cookies">
                    <div class="filter-main" data-link="Посмотреть">
                        <div class="main-block-box-content position-for-catalog">
                            <div class="main-block-info">
                                <article class="main-block-article">
                                    Cookies
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

