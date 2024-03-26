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
                    Загрузка Excel файла
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Загрузить excel файл</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные загрузки:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="category" method="POST" action="{{ route('excelUpload') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Данные загружены в базу данных">
                                Загрузка файла:
                            </article>
                            <div class="wrap-input imageError" data-answer="Вы не выбрали файл">
                                <label class="form-label">
                                    Выберите Excel файл
                                </label>
                                <input class="admin-select admin-foto admin-input" type="file" id="excel" name="excel" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
                            </div>
                            <div class="wrap-button" data-search="Обрабатываем Excel файл">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info">
                            <article class="db-admin-article warning">
                                Предупреждение:
                            </article>
                            <article class="warning-article">
                                Перед загрузкой Excel файла убедитесь что в Базе Данных сайта есть все Категории, Подкатегории и Цвета добавляемых товаров, иначе товары не добавятся.
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
