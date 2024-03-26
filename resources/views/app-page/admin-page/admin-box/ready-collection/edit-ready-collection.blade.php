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
                    <a class="breadcrumbs-link" href="{{route('readyCollection')}}">Готовые коллекции</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактирование Готовой коллекции - {{$ready_collection['name']}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Редактировать Готовую коллекцию</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные Готовой коллекции:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="wrap-edit-data">
                            <form class="update-form-data" data-form="ready_collection_update" method="POST" action="{{ route('updateReadyCollection', $ready_collection->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Готовая коллекция отредактирована">
                                    Редактирование Готовой коллекции:
                                </article>

                                <div class="wrap-input ready_collectionError" data-answer="Вы не ввели новое название Готовой коллекции">
                                    <label class="form-label">
                                        Новое название Готовой коллекции
                                    </label>
                                    <input class="admin-select admin-input" type="text" id="ready_collection" name="ready_collection" value="{{ old('ready_collection') }}" />
                                </div>

                                <div class="wrap-button" data-search="Редактируем Готовую коллекцию">
                                    <button class="button-auth accept js-up-data" data-id="{{$ready_collection->id}}" type="submit" name="submit-auth">Сохранить</button>
                                </div>
                            </form>
                            <form class="itemDelete">
                                <input type="submit" class="button-auth stop" value="Удалить Готовую коллекцию">
                            </form>
                        </div>


                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные:
                            </article>
                            <div class="db-admin-article db-admin-list">
                                Название Готовой коллекции:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article js-data-name" data-tag="Готовую коллекцию">{{$ready_collection->ready_collection}}</article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
