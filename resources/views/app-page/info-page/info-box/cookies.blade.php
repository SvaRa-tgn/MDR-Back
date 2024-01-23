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
                    Cookies
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside-rv">
        <ul class="block-info-content-list">
            <li class="block-info-content-item">
                Политика использования файлов Cookies.
            </li>
            <li class="block-info-content-item">
                Интернет-магазин MDR использует файлы cookie для улучшения качества обслуживания. Некоторые файлы cookie необходимы для работы наших служб, другие же используются для сбора статистических данных о том, как вы используете веб-сайт, чтобы сделать его более удобным для вас. Некоторые файлы cookie являются временными и будут удалены после того, как вы закроете окно браузера, другие же — постоянные, они будут храниться на компьютере более продолжительное время. Кроме того, мы применяем локальные файлы cookie — они связаны с проведением локальных кампаний и будут удалены после завершения кампании.
            </li>
            <li class="block-info-content-item">
                Некоторые файлы cookie совершенно необходимы для работы сайта, другие же помогают нам улучшить его эффективность и сделать его интереснее для вас.
            </li>
            <li class="block-info-content-item inform-bold">
                Предназначение необходимых файлов cookie:
            </li>
            <li class="block-info-content-item">
                - Сохранение содержимого вашей корзины электронных покупок.
            </li>
            <li class="block-info-content-item">
                - Сохранение сведений о текущем этапе оформления заказа.
            </li>
            <li class="block-info-content-item inform-bold">
                Предназначение функциональных файлов cookie:
            </li>
            <li class="block-info-content-item">
                - Сохранение данных пользователя при входе на сайт.
            </li>
            <li class="block-info-content-item">
                - Проверка защиты данных пользователя при входе на сайт.
            </li>
            <li class="block-info-content-item">
                - Обеспечение согласованности отображаемой на сайте информации.
            </li>
            <li class="block-info-content-item">
                - Возможность предоставления поддержки через интернет-чат.
            </li>
            <li class="block-info-content-item inform-bold">
                Предназначение файлов cookie, улучшающих эффективность:
            </li>
            <li class="block-info-content-item">
                - Улучшение эффективности работы веб-сайта.
            </li>
            <li class="block-info-content-item">
                - Оптимизация сайта для пользователей.
            </li>
            <li class="block-info-content-item inform-bold">
                Предназначение файлов cookie, используемых для таргетинга:
            </li>
            <li class="block-info-content-item">
                - Обеспечение возможности поделиться информацией в социальных сетях.
            </li>
            <li class="block-info-content-item">
                - Передача другим веб-сайтам данных, используемых для персонализации рекламы.
            </li>
            <li class="block-info-content-item inform-bold">
                Файлы cookie используются для улучшения качества обслуживания. Примеры:
            </li>
            <li class="block-info-content-item">
                - Обеспечение функционирования некоторых специальных служб (в том числе платежных систем), которые не могут работать без использования файлов cookie.
            </li>
            <li class="block-info-content-item">
                - Идентификация пользователя по устройству. Благодаря таким файлам cookie вам не придется повторно вносить данные в ходе выполнения одной задачи.
            </li>
            <li class="block-info-content-item">
                - Определение количества пользователей различных услуг. Это помогает нам облегчить доступ к ним и обеспечить необходимую скорость работы.
            </li>
            <li class="block-info-content-item">
                - Анализ данных о характере использования онлайн-услуг. Это помогает нам улучшать их.
            </li>
            <li class="block-info-content-item">
                Если вы откажетесь от использования файлов cookie на нашем сайте, работа некоторых страниц и функций может быть нарушена. Например, вы не сможете воспользоваться списком покупок.
            </li>
            <li class="block-info-content-item">
                Если вы хотите удалить файлы cookie, уже хранящиеся на компьютере, воспользуйтесь инструкциями для вашего браузера, выбрав пункт «Помощь» из меню браузера.
            </li>
            <li class="block-info-content-item">
                Более подробные сведения о файлах cookie, их удалении и управлении ими содержатся на сайте <a class="inform-link" href="www.aboutcookies.org">www.aboutcookies.org</a> и в инструкциях к вашему браузеру (пункт меню «Помощь»).
            </li>
            <li class="block-info-content-item">
                Для получения дополнительной информации о том, как мы используем ваши персональные данные, см. наше <a class="inform-link" href="{{route('personalData')}}">Политика персональных данных</a>.
            </li>
        </ul>
    @include('static.aside.info-aside')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection
