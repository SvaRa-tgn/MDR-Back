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
                    <a class="breadcrumbs-link" href="{{route('category.show')}}">Категория товара</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Подкатегория товара
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Создать подкатегорию</h1>
            </div>

            <div class="wrap-head-page-h3">
                <h3 class="page-h3 color-admin">Данные о подкатегории:</h3>
            </div>

            <div class="wrap-create-product-data">
                <form class="create-product-data">
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
                                Название новой подкатегории
                            </label>
                            <div class="wrap-create-product-item">
                                <input class="create-product-input" type="text" id="new_category" name="new_category" required />
                            </div>
                        </li>
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Выберите фото
                            </label>
                            <div class="wrap-create-product-item">
                                <input class="create-product-input-foto" type="file" id="foto" name="foto" accept="image/png, image/jpeg" required/>
                            </div>
                        </li>
                        <li class="wrap-create-product-item">
                            <button class="mdr-button accept modul-button">
                                Сохранить
                            </button>
                        </li>
                    </ul>
                </form>

                <div class="create-product-data">
                    <ul class="wrap-create-collection-list">
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Подкатегории в базе:
                            </label>
                            <ul class="create-product-list">
                                <li class="create-product-item modul-category-data">
                                    <article class="collect-article">Модульная коллекция</article>
                                    <button class="mdr-button stop modul-button-delete">
                                        Удалить
                                    </button>
                                    <a class="mdr-button accept modul-button-delete" href="/html/admin/edit-sub-category.html">
                                        Редактировать
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
    </section>
@endsection