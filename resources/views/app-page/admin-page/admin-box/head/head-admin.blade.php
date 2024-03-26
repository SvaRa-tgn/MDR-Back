@extends('/app-page/admin-page/admin')
@section('admin')
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
                    Админка
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')
        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Управление сайтом</h1>
            </div>

            <ul class="admin-setup-list">
                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/slide.jpeg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('sliders')}}">
                            Управление слайдером
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/mail.png')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="/html/admin/mail.html">
                            Управление рассылками
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/user.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('users')}}">
                            Управление пользователями
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/execl.jpeg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('excel')}}">
                            Загрузка Excel
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/category.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('category')}}">
                            Управление Категориями
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/sub-category.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('subCategory')}}">
                            Управление Подкатегориями
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/modul.png')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('itemCollection')}}">
                            Управление Коллекциями
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/color.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('color')}}">
                            Цвет мебели
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/product.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('chooseProducts')}}">
                            Создание товаров
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/update.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('searchEditProduct')}}">
                            Редактирование товаров
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/product-setup.jpg')}}" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('product')}}">
                            Управление товарами
                        </a>
                    </div>
                </li>
            </ul>
        </section>
    </section>
@endsection
