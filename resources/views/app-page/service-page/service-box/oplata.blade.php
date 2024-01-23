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
                    <a class="breadcrumbs-link" href="{{route('servicePage')}}">Услуги</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Оплата
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Оплата.
            </li>
            <li class="block-info-content-item">
                На нашем сайте вы можете оплатить товар и услуги разными способами, выбирайте тот который больше вам подходит:
            </li>
            <li class="block-info-content-item inform-bold">
                1. Оплата наличными.
            </li>
            <li class="block-info-content-item">
                Вы можете оплатить товар и услуги наличными при доставке товара на дом. Для этого при заказе товара скажите нашему менеджеру, что вы хотите оплатить товар наличными при доставке товара на дом. Наш менеджер оформит ваш заказ.
            </li>
            <li class="block-info-content-item">
                При самовывозе с нашего склада. Для этого вы можете заказать товар и мы его «забронируем» для вас. Оплата товара произойдет при получении товара на нашем складе.
            </li>
            <li class="block-info-content-item">
                При получении товара в нашем магазине. ВЫ можете оплатить товар наличными в нашем магазине.
            </li>
            <li class="block-info-content-item inform-bold">
                2. Переводом на банковский счет.
            </li>
            <li class="block-info-content-item">
                Вы можете оплатить товар и услуги банковским переводом. Для этого свяжитесь с нашим менеджером. Мы оформим ваш товар и выставим вам счет на оплату, после проведения оплаты наш менеджер свяжется с вами для уточнения деталей доставки.
            </li>
            <li class="block-info-content-item inform-bold">
                3. Оплата на сайте банковской картой (в данный момент услуга не доступна).
            </li>
            <li class="block-info-content-item">
                Для этого просто нажмите на копку купить на странице товара. Товар автоматически добавиться в «корзину». Вы можете добавить в корзину сколько угодно товара. Когда вы будете готовы оплатить выбранный товар перейдите в «корзину» и нажмите кнопу «оплатить».
            </li>
            <li class="block-info-content-item inform-bold inform-italic">
                Внимание(!!!) в оплату попадет весь товар находящийся в корзине, поэтому перед оплатой внимательно проверьте список выбранного вами товара и при необходимости удалите товар, который вы не хотите в данный момент покупать!
            </li>
            <li class="block-info-content-item">
                После того как вы нажмете кнопку оплатить система переведет вас на защищенную банковскую страницу. Там вы вводите данные своей карты и завершаете оплату. После того как оплата пройдет с вами свяжется наш менеджер для подтверждения вашего заказа.
            </li>
            <li class="block-info-content-item inform-bold inform-italic">
                Внимание(!!!) перед покупкой обязательно уточняйте у менеджера наличие товара на нашем складе!
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
