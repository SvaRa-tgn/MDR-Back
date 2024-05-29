@extends('/app-page/profile-page/profile')
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
                Личный кабинет
            </li>
        </ul>
    </div>
</section>

<section class="main-block main-medium-aside">
    @include('static.aside.profile-aside')
    <section class="private-main-block">
        <div class="wrap-head-page alt-bg">
            <h1 class="private-page-h1">Избранные товары</h1>
        </div>

        <div class="main-private-data-item">
            <div class="wrap-head-page-h3">
                <h3 class="private-page-h3 color-private">Добавленные товары:</h3>
            </div>

            <div class="empty-block">
                <article class="empty-box">
                    Вы пока не добавили ни одного товара в избранное. Добавьте их и они появятся тут.
                </article>
                <a class="mdr-button accept empty-link" href="">Каталог</a>
            </div>

            <div class="full-block">
                <div class="cart-top-block">
                    <div class="wrap-cart-checkbox">
                        <label class="toggler-wrapper style-8">
                            <input type="checkbox" class="head-cart-checkbox" checked>
                            <div class="toggler-slider">
                                <div class="toggler-knob"></div>
                            </div>
                        </label>
                        <div class="cart-checkbox-label" for="all-checkbox">Выбрать все товары</div>
                    </div>
                    <div class="wrap-cart-cancel">
                        <button class="cart-button-cancel stop">Очистить избранное</button>
                    </div>
                </div>

                <div class="cart-block">
                    <ul class="cart-block-list">
                        <li class="cart-block-item">
                            <label class="toggler-wrapper style-8">
                                <input type="checkbox" class="cart-checkbox" checked>
                                <div class="toggler-slider">
                                    <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <a class="main-block-link" href="#">
                                <img class="main-block-item-img" src="/img/src/static/catalog/child.jpg" alt="Детские">
                                <div class="filter-main" data-link="Посмотреть">
                                    <div class="main-block-box-content">
                                        <div class="main-block-info">
                                            <article class="main-block-article">
                                                Макияжный стол №1
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="cart-block-info">
                                <div class="cart-name-product">
                                    Макияжный стол №1 (Дуб крафт серый)
                                </div>
                                <div class="cart-name-article">
                                    ЦБ-00038996
                                </div>
                                <div class="cart-name-price">
                                    <span class="cart-price-box">11500</span> &#8381
                                </div>
                                <ul class="cart-block-icon-list">
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Убрать из избранного">
                                        <i class="fa fa-heart fa-2x fa-heart-private" aria-hidden="true"></i>
                                    </li>
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="В корзину">
                                        <i class="fa fa-shopping-cart fa-2x fa-cart" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="cart-block-item">
                            <label class="toggler-wrapper style-8">
                                <input type="checkbox" class="cart-checkbox" checked>
                                <div class="toggler-slider">
                                    <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <a class="main-block-link" href="#">
                                <img class="main-block-item-img" src="/img/src/static/catalog/child.jpg" alt="Детские">
                                <div class="filter-main" data-link="Посмотреть">
                                    <div class="main-block-box-content">
                                        <div class="main-block-info">
                                            <article class="main-block-article">
                                                Макияжный стол №1
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="cart-block-info">
                                <div class="cart-name-product">
                                    Макияжный стол №1 (Дуб крафт серый)
                                </div>
                                <div class="cart-name-price">
                                    <span class="cart-price-box">12000</span> &#8381
                                </div>
                                <ul class="cart-block-icon-list">
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Добавить в избраное">
                                        <i class="fa fa-heart fa-2x fa-heart-private" aria-hidden="true"></i>
                                    </li>
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Удалить">
                                        <i class="fa fa-trash-o fa-2x fa-delete" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="cart-block-item">
                            <label class="toggler-wrapper style-8">
                                <input type="checkbox" class="cart-checkbox" checked>
                                <div class="toggler-slider">
                                    <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <a class="main-block-link" href="#">
                                <img class="main-block-item-img" src="/img/src/static/catalog/child.jpg" alt="Детские">
                                <div class="filter-main" data-link="Посмотреть">
                                    <div class="main-block-box-content">
                                        <div class="main-block-info">
                                            <article class="main-block-article">
                                                Макияжный стол №1
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="cart-block-info">
                                <div class="cart-name-product">
                                    Макияжный стол №1 (Дуб крафт серый)
                                </div>
                                <div class="cart-name-price">
                                    <span class="cart-price-box">13000</span> &#8381
                                </div>
                                <ul class="cart-block-icon-list">
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Добавить в избраное">
                                        <i class="fa fa-heart fa-2x fa-heart-private" aria-hidden="true"></i>
                                    </li>
                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Удалить">
                                        <i class="fa fa-trash-o fa-2x fa-delete" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <div class="cart-block-draw">
                        <div class="wrap-draw-button">
                            <a class="draw-link accept" href="/html/check/checkout.html">Добавить в корзину</a>
                        </div>
                        <div class="cart-block-draw-top">
                            <article class="draw-top-first">
                                Всего: <span class="lenght-cart"></span>
                            </article>
                            <article class="draw-top-second">
                                <span class="total-cart"></span> &#8381
                            </article>
                        </div>
                        <ul class="draw-up-list">
                            <li class="draw-up-item">
                                Макияжный стол №1 (Дуб крафт серый)
                            </li>
                            <li class="draw-up-item">
                                11000 &#8381
                            </li>
                            <li class="draw-up-item">
                                Макияжный стол №1 (Дуб крафт серый)
                            </li>
                            <li class="draw-up-item">
                                11000 &#8381
                            </li>
                        </ul>
                        <div class="draw-up-total">
                            <ul class="draw-up-total-list">
                                <li class="draw-up-total-item">
                                    Без скидки
                                </li>
                                <li class="draw-up-total-item">
                                    <span class="total-cart"></span> &#8381
                                </li>
                                <li class="draw-up-total-item">
                                    Со скидкой
                                </li>
                                <li class="draw-up-total-item">
                                    <span class="total-cart"></span> &#8381
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
