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
                <h1 class="private-page-h1">Модульные коллекции</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Модульной коллекции:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="modul_collection" method="POST" action="{{ route('createModulCollection') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Модульная коллекция успешно создана">
                                Создание Модульной коллекции
                            </article>

                            <div class="wrap-input modul_collectionError" data-answer="Вы не ввели название новой Модульной коллекции">
                                <label class="form-label">
                                    Название новой Модульной коллекции
                                </label>
                                <input class="admin-select admin-input" type="text" id="modul_collection" name="modul_collection" value="{{ old('modul_collection') }}" />
                            </div>

                            <div class="wrap-button" data-search="Создаем Модульную коллекцию">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Модульных коллекций в базе:
                            </article>
                            @if($modulCollections->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной Модульной коллекции.
                                </div>
                            @else
                                <ul class="relevant-info-list">
                                    @foreach($modulCollections as $modulCollection)
                                        <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Модульную коллекцию">
                                            <article class="collect-article" data-id="{{$modulCollection->id}}">{{$modulCollection->modul_collection}}</article>
                                            <a class="mdr-button accept modul-button-delete" href="{{route('editModulCollection', $name = $modulCollection->slug_modul_collection)}}">
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
