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
                    Доставка
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Доставка по г. Рязани: 750 рублей
            </li>
            <li class="block-info-content-item">
                При заказе от 30000 рублей доставка бесплатно.
            </li>
            <li class="block-info-content-item">
                Стоимость доставки по Рязанской области просим уточнят у нашего менеджера.
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
