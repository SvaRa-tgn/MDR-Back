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
                    Создать Готовую коллекцию
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Готовые коллекции</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о Готовой коллекции:</h3>
                </div>
                <div class="wrap-create-product-data">

                    <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Создание новой Готовой коллекции:
                        </div>
                        <form class="create-product-data form-create-category" data-form="modul_collection" method="POST"
                              action="{{ route('createReadyCollection.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="wrap-input ready_collectionError" data-answer="">
                                <label class="create-product-label">
                                    Название готовой категории
                                </label>
                                <input class="create-product-input input-category" type="text" id="new_ready_collection"
                                       name="ready_collection" value="{{ old('name') }}"/>
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <div class="create-product-data js-reload-block">
                        <div class="db-product-label">
                            Список Готовых коллекций в базе:
                        </div>

                        @if($readyCollections->isEmpty())
                            <div class="db-non-list">
                                Вы пока не создали ни одной готовой коллекции.
                            </div>
                        @else
                            <ul class="create-product-list">
                                @foreach($readyCollections as $readyCollection)
                                    <li class="create-product-item modul-category-data" data-action="Категорию">
                                        <article class="collect-article" data-id="{{$readyCollection->id}}">{{$readyCollection->ready_collection}}</article>
                                        <a class="mdr-button accept modul-button-delete"
                                           href="{{route('editReadyCollection.edit', $name = $readyCollection->slug_ready_collection)}}">
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
