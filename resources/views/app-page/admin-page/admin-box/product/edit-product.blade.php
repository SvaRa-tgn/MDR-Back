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
                    <a class="breadcrumbs-link" href="{{route('adminka')}}">Профиль админки</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактировать товар
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Поиск товара</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Поиск товара:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="admin-block-1fr">
                            <form class="form-sample-product" data-form="search" method="POST" action="{{ route('searchProduct') }}" enctype="multipart/form-data">
                                @csrf
                                <article class="name-admin-block">
                                    Найдите товар для редактирования
                                </article>
                                <div class="wrap-input Error" data-answer="Вы не ввели название Товара или его Артикль">
                                    <label class="form-label">
                                        Поиск в базе: по названию или артиклю.
                                    </label>
                                    <input class="admin-select input-sample-product" type="text" id="search-product" name="search" value=""/>
                                </div>
                                <div class="wrap-button" data-search="Ищем товар">
                                    <button class="button-auth accept" type="submit" name="submit-auth">Найти</button>
                                </div>
                            </form>

                            <form class="form-sample-product" data-form="sample" method="POST" action="{{ route('sampleProducts') }}" enctype="multipart/form-data">
                                @csrf
                                <article class="name-admin-block">
                                    Или сделайте выборку
                                </article>
                                <li class="wrap-input categoryError" data-answer="Вы не выбрали Категорию товара">
                                    <label class="form-label">
                                        Категория товара
                                    </label>

                                    <select class="admin-select input-sample-product" name="category" id="class">
                                        <option class="class" value="">--Выберите категорию товара--</option>
                                        @foreach($categories as $category)
                                            <option class="class" data-link="{{ route('sampleSubCategories', $category->id) }}" value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="wrap-input sub_categoryError" data-answer="Вы не выбрали Подкатегорию товара">
                                    <label class="form-label">
                                        Подкатегория товара
                                    </label>
                                    <select class="admin-select input-sample-product type-category visible-type-modul" name="sub_category" id="sub-class" disabled>
                                        <option class="sub-class" value="">Сначала выберите Категорию товара</option>
                                    </select>
                                </li>
                                <div class="wrap-button" data-search="Делаем выборку товара">
                                    <button class="button-auth accept" type="submit" name="submit-auth">Сделать выборку</button>
                                </div>
                            </form>
                        </div>

                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Результат поиска или выборки:
                            </article>

                            <div class="db-non-list">
                                Сделайте выборку товаров или найдите товар через поиск.
                            </div>

                            <ul class="relevant-info-list">

                            </ul>

                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
