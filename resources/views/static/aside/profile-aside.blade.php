<aside class="aside aside-nav">
    <div class="wrap-aside-nav alt-bg">
        <div class="aside-block">
            <div class="aside-logo">
                <img class="aside-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
            </div>
            <h2 class="aside-private-h2">Личный кабинет:</h2>
            <ul class="aside-nav-list">
                <li class="aside-nav-item">
                    <a class="link-aside" href="{{route('profile.index')}}"><h2 class="aside-h3">Личные даные</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href=""><h2 class="aside-h3">Корзина</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href=""><h2 class="aside-h3">Купленные товары</h2></a>
                </li>
                <li class="aside-nav-item">
                    <a class="link-aside" href=""><h2 class="aside-h3">Избранные товары</h2></a>
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
            @if(Auth::user()->role === 'admin')
            <a class="link-aside" href="{{route('admin.index')}}"><h2 class="aside-h2">АДМИНКА</h2></a>
            @endif
        </div>
    </div>
    <div class="wrap-aside-h1 wrap-a-left">
        <h1 class="aside-h1 alt-color">
            Личный кабинет
        </h1>
    </div>
</aside>
