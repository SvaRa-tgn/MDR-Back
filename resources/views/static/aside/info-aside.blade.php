<aside class="aside aside-nav-rv">
    <div class="wrap-aside-h1 wrap-a-right">
        <h1 class="aside-h1 alt-color info-h1 wnb-revers">
            {{$infoTitle}}
        </h1>
    </div>
    <div class="wrap-aside-nav alt-bg">
        <div class="aside-block">
            <div class="aside-logo">
                <img class="aside-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
            </div>
            <a class="link-aside" href="{{route('information.index')}}"><h2 class="aside-h2">Информация:</h2></a>
            <ul class="aside-nav-list">
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('pokupateli.index')}}"><h2 class="aside-h3">Информация для покупателей</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('zakaz.index')}}"><h2 class="aside-h3">Как оформить заказ</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('obmen.index')}}"><h2 class="aside-h3">Обмен и возврат</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('personality.index')}}"><h2 class="aside-h3">Персональные данные</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('offerta.index')}}"><h2 class="aside-h3">Публичная оферта</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('cookies.index')}}"><h2 class="aside-h3">Cookies</h2></a>
                </li>
            </ul>
            <a class="link-aside" href="{{route('service.index')}}"><h2 class="aside-h2">Услуги:</h2></a>
            <ul class="aside-nav-list">
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('delivery.index')}}"><h2 class="aside-h3">Доставка</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('samovyvoz.index')}}"><h2 class="aside-h3">Самовывоз</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('sborka.index')}}"><h2 class="aside-h3">Сборка</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('oplata.index')}}"><h2 class="aside-h3">Оплата</h2></a>
                </li>
            </ul>
        </div>
    </div>
</aside>
</section>
