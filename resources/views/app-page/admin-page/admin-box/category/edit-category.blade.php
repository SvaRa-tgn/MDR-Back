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
                    <a class="breadcrumbs-link" href="{{route('category')}}">Категории</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактирование категории - {{$category->category}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Редактировать категорию</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Информация о категории:</h3>
                </div>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="wrap-edit-data">
                            <form class="update-form-data" data-form="category-update" method="POST" action="{{ route('updateCategory', $category->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Категория отредактирована">
                                    Редактирование Категории
                                </article>
                                <div class="wrap-input categoryError" data-answer="">
                                    <label class="form-label">
                                        Новое название Категории:
                                    </label>
                                    <input class="admin-select admin-input" type="text" id="new_category" name="category" value="{{ old('category') }}" />
                                </div>
                                <div class="wrap-input" data-answer="Вы не внесли изменения">
                                    <label class="form-label">
                                        Выберите новое фото Категории:
                                    </label>
                                    <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                                </div>
                                <div class="wrap-button" data-search="Редактируем Категорию">
                                    <button class="button-auth accept js-up-data" data-id="{{$category->id}}" type="submit" name="submit-auth">Сохранить</button>
                                </div>
                            </form>
                            <form class="itemDelete">
                                <input type="submit" class="button-auth stop" value="Удалить категорию">
                            </form>
                        </div>


                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные:
                            </article>
                            <div class="db-admin-article db-admin-list">
                                Название Категории:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article js-data-name" data-tag="Категорию">{{$category->category}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Фотография Категории:
                            </div>
                            <div class="wrap-img-category">
                                <img class="main-block-item-img" src="{{asset($category->link)}}" alt="Мебель в Рязани. {{$category->category}}" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
