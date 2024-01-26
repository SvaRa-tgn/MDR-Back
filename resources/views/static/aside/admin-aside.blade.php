<aside class="aside aside-nav">
    <div class="wrap-admin-aside-nav bg-admin">
        <div class="aside-block">
            <div class="aside-admin-logo">
                <img class="aside-admin-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
            </div>
            <h2 class="aside-admin-h2">Админка:</h2>
            <ul class="aside-admin-nav-list">
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('adminka')}}">Главная</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="/html/admin/slider.html">Слайдер</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="/html/admin/mail.html">Рассылка</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="/html/admin/user.html">Пользователи</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('excel')}}">Excel</a>
                </li>
            </ul>

            <h2 class="aside-admin-h2">Классификация:</h2>
            <ul class="aside-admin-nav-list">
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('category')}}">Категории</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('subCategory')}}">Подкатегория</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('modulCollection')}}">Коллекции (Модуль)</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('readyCollection')}}">Коллекции (Готовая)</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('color')}}">Цвет для мебели</a>
                </li>
            </ul>

            <h2 class="aside-admin-h2">Товар:</h2>
            <ul class="aside-admin-nav-list">
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('product')}}">Создать товар</a>
                </li>
                <li class="aside-admin-nav-item">
                    <a class="link-aside-admin" href="{{route('editProduct')}}">Редактировать товар</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="wrap-aside-h1 wrap-a-left">
        <h1 class="aside-h1 color-admin">
            Админка
        </h1>
    </div>
</aside>
