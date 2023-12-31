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
                    Информация для покупателей
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Информация для потребителей о мебельной продукции продаваемой на сайте интернет-магазина My Décor Room.
            </li>
            <li class="block-info-content-item">
                Основным приоритетом для нашей компании является качество и безопасность продаваемых товаров. Выпуск в обращение продукции осуществляется при условии соответствия ее требованиям действующего потребительского законодательства, законодательства о техническом регулировании Российской Федерации и международным стандартам.
            </li>
            <li class="block-info-content-item">
                В отношении мебельной продукции с 1 июля 2014 года вступил в силу технический регламент Таможенного союза «О безопасности мебельной продукции» (ТР ТС 025/2012), который устанавливает требования к мебельной продукции в целях защиты жизни и здоровья человека, имущества, окружающей среды и жизни и (или) здоровья животных и растений, а также предупреждения действий, вводящих в заблуждение пользователей.
            </li>
            <li class="block-info-content-item">
                В частности, согласно подпунктам 6.1 и 6.2 пункта 6 статьи 5 ТР ТС 025/2012, требования безопасности мебельной продукции при эксплуатации предусматривают:
            </li>
            <li class="block-info-content-item">
                1. использование мебельной продукции, выпущенной в обращение, должно осуществляться по назначению изделия мебели, указанному в маркировке, инструкции по сборке, эксплуатации и уходу, а также с учетом допустимых предельных нагрузок, указанных изготовителем.
            </li>
            <li class="block-info-content-item">
                2. мебельная продукция, поставляемая в разобранном виде, должна собираться в соответствии с приложенной изготовителем инструкцией по сборке, включающей комплектовочную ведомость и схему монтажа.
            </li>
            <li class="block-info-content-item">
                В соответствии с требованиями Закона Российской Федерации от 07.02.1992 № 2300-1 «О защите прав потребителей» интернет-магазин My Decor Room в наглядной и доступной форме обеспечивает полное информирование покупателей о правилах безопасного использования товаров. Данная информация присутствует на официальном сайте интернет-магазина и в документах, сопровождающих товар.
            </li>
            <li class="block-info-content-item">
                ИНТЕРНЕТ-МАГАЗИН MY DÉCOR ROOM ЕЩЕ РАЗ ПРИЗЫВАЕТ ПОКУПАТЕЛЕЙ СЛЕДОВАТЬ ПРАВИЛАМ БЕЗОПАСНОСТИ И СОБЛЮДАТЬ ИНСТРУКЦИИ ПО СБОРКЕ, ЭКСПЛУАТАЦИИ И УХОДУ, ИСПОЛЬЗОВАТЬ МЕБЕЛЬ СТРОГО ПО НАЗНАЧЕНИЮ С УЧЕТОМ РЕКОМЕНДАЦИЙ ИЗГОТОВИТЕЛЯ ПРОДУКЦИИ.
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
