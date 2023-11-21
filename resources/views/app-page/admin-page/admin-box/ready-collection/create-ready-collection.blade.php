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
                    Создать товар
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Создать готовую коллекцию</h1>
            </div>

            <div class="wrap-head-page-h3">
                <h3 class="page-h3 color-admin">Данные о коллекциях:</h3>
            </div>

            <div class="wrap-create-product-data">
                <form class="create-product-data">
                    <ul class="wrap-create-collection-list">
                        <li class="wrap-create-product-item">
                            <label class="create-product-label">
                                Название новой коллекции
                            </label>
                            <div class="wrap-create-product-item">
                                <input class="create-product-input" type="text" id="new_modul_collection" name="new_modul_collection" required />
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
                                Готовые коллекции в базе:
                            </label>
                            <ul class="create-product-list">
                                <li class="create-product-item modul-collection-data">
                                    <article class="collect-article">Готовой коллекция</article>
                                    <button class="mdr-button stop modul-button-delete">
                                        Удалить
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
@endsection
