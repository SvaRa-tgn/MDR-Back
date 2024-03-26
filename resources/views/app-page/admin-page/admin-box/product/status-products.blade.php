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
                    <a class="breadcrumbs-link" href="{{route('product')}}">Управление товарами</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    @if($page === 'v_prodazhe')
                        Товары в продаже
                    @elseif($page === 'rezerved')
                        Товары в резерве
                    @elseif($page === 'dont_display')
                        Не отображенные товары
                    @else
                        Все товары
                    @endif
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')
        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                @if($page === 'v_prodazhe')
                <h1 class="private-page-h1">Все товары в продаже</h1>
                @elseif($page === 'rezerved')
                <h1 class="private-page-h1">Все товары в резерве</h1>
                @elseif($page === 'dont_display')
                <h1 class="private-page-h1">Все не отображенные товары</h1>
                @else
                <h1 class="private-page-h1">Все товары</h1>
                @endif
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    @if($page === 'v_prodazhe')
                        <h3 class="private-page-h3 color-admin">Список всех товаров в продаже:</h3>
                    @elseif($page === 'rezerved')
                        <h3 class="private-page-h3 color-admin">Список всех товаров в резерве:</h3>
                    @elseif($page === 'dont_display')
                        <h3 class="private-page-h3 color-admin">Список всех не отображенных товаров:</h3>
                    @else
                        <h3 class="private-page-h3 color-admin">Список всех товаров:</h3>
                    @endif
                </div>

                <section class="content-admin-block">
                    <section class="admin-block-db">
                        <section class="search-product admin-block-2fr-product">
                            <form class="form-sample-product" data-form="search" method="POST" action="{{ route('searchSetupProduct', ['page'=>$page])}}" enctype="multipart/form-data">
                                @csrf
                                <article class="name-admin-block">
                                    Найдите товар
                                </article>
                                <div class="wrap-input Error" data-answer="Вы не ввели название Товара или его Артикль">
                                    <label class="form-label">
                                        Поиск в базе: по названию или артиклю.
                                    </label>
                                    <input class="admin-select input-sample-product" type="text" id="search" name="search" value="{{ old('search') }}"/>
                                </div>
                                <div class="wrap-button" data-search="Ищем товар">
                                    <button class="button-auth accept" type="submit" name="submit-auth">Найти</button>
                                </div>
                            </form>

                            <div class="search-answer">
                                <article class="name-admin-block">
                                    Результат поиска:
                                </article>
                                <div class="wrap-relevant-info">
                                    <div class="db-non-list">
                                        Сделайте поиск.
                                    </div>

                                    <ul class="relevant-info-list">

                                    </ul>

                                </div>
                            </div>
                        </section>

                        <section class="wrap-product-box">
                            <article class="db-admin-article">
                                Список товаров в базе:
                            </article>
                            @if(empty($products))
                                <div class="db-non-list">
                                    Товаров нет.
                                </div>
                            @else
                                @foreach($subCategories as $subCategory)
                                    @foreach($products as $product)
                                        @if($subCategory->id === $product['sub_category_id'])
                                            <div class="db-admin-article db-admin-list">
                                                {{$subCategory->sub_category}}
                                            </div>
                                            @break
                                        @endif
                                    @endforeach
                                    <ul class="relevant-info-list-pr">
                                        @foreach($products as $product)
                                            @if($subCategory->id === $product['sub_category_id'])
                                                @if($product['status'] === 'Резерв')
                                                <li class="db-relevant-info-item-pr form-label admin-block-3fr-pr color-product-rz" data-action="Категорию">
                                                @elseif($product['status'] === 'Не отображать')
                                                <li class="db-relevant-info-item-pr form-label admin-block-3fr-pr color-product-ds" data-action="Категорию">
                                                @else
                                                <li class="db-relevant-info-item-pr form-label admin-block-3fr-pr" data-action="Категорию">
                                                @endif
                                                    <article class="collect-article" >{{$product['full_name']}}</article>
                                                    <article class="collect-article" >{{$product['status']}}</article>
                                                    @if($product['type'] === 'Комплект')
                                                    <a class="mdr-button accept modul-button-delete" href="{{route('editModulCompilation', $product['slug_full_name'])}}">
                                                        Редактировать
                                                    </a>
                                                    @else
                                                        <a class="mdr-button accept modul-button-delete" href="{{route('editProduct', $product['slug_full_name'])}}">
                                                            Редактировать
                                                        </a>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endforeach
                            @endif
                        </section>
                    </section>
                </section>
            </div>
        </section>
    </section>
@endsection
