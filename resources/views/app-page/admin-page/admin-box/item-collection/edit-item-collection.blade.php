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
                    <a class="breadcrumbs-link" href="{{route('itemCollection')}}">Коллекции</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактирование Коллекции - {{$item_collection->collection}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Редактировать Коллекцию</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Коллекции:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="wrap-edit-data">
                            <form class="update-form-data" data-form="modul_collection_update" method="POST" action="{{ route('updateCollection', $item_collection->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Коллекция отредактирована">
                                    Редактирование Коллекции:
                                </article>

                                <div class="wrap-input type_collectionError" data-answer="Вы не выбрали Тип Коллекции">
                                    <label class="form-label">
                                        Новый Тип Коллекции
                                    </label>

                                    <select class="admin-select admin-input type" name="type_collection" id="type">
                                        <option class="type-disable" value="{{$item_collection->type_collection}}">{{$item_collection->type_collection}} - Текущий Тип</option>
                                        @if($item_collection->type_collection === 'Готовая коллекция')
                                        <option class="type" value="Модульная коллекция">Модульная коллекция</option>
                                        @else
                                        <option class="type" value="Готовая коллекция">Готовая коллекция</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="wrap-input modul_collectionError" data-answer="Вы не внесли изменения">
                                    <label class="form-label">
                                        Новое название Коллекции
                                    </label>
                                    <input class="admin-select admin-input" type="text" id="collection" name="collection" value="{{ old('collection') }}" />
                                </div>

                                <div class="wrap-button" data-search="Редактируем Коллекцию">
                                    <button class="button-auth accept js-up-data" data-id="{{$item_collection->id}}" type="submit" name="submit-auth">Сохранить</button>
                                </div>
                            </form>
                            <form class="itemDelete">
                                <input type="submit" class="button-auth stop" value="Удалить Коллекцию">
                            </form>
                        </div>


                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные:
                            </article>
                            <div class="db-admin-article db-admin-list">
                                Тип Коллекции:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article" >{{$item_collection->type_collection}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Название Коллекции:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article js-data-name" data-tag="Коллекцию">{{$item_collection->collection}}</article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
