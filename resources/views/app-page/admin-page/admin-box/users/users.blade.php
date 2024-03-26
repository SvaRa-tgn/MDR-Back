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
                    Поиск пользователя
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Поиск пользователя</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Поиск пользователя:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="admin-block-1fr">
                            <form class="form-sample-product" data-form="search_user" method="POST" action="{{ route('searchUser') }}" enctype="multipart/form-data">
                                @csrf
                                <article class="name-admin-block">
                                    Найдите пользователя
                                </article>
                                <div class="wrap-input Error" data-answer="Вы не ввели ФИО или Email пользователя">
                                    <label class="form-label">
                                        Поиск в базе: по Email пользователя.
                                    </label>
                                    <input class="admin-select input-sample-product" type="text" id="search_user" name="search_user" value="{{ old('search_user') }}"/>
                                </div>
                                <div class="wrap-button" data-search="Ищем пользователя">
                                    <button class="button-auth accept" type="submit" name="submit-auth">Найти</button>
                                </div>
                            </form>
                        </div>

                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Результат поиска:
                            </article>

                            <div class="db-non-list">
                                Сделайте поиск пользователя.
                            </div>

                            <ul class="relevant-info-list">

                            </ul>

                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
