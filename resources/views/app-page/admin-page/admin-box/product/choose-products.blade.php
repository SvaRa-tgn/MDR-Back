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
                    Создание товаров
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')
        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Создание товаров</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Выберите тип товара:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr-pr-menu">
                        <div class="admin-setup-product">
                            <img class="main-block-item-img" src="{{asset('/img/static/setup/modul.png')}}" />
                            <div class="filter-setup">
                                <a class="setup-link" href="{{route('createCompilation')}}">
                                    Создать модульный комплект
                                </a>
                            </div>
                        </div>

                        <div class="admin-setup-product">
                            <img class="main-block-item-img" src="{{asset('/img/static/setup/ready.png')}}" />
                            <div class="filter-setup">
                                <a class="setup-link" href="{{route('productCreate')}}">
                                    Создать простой товар
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
