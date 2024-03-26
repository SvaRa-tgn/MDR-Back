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
                    Подкатегория товара
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Создать подкатегорию</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о Подкатегории:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="create-form-data" data-form="sub-category" method="POST" action="{{ route('createSubCategory') }}" enctype="multipart/form-data">
                            @csrf
                            <article class="name-admin-block" data-success="Подкатегория успешно создана">
                                Создание Подкатегории
                            </article>
                            <div class="wrap-input js-select" data-answer="Вы не выбрали Категорию">
                                <label class="form-label">
                                    Категория товара
                                </label>
                                <select class="admin-select admin-input" name="category" id="class">
                                    <option class="class" value="" >--Выберите категорию товара--</option>
                                    @foreach($categories as $category)
                                        <option class="class" data-categoryId="{{$category->id}}" value="{{$category->category}}">{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="wrap-input sub_categoryError" data-answer="Вы не ввели название новой Подкатегории">
                                <label class="form-label">
                                    Название новой Подкатегории
                                </label>
                                <input class="admin-select admin-input" type="text" id="sub_category" name="sub_category" value="{{ old('sub_category') }}" />
                            </div>

                            <div class="wrap-input js-select" data-answer="Вы не выбрали Тип товара">
                                <label class="form-label">
                                    Тип товара представленный в Подкатегории
                                </label>
                                <select class="admin-select admin-input" name="type_item" id="type_item">
                                    <option class="class" value="" >--Выберите тип товара--</option>
                                    <option class="class" value="Модульные комплекты" >Модульные комплекты</option>
                                    <option class="class" value="Товары" >Товары</option>
                                </select>
                            </div>

                            <div class="wrap-input imageError" data-answer="Вы не добавили фото">
                                <label class="form-label">
                                    Выберите фото Подкатегории
                                </label>
                                <input class="admin-select admin-foto admin-input" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button" data-search="Создаем Подкатегорию">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Список Подкатегорий в базе:
                            </article>
                            @if($subCategories->isEmpty())
                                <div class="db-non-list">
                                    Вы пока не создали ни одной Подкатегории.
                                </div>
                            @else
                                @foreach($categories as $category)
                                    @foreach($subCategories as $subCategory)
                                        @if($category->id === $subCategory->category_id)
                                            <div class="db-admin-article db-admin-list">
                                                {{$category->category}}
                                            </div>
                                            @break
                                        @endif
                                    @endforeach
                                    <ul class="relevant-info-list ">
                                        @foreach($subCategories as $subCategory)
                                            @if($category->id === $subCategory->category_id)
                                                <li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Категорию">
                                                    <article class="collect-article" data-id="{{$subCategory->id}}">{{$subCategory->sub_category}}</article>
                                                    <a class="mdr-button accept modul-button-delete" href="{{route('editSubCategory', [$subCategory->slug_sub_category])}}">
                                                        Редактировать
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
