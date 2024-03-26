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
                    Категория товара
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Управление Категориями</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Категории:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="create-category" method="POST" action="{{ route('createCategory') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Категория успешно создана">
                                Создание Категории
                            </article>
                            <div class="wrap-input categoryError" data-answer="Вы не ввели название новой Категории">
                                <label class="form-label">
                                    Название новой Категории
                                </label>
                                <input class="admin-select admin-input" type="text" id="new_category" name="category" value="{{ old('category') }}" />
                            </div>
                            <div class="wrap-input imageError" data-answer="Вы не добавили фото">
                                <label class="form-label">
                                    Выберите фото Категории
                                </label>
                                <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button" data-search="Создаем Категорию">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Категорий в базе:
                            </article>
                            @if($categories->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной категории.
                                </div>
                            @else
                                <ul class="relevant-info-list ">
                                    @foreach($categories as $category)
                                        <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Категорию">
                                            <article class="collect-article" data-id="{{$category->id}}">{{$category->category}}</article>
                                            <a class="mdr-button accept modul-button-delete" href="{{route('editCategory', $category->slug_category)}}">
                                                Редактировать
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
