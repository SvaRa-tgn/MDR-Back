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
                <h1 class="page-h1">Редактировать Цвет</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Информация о Цвете:</h3>
                </div>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="wrap-edit-data">
                            <form class="form-update-data" data-form="color-update" method="POST" action="{{ route('updateColor.update', $color['id'] )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block">
                                    Редактирование Цвет
                                </article>
                                <div class="wrap-input colorError" data-answer="">
                                    <label class="form-label">
                                        Новое название Категории:
                                    </label>
                                    <input class="admin-select admin-input" type="text" id="new_color" name="color" value="{{ old('color') }}" />
                                </div>
                                <div class="wrap-input" data-answer="Вы не внесли изменения">
                                    <label class="form-label">
                                        Выберите новое фото Категории:
                                    </label>
                                    <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                                </div>
                                <div class="wrap-button">
                                    <button class="button-auth accept js-up-data" data-id="{{$color['id']}}" type="submit" name="submit-auth">Сохранить</button>
                                </div>
                            </form>
                            <form class="itemDelete">
                                <input type="submit" class="button-auth stop" value="Удалить Цвет">
                            </form>
                        </div>


                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные:
                            </article>
                            <div class="db-admin-article db-admin-list">
                                Название Цвета:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article js-data-name" data-tag="Цвет">{{$color['name']}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Фотография Цвета:
                            </div>
                            <div class="wrap-img-category">
                                <img class="main-block-item-img" src="{{asset($color['image'])}}" alt="Мебель в Рязани. {{$color['name']}}" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
