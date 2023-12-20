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
                    Готовая коллекция
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Редактировать готовую коллекцию</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Информация о готовой коллекции:</h3>
                </div>

                <div class="wrap-create-product-data">
                    <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Редактирование Готовую коллекцию:
                        </div>
                        <form class="form-update-category" data-form="category-update" method="POST" action="{{ route('updateReadyCollection.update', $ready_collection['id'] )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="wrap-input categoryError">
                                <label class="create-product-label" for="input-category">
                                    Новое название Готовой коллекции:
                                </label>
                                <input class="create-product-input input-category" type="text" id="update_ready_collection" name="ready_collection" value="{{ old('name') }}" />
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept js-up-category" data-id="{{$ready_collection['id']}}" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                        <form class="itemDelete">
                            <input type="submit" class="button-auth stop" value="Удалить готовую коллекцию">
                        </form>

                    </div>

                    <div class="create-product-data">
                        <div class="db-product-label">
                            Актуальные данные:
                        </div>
                        <ul class="create-product-list">
                            <li class="create-product-item modul-admin-data js-reload-block">
                                <article class="collect-article" >Название Готовой коллекции:</article>
                                <article class="collect-article js-category-name" data-tag="Готовую коллекцию">{{$ready_collection['name']}}</article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
