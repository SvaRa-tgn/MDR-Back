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
                <h1 class="private-page-h1">Корзина</h1>
            </div>


            <div class="main-private-data-item js-reload-block">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-private">Добавленные товары:</h3>
                </div>
                @if($carts->isEmpty())

                    <div class="empty-block">
                        <article class="empty-box">
                            Вы пока не добавили ни одного товара в корзину. Добавьте их и они появятся тут.
                        </article>

                        <a class="accept empty-link" href="{{route('catalogCategory')}}">Каталог</a>
                    </div>
                @else
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
                                <form class="button-cart-delete js-name-product" data-form="catalog-product"
                                      method="POST" action="{{route('destroyAllCart')}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="cart-button-cancel stop">Очистить корзину</button>
                                </form>
                            </div>
                        </div>

                        <div class="cart-block">
                            <ul class="cart-block-list">
                                @foreach($carts as $cart)
                                    <li class="cart-block-item">
                                        <label class="toggler-wrapper style-8">
                                            <input type="checkbox" class="cart-checkbox" checked>
                                            <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                            </div>
                                        </label>
                                        <a class="main-block-link"
                                           href="{{route('productPage', ['slugCategory' => $cart->slug_category , 'slugSubCategory' => $cart->slug_sub_category, 'slugFullName' => $cart->slug_full_name])}}">
                                            <img class="main-block-item-img" src="{{$cart->link}}"
                                                 alt="{{$cart->full_name}} купить в Рязани">
                                            <div class="filter-main" data-link="Посмотреть">
                                                <div class="main-block-box-content">
                                                    <div class="main-block-info">
                                                        <article class="main-block-article">
                                                            {{$cart->small_name}}
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="cart-block-info">
                                            <div class="cart-name-product">
                                                {{$cart->full_name}}
                                            </div>
                                            <div class="cart-name-article">
                                                {{$cart->article}}
                                            </div>
                                            <div class="cart-name-price">
                                                <span class="cart-price-box"
                                                      data-price="{{$cart->cPrice}}">{{$cart->price}}</span> &#8381
                                            </div>
                                            <ul class="cart-block-icon-list">
                                                <li class="cart-block-icon-item tooltipe"
                                                    data-tooltipe="Добавить в избраное">
                                                    <i class="fa fa-heart fa-2x fa-heart-private"
                                                       aria-hidden="true"></i>
                                                </li>
                                                <form class="button-cart-delete js-name-product"
                                                      data-form="catalog-product" method="POST"
                                                      action="{{route('destroyCart', $cart->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li class="cart-block-icon-item tooltipe" data-tooltipe="Удалить">
                                                        <i class="fa fa-trash-o fa-2x fa-delete" aria-hidden="true"></i>
                                                    </li>
                                                </form>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <form class="cart-block-draw js-add-order" method="POST" action="{{route('createOrder')}}">
                                @csrf
                                <div class="wrap-draw-button">
                                    <button class="draw-link accept">Перейти к
                                        оформлению</button>
                                </div>
                                <div class="cart-block-draw-top">
                                    <article class="draw-top-first">
                                        Всего: <span class="lenght-cart"></span>
                                    </article>
                                    <article class="draw-top-second">
                                        <span class="total-cart">{{$carts->sum('cPrice')}}</span> &#8381
                                    </article>
                                </div>
                                <ul class="draw-up-list">
                                    @foreach($carts as $cart)
                                        <li class="draw-up-item">
                                            <article class="draw-up-article orderName addOrder" data-name="{{$cart->slug_full_name}}">
                                                {{$cart->full_name}}
                                            </article>
                                            <article class="draw-up-article">
                                                {{$cart->price}} &#8381
                                            </article>
                                        </li>
                                    @endforeach
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
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </section>
@endsection
