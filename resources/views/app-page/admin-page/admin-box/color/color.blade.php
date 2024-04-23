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
                    Цвет мебели
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Цвет мебели</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о цвете:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="color" method="POST" action="{{ route('createColor') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Цвет успешно создан">
                                Создание Цвета
                            </article>
                            <div class="wrap-input colorError" data-answer="Вы не ввели название нового Цвета">
                                <label class="form-label">
                                    Название нового Цвета
                                </label>
                                <input class="admin-select admin-input" type="text" id="new_color" name="color" value="{{ old('color') }}" />
                            </div>
                            <div class="wrap-input imageError" data-answer="Вы не добавили фото">
                                <label class="form-label">
                                    Выберите фото Цвета
                                </label>
                                <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button" data-search="Создаем Цвет">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Цветов в базе:
                            </article>
                            @if($colors->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной Цвета.
                                </div>
                            @else
                                <ul class="relevant-info-list ">
                                    @foreach($colors as $color)
                                        <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Цвет">
                                            <article class="collect-article" data-id="{{$color->id}}">{{$color->color}}</article>
                                            <a class="mdr-button accept modul-button-delete" href="{{route('editColor', $color->slug_color)}}">
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
