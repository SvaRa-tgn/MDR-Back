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
                    Модульные коллекции
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Коллекции</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Коллекции:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="collection" method="POST" action="{{ route('createCollection') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Коллекция успешно создана">
                                Создание Коллекции
                            </article>

                            <div class="wrap-input type_collectionError" data-answer="Вы не выбрали Тип Коллекции">
                                <label class="form-label">
                                    Тип Коллекции
                                </label>

                                <select class="admin-select admin-input type" name="type_collection" id="type">
                                    <option class="type-disable" value="">--Выберите тип коллекции--</option>
                                    <option class="type" value="Модульная коллекция">Модульная коллекция</option>
                                    <option class="type" value="Готовая коллекция">Готовая коллекция</option>
                                </select>
                            </div>

                            <div class="wrap-input collectionError" data-answer="Вы не ввели название новой Коллекции">
                                <label class="form-label">
                                    Название новой Коллекции
                                </label>
                                <input class="admin-select admin-input" type="text" id="collection" name="collection" value="{{ old('collection') }}" />
                            </div>

                            <div class="wrap-button" data-search="Создаем новую Коллекцию">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Коллекций в базе:
                            </article>
                            @if($itemCollections->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной Коллекции.
                                </div>
                            @else
                                <ul class="relevant-info-list">
                                    @if($itemCollections->contains('slug_type_collection', 'modul_collection'))
                                        <div class="db-admin-article db-admin-list">
                                            Модульная коллекция
                                        </div>
                                    @foreach($itemCollections as $itemCollection)
                                        @if($itemCollection->slug_type_collection === 'modul_collection')
                                        <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Модульную коллекцию">
                                            <article class="collect-article" data-id="{{$itemCollection->id}}">{{$itemCollection->collection}}</article>
                                            <a class="mdr-button accept modul-button-delete" href="{{route('editCollection', $itemCollection->slug_collection)}}">
                                                Редактировать
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                    @endif
                                </ul>

                                <ul class="relevant-info-list">
                                    @if($itemCollections->contains('slug_type_collection', 'ready_collection'))
                                        <div class="db-admin-article db-admin-list">
                                            Готовая коллекция
                                        </div>
                                    @foreach($itemCollections as $itemCollection)
                                        @if($itemCollection->slug_type_collection === 'ready_collection')
                                            <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Модульную коллекцию">
                                                <article class="collect-article" data-id="{{$itemCollection->id}}">{{$itemCollection->collection}}</article>
                                                <a class="mdr-button accept modul-button-delete" href="{{route('editCollection', $itemCollection->slug_collection)}}">
                                                    Редактировать
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
