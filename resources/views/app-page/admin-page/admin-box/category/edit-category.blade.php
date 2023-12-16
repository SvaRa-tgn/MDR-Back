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
                    Категория товара
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Редактировать категорию</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Информация о категории:</h3>
                </div>

                <div class="wrap-create-product-data">
                    <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Редактирование категории:
                        </div>
                        <form class="form-update-category" data-form="category-update" method="POST" action="{{ route('updateCategory.update', $category['id'] )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="wrap-input Error">
                                <label class="create-product-label" for="input-category">
                                    Новое название категории:
                                </label>
                                <input class="create-product-input input-category" type="text" id="new_category" name="category" value="{{ old('name') }}" />
                            </div>
                            <div class="wrap-input Error">
                                <label class="create-product-label">
                                    Новая фотография категории:
                                </label>
                                <input class="create-product-input-foto input-category" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept js-up-category" data-id="{{$category['id']}}" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                        <form class="itemDelete">
                            <input type="submit" class="button-auth stop" value="Удалить категорию">
                        </form>

                    </div>

                    <div class="create-product-data">
                        <div class="db-product-label">
                            Актуальные данные:
                        </div>
                        <ul class="create-product-list">
                            <li class="create-product-item modul-admin-data js-reload-block">
                                <article class="collect-article" >Название категории:</article>
                                <article class="collect-article js-category-name" data-tag="Категорию">{{$category['name']}}</article>
                                <div class="wrap-img-category">
                                    <img class="main-block-item-img" src="{{asset($category['image'])}}" alt="Мебель в Рязани. {{$category['name']}}" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
