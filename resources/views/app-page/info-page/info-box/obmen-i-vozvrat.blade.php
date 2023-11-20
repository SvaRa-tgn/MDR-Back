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
                    Обмен и возврат
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Обмен и возврат.
            </li>
            <li class="block-info-content-item inform-bold">
                На основании Закона РФ «О защите прав потребителей» Статья 26.1.:
            </li>
            <li class="block-info-content-item inform-italic">
                «Потребитель вправе отказаться от товара в любое время до его передачи, а после передачи товара - в течение семи дней.
            </li>
            <li class="block-info-content-item inform-italic">
                В случае, если информация о порядке и сроках возврата товара надлежащего качества не была предоставлена в письменной форме в момент доставки товара, потребитель вправе отказаться от товара в течение трех месяцев с момента передачи товара.
            </li>
            <li class="block-info-content-item inform-italic">
                Возврат товара надлежащего качества возможен в случае, если сохранены его товарный вид, потребительские свойства, а также документ, подтверждающий факт и условия покупки указанного товара.»
            </li>
            <li class="block-info-content-item">
                Для возврата и обмена товара покупатель должен обратиться, в установленный, статьей 26.1. Закона РФ «О защите прав потребителей», срок к менеджеру компании. Для этого следует написать письмо и указать причину возврата\обмена товара:
            </li>
            <li class="block-info-content-item">
                email: <span class="inform-link">manager@mydecor-room.ru</span>
            </li>
            <li class="block-info-content-item">
                Или связаться по телефону:
            </li>
            <li class="block-info-content-item">
                телефон: <a class="inform-link" href="tel:+79209685108">+7 920 968-51-08</a>
            </li>
            <li class="block-info-content-item inform-bold">
                Возврат и обмен. Возможен согласно со статьей 26.1. Закона РФ «О защите прав потребителей», если соблюдены следующие условия:
            </li>
            <li class="block-info-content-item">
                - Товар не подвергался сборке;
            </li>
            <li class="block-info-content-item">
                - Товар не был в употреблении;
            </li>
            <li class="block-info-content-item">
                - Сохранены товарный вид и потребительские свойства товара;
            </li>
            <li class="block-info-content-item">
                - Имеется товарный или кассовый чек, либо иной документ, подтверждающий оплату товара.
            </li>
            <li class="block-info-content-item">
                Возврату не подлежат индивидуально-определенные товары надлежащего качества - любые товары, поставляемые по заказной программе.
            </li>
            <li class="block-info-content-item">
                При отказе потребителя от товара продавец должен возвратить ему денежную сумму, уплаченную потребителем по договору, за исключением расходов продавца на доставку от потребителя возвращенного товара.
            </li>
            <li class="block-info-content-item">
                При возврате товара продавец возвращает деньги покупателю, обычно срок возврата денежных средств составляет 10 дней, но в некоторых случаях срок возврата денежных средств может быть увеличен – это зависит от работы банков.
            </li>
            <li class="block-info-content-item">
                При оплате товара банковской картой деньги будут возвращены только на банковскую карту покупателя, которая была использована при покупки товара в нашем интернет-магазине.
            </li>
            <li class="block-info-content-item">
                При оплате товара наличными деньги могут быть возвращены как покупателю как наличными, так и на его банковский счет.
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
