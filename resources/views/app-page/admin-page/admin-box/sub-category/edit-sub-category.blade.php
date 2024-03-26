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
                    <a class="breadcrumbs-link" href="{{route('category')}}">Категория товара</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('subCategory')}}">Подкатегория товара</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактирование подкатегории - {{$subCategory['sub_category']}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Редактировать Подкатегорию</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о Подкатегории:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <div class="wrap-edit-data">
                            <form class="update-form-data" data-form="sub-category-update" method="POST" action="{{ route('updateSubCategory', $subCategory->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Подкатегория отредактирована">
                                    Редактирование Подкатегории
                                </article>

                                <div class="wrap-input js-select">
                                    <label class="form-label">
                                        Категория товара
                                    </label>
                                    <select class="admin-select admin-input" name="category" id="catSub">
                                        <option class="class js-old-id" value="{{$subCategory->category}}" >{{$subCategory->category}} - Текущая категория</option>
                                        @foreach($categories as $category)
                                            <option class="class js-new-id"  value="{{$category->category}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="wrap-input sub_categoryError" data-answer="">
                                    <label class="form-label">
                                        Новое название Подкатегории
                                    </label>
                                    <input class="admin-select admin-input" type="text" id="sub_category" name="sub_category" value="{{ old('sub_category') }}" />
                                </div>

                                <div class="wrap-input js-select">
                                    <label class="form-label">
                                        Тип товара в Подкатегории
                                    </label>
                                    <select class="admin-select admin-input" name="type_item" id="catType_item">
                                        <option class="class js-old-id" value="{{$subCategory->type_item}}" >{{$subCategory->type_item}} - Текущий Тип товара</option>
                                        @if($subCategory->type_item === 'Товары')
                                        <option class="class" value="Модульные комплекты" >Модульные комплекты</option>
                                        @else
                                        <option class="class" value="Товары" >Товары</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="wrap-input imageError" data-answer="Вы не внесли изменения">
                                    <label class="form-label">
                                        Выберите новое фото Подкатегории
                                    </label>
                                    <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                                </div>

                                <div class="wrap-button" data-search="Редактируем Подкатегорию">
                                    <button class="button-auth accept js-up-data" data-id="{{$subCategory->id}}" type="submit" name="submit-auth">Сохранить</button>
                                </div>

                            </form>
                            <form class="itemDelete">
                                <input type="submit" class="button-auth stop" value="Удалить Подкатегорию">
                            </form>
                        </div>

                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные Подкатегории:
                            </article>
                            <div class="db-admin-article db-admin-list">
                                Категория:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article" data-tag="Категорию">{{$subCategory->category}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Название Подкатегории:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article js-data-name" data-tag="Подкатегорию">{{$subCategory->sub_category}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Тип товара в Подкатегории:
                            </div>
                            <ul class="relevant-info-list">
                                <li class="db-relevant-info-item form-label admin-block-db">
                                    <article class="collect-article" data-tag="Подкатегорию">{{$subCategory->type_item}}</article>
                                </li>
                            </ul>
                            <div class="db-admin-article db-admin-list">
                                Фотография подкатегории:
                            </div>
                            <div class="wrap-img-category">
                                <img class="main-block-item-img" src="{{asset($subCategory->link)}}" alt="Мебель в Рязани. {{$subCategory->sub_category}}" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
