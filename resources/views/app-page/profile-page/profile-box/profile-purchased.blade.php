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
            <h1 class="private-page-h1">Купленные товары</h1>
        </div>

        <div class="main-private-data-item">
            <div class="wrap-head-page-h3">
                <h3 class="private-page-h3 color-private">Список товаров:</h3>
            </div>

            <div class="empty-block">
                <article class="empty-box">
                    Вы пока не купили ни одного товара. После покупки товар появится тут.
                </article>
                <a class="accept empty-link" href="">Каталог</a>
            </div>

            <div class="full-block">
                <div class="cart-block purchased">
                    <ul class="main-block-list block-3fr-alt height-box-content">
                        <li class="main-block-item wrap-item-content-block">
                            <a class="main-block-link item-block-border" href="/html/check/order-past.html">
                                <img class="main-block-item-img" src="/img/src/static/catalog/livingroom.jpg" alt="Модульные гостиные">
                                <div class="filter-main" data-link="Посмотреть">
                                    <div class="main-block-box-content">
                                        <div class="main-block-info">
                                            <article class="main-block-article">
                                                Гостиная Града
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-content-block">
                                <div class="item-content-box">
                                    <ul class="item-content-box-list">
                                        <li class="item-content-box-item">
                                            Гостиная Града (Модульная)
                                        </li>
                                        <li class="item-content-box-item">
                                            Цвет: Белфорт / Шимо
                                        </li>
                                        <li class="item-content-box-item">
                                            Дата покупки: 14.10.2023
                                        </li>
                                        <li class="item-content-box-item">
                                            11000 &#8381
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
