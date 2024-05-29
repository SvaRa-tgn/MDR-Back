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

    <section class="main-block main-medium-aside-rv">
        <div class="wrap-checkout">
            <div class="checkout-block">
                @if(Auth::check())
                <div class="checkout-private-data">
                    <div class="wrap-box-h2">
                        <h2 class="checkout-h2">1. Личная информация</h2>
                    </div>
                    <ul class="checkout-data-list">
                        <li class="checkout-data-item">
                            Фамилия:
                        </li>
                        <li class="checkout-data-item">
                            {{$user->familia}}
                        </li>
                        <li class="checkout-data-item">
                            Имя:
                        </li>
                        <li class="checkout-data-item">
                            {{$user->name}}
                        </li>
                        <li class="checkout-data-item">
                            Отчество:
                        </li>
                        <li class="checkout-data-item">
                            {{$user->father_name}}
                        </li>
                        <li class="checkout-data-item">
                            Телефон:
                        </li>
                        <li class="checkout-data-item">
                            +7{{$user->phone}}
                        </li>
                        <li class="checkout-data-item">
                            email:
                        </li>
                        <li class="checkout-data-item">
                            {{$user->email}}
                        </li>
                    </ul>
                </div>
                @else
                <div class="checkout-non-private-data">
                    <div class="wrap-box-h2">
                        <h2 class="checkout-h2">1. Личная информация</h2>
                    </div>
                    <form class="form-checkout-non-private-data">
                        <label class="ladel-checkout-non-checkout-data">
                            Фамилия:
                        </label>
                        <input id="lastname" type="text" name="lastname" placeholder="Фамилия" class="input-checkout-non-checkout-data" />

                        <label class="ladel-checkout-non-checkout-data">
                            Имя:
                        </label>
                        <input id="name" type="text" name="name" placeholder="Имя" class="input-checkout-non-checkout-data" />

                        <label class="ladel-checkout-non-checkout-data">
                            Отчество:
                        </label>
                        <input id="surname" type="text" name="surname" placeholder="Отчество" class="input-checkout-non-checkout-data" />

                        <label class="ladel-checkout-non-checkout-data">
                            Телефон:
                        </label>
                        <input id="phone" type="number" name="phone" placeholder="" class="input-checkout-non-checkout-data" />

                        <label class="ladel-checkout-non-checkout-data">
                            email:
                        </label>
                        <input id="email" type="email" name="email" placeholder="polzovatel@mail.ru" class="input-checkout-non-checkout-data" />
                    </form>
                </div>
                @endif
                <div class="checkout-cart">
                    <div class="wrap-box-h2">
                        <h2 class="checkout-h2">2. Информация о товаре</h2>
                    </div>
                    <ul class="checkout-cart-list">
                        @foreach($products as $product)
                        <li class="checkout-cart-item">
                            <div class="wrap-checkout-cart-img">
                                <div class="main-block-link">
                                    <img class="main-block-item-img" src="{{$product['link']}}" alt="Детские">
                                </div>
                                <div class="checkout-cart-info">
                                    <div class="checkout-cart-name-product">
                                        {{$product->full_name}}
                                    </div>
                                    <div class="checkout-cart-index-product">
                                        {{$product->article}}
                                    </div>
                                    <div class="checkout-cart-name-price">
                                        <span>Цена: <span class="span-price">{{$product->price}}</span> &#8381</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="checkout-pay">
                    <div class="wrap-box-h2">
                        <h2 class="checkout-h2">3. Получение товара</h2>
                    </div>
                    <ul class="checkout-delivery-list">
                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-delivery" checked>
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            Самовывоз со склада
                                        </article>
                                        <article class="delivery-adress">
                                            г. Рязань, Ряжское шоссе 20, "КАСКАД"
                                        </article>
                                        <article class="delivery-adress">
                                            Время работы: пн-сб 10:00-19:30, вс 10:00-18:00
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-delivery">
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            Самовывоз из магазина
                                        </article>
                                        <article class="delivery-adress">
                                            г. Рязань, проезд Яблочкова, дом 4И, 1-й этаж мебельго центра "Мебель и точка"
                                        </article>
                                        <article class="delivery-adress">
                                            Время работы: пн-сб 10:00-19:30, вс 10:00-18:00
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-delivery">
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            Доставка курьером
                                        </article>
                                        <article class="delivery-adress">
                                            Доставка по г. Рязани до подъезда: <span class="delivery-price">750</span> &#8381
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="checkout-delivery">
                    <div class="wrap-box-h2">
                        <h2 class="checkout-h2">4. Оплата</h2>
                    </div>
                    <ul class="checkout-delivery-list">
                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-pay">
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            Банковской картой
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-pay">
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            QR код по СПБ
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="checkout-delivery-item">
                            <ul class="delivery-list">
                                <li class="delivery-item">
                                    <label class="toggler-wrapper style-8">
                                        <input type="checkbox" class="checkbox-pay">
                                        <div class="toggler-slider">
                                            <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="delivery-box">
                                        <article class="delivery-var">
                                            Наличными при получении
                                        </article>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="wrap-checkout-accept">
                <ul class="checkout-accept-list">
                    <li class="checkout-accept-item">
                        Всего товаров:
                    </li>
                    <li class="checkout-accept-item">
                        <span class="lenght"></span>
                    </li>
                    <li class="checkout-accept-item">
                        Сумма:
                    </li>
                    <li class="checkout-accept-item">
                        <span class="sum"></span> &#8381
                    </li>
                    <li class="checkout-accept-item delivery-li delivery-li-visible">
                        Доставка:
                    </li>
                    <li class="checkout-accept-item delivery-li delivery-li-visible">
                        750 &#8381
                    </li>
                    <li class="checkout-accept-item checkout-total">
                        Итого:
                    </li>
                    <li class="checkout-accept-item checkout-total">
                        <span class="total-sum"></span> &#8381
                    </li>
                </ul>

                <div class="wrap-pay-attention">
                    <div class="wrap-accept-pay">
                        <div class="accept-pay">
                            <a class="accept-pay-link stop" href="/html/check/order.html">Перейти к оплате</a>
                        </div>
                        <div class="accept-pay">
                            <a class="accept-pay-link stop" href="/html/check/order1.html">Перейти к оплате</a>
                        </div>
                        <div class="accept-pay">
                            <a class="accept-pay-link stop" href="/html/check/order2.html">Перейти к оплате</a>
                        </div>
                    </div>
                    <div class="wrap-attention">
                        <div class="checkout-attention">
                            Нажимая на кнопку “Перейти к оплате”, вы принимаете условия <a class="breadcrumbs-link" href="/html/info/pravila-i-polozheniya.html">Публичной оферты</a>
                            и <a class="breadcrumbs-link" href="/html/info/personalnye-dannye.html">Политику обработки ПДн</a>, и даете согласие на обработку ваших ПДн, включая их передачу
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('static.aside.info-aside')
    </section>
@endsection
