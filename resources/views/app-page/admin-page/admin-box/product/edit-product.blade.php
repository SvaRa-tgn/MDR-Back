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
                    <a class="breadcrumbs-link" href="{{route('admin.index')}}">Профиль админки</a>
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
                <h1 class="page-h1">Редактировать товар</h1>
            </div>

            <div class="wrap-head-page-h3">
                <h3 class="page-h3 color-admin">Выбор товара</h3>
            </div>

            <div class="wrap-create-product-data">
                <form class="create-product-data">
                    <ul class="wrap-create-collection-list">
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Поиск товара
                            </label>
                            <div class="wrap-create-product-item">
                                <input class="create-product-input" type="search" id="edit_product" name="edit_product" required />
                            </div>
                        </li>
                        <li class="wrap-create-product-item">
                            <button class="mdr-button accept modul-button">
                                Поиск
                            </button>
                        </li>
                    </ul>
                </form>

                <div class="create-product-data">
                    <ul class="wrap-create-collection-list">
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Модульные товары в базе:
                            </label>
                            <ul class="create-product-list">
                                <li class="create-product-item modul-collection-data">
                                    <article class="collect-article">Товар</article>
                                    <a class="mdr-button accept modul-button-delete" href="/html/admin/edit-product.html">
                                        Редактировать
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <form class="create-product-data">
                    <div class="edit-head">
                        Или создать выборку товара
                    </div>
                    <ul class="wrap-create-collection-list">
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Категория товара
                            </label>
                            <div class="wrap-create-product-item">
                                <select class="create-product-select" name="class" id="class" required>
                                    <option class="class" value="" >--Выберите категорию товара--</option>
                                    <option class="class" value="Гостиные">Гостиные</option>
                                    <option class="class" value="Кухни">Кухни</option>
                                    <option class="class" value="Детские">Детские</option>
                                    <option class="class" value="Домашний офис">Домашний офис</option>
                                    <option class="class" value="Прихожие">Прихожие</option>
                                    <option class="class" value="Спальни">Спальни</option>
                                    <option class="class" value="Шкафы">Шкафы</option>
                                    <option class="class" value="Мягкая мебель">Мягкая мебель</option>
                                </select>
                            </div>
                        </li>

                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Подкатегория товара
                            </label>
                            <ul class="create-product-list">
                                <li class="create-product-item">
                                    <select class="create-product-select" name="sub-class" id="sub-class" required>
                                        <option class="sub-class" value="">--Выберите подкатегорию товара--</option>
                                        <option class="sub-class" value="Модульные гостиные">Модульные гостиные</option>
                                        <option class="sub-class" value="Стенки">Стенки</option>
                                        <option class="sub-class" value="Комоды">Комоды</option>
                                        <option class="sub-class" value="Журнальные столы">Журнальные столы</option>
                                        <option class="sub-class" value="Полки и антресоли">Полки и антресоли</option>
                                    </select>
                                </li>
                            </ul>
                        </li>
                        <li class="wrap-create-product-item">
                            <button class="mdr-button accept modul-button">
                                Выборка товаров
                            </button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
@endsection
