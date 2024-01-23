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
                <a class="breadcrumbs-link" href="{{route('information.index')}}">Информация</a>
            </li>
            <li class="breadcrumbs-item">
                /
            </li>
            <li class="breadcrumbs-item">
                Как оформить заказ
            </li>
        </ul>
    </div>
</section>

<section class="main-block main-medium-aside-rv">
    <ul class="block-info-content-list">
        <li class="block-info-content-item">
            Как правильно оформить заказ.
        </li>
        <li class="block-info-content-item">
            В нашем интернет-магазине представлен широкий выбор мебели для дома и офиса. Со всей номенклатурой мебели мы рекомендуем вам ознакомиться в нашем <a class="inform-link" href="/html/catalog/catalog.html">Каталоге</a>
        </li>
        <li class="block-info-content-item">
            У нас постоянно добавляется новая мебель и чтобы не пропустить новинки просим вас подписаться на наши рассылки, чтобы вы были в курсе наших новинок.
        </li>
        <li class="block-info-content-item">
            Перед тем как приступить к оформлению заказа внимательно изучите его характеристики, сделайте необходимые замеры (все размеры товаров указаны в их описании), убедитесь, что выбранный вами товар необходимых размеров и подходит вам по стилю, качество нашей мебели мы гарантируем!
        </li>
        <li class="block-info-content-item">
            Обращаем ваше внимание(!!!), что наш магазин, по мимо розничной продажи мебели, так же занимается оптовыми поставками по всей центральной России. Поэтому наличие товара на складе постоянно меняется.
        </li>
        <li class="block-info-content-item">
            Перед тем как заказать товар мы настоятельно рекомендуем связаться с нашими менеджерами и уточнить наличия товара на складе, сроки доставки или сроки поставок товара на наш склад! Связаться с менеджерами можно:
        </li>
        <li class="block-info-content-item">
            телефон: <a class="inform-link" href="tel:+79209685108">+7 920 968-51-08</a>
        </li>
        <li class="block-info-content-item">
            email: <span class="inform-link">manager@mydecor-room.ru</span>
        </li>
        <li class="block-info-content-item">
            Менеджер сообщит вам наличие товара на складе, сроки доставки, а так же ответит на все ваши вопросы.
        </li>
        <li class="block-info-content-item">
            Если вас все устраивает, то переходите не посредственно к оформлению вашего заказа. Для этого нажмите, на станице товара, кнопку «купить» заполните необходимые формы или позвоните нам и оформите покупку через менеджера.
        </li>
        <li class="block-info-content-item">
            После оформления заказа нужно произвести оплату товара. Оплату мы можете произвести одним из подходящих для вас способов:
        </li>
        <li class="block-info-content-item">
            - за наличный расчет.
        </li>
        <li class="block-info-content-item">
            - безналичный расчет.
        </li>
        <li class="block-info-content-item">
            - оплата на сайте.
        </li>
        <li class="block-info-content-item">
            Подробнее об оплате вы можете прочитать в разделе – <a class="inform-link" href="{{route('oplata')}}">Оплата</a>.
        </li>
    </ul>
@include('static.aside.info-aside')
@include('app-page.index-page.index-box.index-subscrible')
@endsection
