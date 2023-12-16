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
                    <a class="breadcrumbs-link" href="{{route('category.show')}}">Категория товара</a>
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
                <h1 class="page-h1">Создать подкатегорию</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные о подкатегории:</h3>
                </div>
                <div class="wrap-create-product-data">

                     <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Создание подкатегории:
                        </div>

                        <form class="create-product-data form-create-category" data-form="sub-category" method="POST" action="{{ route('createSubCategory.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="wrap-input js-select">
                                <label class="create-product-label">
                                    Категория товара
                                </label>
                                <select class="create-product-select input-category" name="category" id="class">
                                    <option class="class" value="" >--Выберите категорию товара--</option>
                                    @foreach($categories as $category)
                                        <option class="class" data-categoryId = "{{$category->id}}" value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="wrap-input Error" data-answer="">
                                <label class="create-product-label">
                                    Название новой подкатегории
                                </label>
                                <input class="create-product-input input-category" type="text" id="sub_category" name="sub_category" value="{{ old('sub_category') }}" />
                            </div>
                            <div class="wrap-input categoryError" data-answer="">
                                <label class="create-product-label">
                                    Выберите фото
                                </label>
                                <input class="create-product-input-foto input-category" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <div class="create-product-data js-reload-block">
                        <div class="db-product-label">
                            Список Подкатегорий в базе:
                        </div>

                        @if($subCategories->isEmpty())
                            <div class="db-non-list">
                                Вы пока не создали ни одной подкатегории.
                            </div>
                        @else
                            @foreach($categories as $category)
                                <div class="db-product-list">
                                    {{$category->name}}
                                </div>
                                <ul class="create-product-list">
                                    @foreach($subCategories as $subCategory)
                                        @if($category->id === $subCategory->category_id)
                                            <li class="create-product-item modul-category-data" data-action="Категорию">
                                                <article class="collect-article" data-id="{{$subCategory->id}}">{{$subCategory->sub_category}}</article>

                                                <a class="mdr-button accept modul-button-delete" href="{{route('editSubCategory.edit', [$subCategory->id, $name = Transliterate::slugify($subCategory->sub_category)])}}">
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
            </div>
        </section>
    </section>
@endsection
