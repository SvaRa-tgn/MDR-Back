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
                    Создать Готовую коллекцию
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Готовые коллекции</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Готовой коллекции:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="ready_collection" method="POST" action="{{ route('createReadyCollection') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Готовая коллекция успешно создана">
                                Создание Готовой коллекции
                            </article>

                            <div class="wrap-input ready_collectionError" data-answer="Вы не ввели название новой Готовой коллекции">
                                <label class="form-label">
                                    Название новой Готовой коллекции
                                </label>
                                <input class="admin-select admin-input" type="text" id="ready_collection" name="ready_collection" value="{{ old('ready_collection') }}" />
                            </div>

                            <div class="wrap-button" data-search="Создаем Готовую коллекцию">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Готовых коллекций в базе:
                            </article>
                            @if($readyCollections->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной Готовой коллекции.
                                </div>
                            @else
                                <ul class="relevant-info-list">
                                    @foreach($readyCollections as $readyCollection)
                                        <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Готовую коллекцию">
                                            <article class="collect-article" data-id="{{$readyCollection->id}}">{{$readyCollection->ready_collection}}</article>
                                            <a class="mdr-button accept modul-button-delete" href="{{route('editReadyCollection', $name = $readyCollection->slug_ready_collection)}}">
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
