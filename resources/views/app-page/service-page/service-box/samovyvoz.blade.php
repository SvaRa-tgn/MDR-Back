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
                    Самовывоз
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item inform-content-bold">
                Самовывоз.
            </li>
            <li class="block-info-content-item">
                Вы можете забрать купленный вами товар самостоятельно с нашего склада:
            </li>
            <li class="block-info-content-item">
                г. Рязань, Ряжское шоссе, д.20 «КАСКАД»
            </li>
            <li class="block-info-content-item">
                Понедельник - Пятница с 09:00 до 18:00.
            </li>
            <li class="block-info-content-item">
                Все вопросы с доставкой и самовывозом вы можете уточнить у нашего менеджера:
            </li>
            <li class="block-info-content-item">
                телефон: <a class="inform-link" href="tel:+79209685108">+7 920 968-51-08</a>
            </li>
            <li class="block-info-content-item">
                email: <span class="inform-link">manager@mydecor-room.ru</span>
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
