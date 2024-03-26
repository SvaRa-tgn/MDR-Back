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
                    <a class="breadcrumbs-link" href="{{route('adminka')}}">Админка</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Управление товарами
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')
        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Управление товарами</h1>
            </div>

            <ul class="admin-product-setup-list">
                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/all-prod.jpeg')}}" alt="Все товары"/>
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('productAll', ['page'=>'all_products'])}}">
                            Все товары
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/prodaza.jpg')}}" alt="Товары в продаже"/>
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('productAll', ['page'=>'v_prodazhe'])}}">
                            Товары в продаже
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/rezerv.jpg')}}" alt="Товары в резерве" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('productAll', ['page'=>'rezerved'])}}">
                            Товары в резерве
                        </a>
                    </div>
                </li>

                <li class="admin-setup-item">
                    <img class="main-block-item-img" src="{{asset('/img/static/setup/notsee.jpg')}}" alt="Неопубликованные товары" />
                    <div class="filter-setup">
                        <a class="setup-link" href="{{route('productAll', ['page'=>'dont_display'])}}">
                            Не отображенные товары
                        </a>
                    </div>
                </li>
            </ul>
        </section>
    </section>
@endsection
