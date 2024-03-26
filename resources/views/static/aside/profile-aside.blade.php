<aside class="aside aside-nav">
    <div class="wrap-aside-nav alt-bg">
        <div class="aside-block">
            <div class="aside-logo">
                <img class="aside-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
            </div>

            <h2 class="aside-profile-h2">Личный кабинет:</h2>
            <ul class="aside-profile-nav-list">
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('private')}}">Личные данные</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('profileCart')}}">Корзина</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('profileFavorites')}}">Избранные товары</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('profilePurchased')}}">Купленные товары</a>
                </li>
            </ul>

            <a  href="{{route('servicePage')}}"><h2 class="aside-profile-h2">Услуги:</h2></a>
            <ul class="aside-profile-nav-list">
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('delivery')}}">Доставка</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('samovyvoz')}}">Самовывоз</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('sborka')}}">Сборка</a>
                </li>
                <li class="aside-profile-nav-item">
                    <a class="link-aside-profile" href="{{route('oplata')}}">Оплата</a>
                </li>
            </ul>
            @if(Auth::user()->role === 'admin')
                <a class="link-aside" href="{{route('adminka')}}"><h2 class="aside-h2">АДМИНКА</h2></a>
            @endif
        </div>
    </div>
    <div class="wrap-aside-h1 wrap-a-left">
        <h1 class="aside-h1 alt-color">
            Личный кабинет
        </h1>
    </div>
</aside>
