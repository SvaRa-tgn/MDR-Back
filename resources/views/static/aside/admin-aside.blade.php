<aside class="aside aside-nav">
    <div class="wrap-aside-nav bg-admin">
        <div class="aside-block">
            <div class="aside-logo">
                <img class="aside-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
            </div>
            <h2 class="aside-private-h2 aside-admine-h2">Админка:</h2>
            <ul class="aside-nav-list">
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="/html/admin/admin.html"><h2 class="admine-h3">Личные даные админа</h2></a>
                </li>
            </ul>

            <h2 class="aside-h2 aside-admine-h2">Классификатор для каталога:</h2>
            <ul class="aside-nav-list">
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('category.show')}}"><h2 class="admine-h3">Категория товара</h2></a>
                </li>
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('subCategory.show')}}"><h2 class="admine-h3">Подкатегория товара</h2></a>
                </li>
            </ul>

            <h2 class="aside-h2 aside-admine-h2">Товар:</h2>
            <ul class="aside-nav-list">
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('createProduct.show')}}"><h2 class="admine-h3">Создать товар</h2></a>
                </li>
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('editProduct.show')}}"><h2 class="admine-h3">Редактировать товар</h2></a>
                </li>
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('modulCollection.show')}}"><h2 class="admine-h3">Коллекция (Модуль)</h2></a>
                </li>
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('readyCollection.show')}}"><h2 class="admine-h3">Коллекция (Готовая)</h2></a>
                </li>
                <li class="aside-admine-nav-item">
                    <a class="link-aside-admine" href="{{route('colorProduct.show')}}"><h2 class="admine-h3">Цвет для мебели</h2></a>
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
