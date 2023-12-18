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
                    Цвет мебели
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Цвет мебели</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о цвете:</h3>
                </div>
                <div class="wrap-create-product-data">

                    <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Создание нового цвета:
                        </div>
                        <form class="create-product-data form-create-category" data-form="category" method="POST"
                              action="{{ route('createColor.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="wrap-input colorError" data-answer="">
                                <label class="create-product-label">
                                    Название нового цвета
                                </label>
                                <input class="create-product-input input-category" type="text" id="new_color"
                                       name="color" value="{{ old('name') }}"/>
                            </div>
                            <div class="wrap-input " data-answer="">
                                <label class="create-product-label">
                                    Выберите фото
                                </label>
                                <input class="create-product-input-foto input-category" type="file" id="color"
                                       name="image" accept="image/*"/>
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <div class="create-product-data js-reload-block">
                        <div class="db-product-label">
                            Список Цветов в базе:
                        </div>

                        @if($colors->isEmpty())
                            <div class="db-non-list">
                                Вы пока не создали ни одной категории.
                            </div>
                        @else
                            <ul class="create-product-list">
                                @foreach($colors as $color)
                                    <li class="create-product-item modul-category-data" data-action="Категорию">
                                        <article class="collect-article" data-id="{{$color->id}}">{{$color->color}}</article>
                                        <a class="mdr-button accept modul-button-delete"
                                           href="{{route('editColor.edit', $name = $color->slug_color)}}">
                                            Редактировать
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
