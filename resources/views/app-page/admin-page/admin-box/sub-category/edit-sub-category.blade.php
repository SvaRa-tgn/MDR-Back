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
                    Подкатегория товара
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Редактировать Подкатегорию</h1>
            </div>

            <div class="main-private-data-item">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Информация о подкатегории:</h3>
                </div>

                <div class="wrap-create-product-data">
                    <div class="wrap-edit-data">
                        <div class="db-product-label">
                            Редактирование подкатегории:
                        </div>
                        <form class="form-create-category" data-form="category-update" method="POST" action="{{ route('updateSubCategory.update', $subCategory['id'] )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="wrap-input js-select">
                                <label class="create-product-label">
                                    Новая категория товара
                                </label>
                                <select class="create-product-select input-category" name="category" id="class">
                                    <option class="class" value="{{$subCategory['category']}}" >{{$subCategory['category']}} - Текущая категория</option>
                                    @foreach($categories as $category)
                                        <option class="class" data-categoryId = "{{$category->id}}" value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="wrap-input Error">
                                <label class="create-product-label" for="input-category">
                                    Новое название подкатегории:
                                </label>
                                <input class="create-product-input input-category" type="text" id="sub_category" name="sub_category" value="{{ old('sub_category') }}" />
                            </div>
                            <div class="wrap-input Error">
                                <label class="create-product-label">
                                    Новая фотография подкатегории:
                                </label>
                                <input class="create-product-input-foto input-category" type="file" id="foto" name="image" accept="image/*" />
                            </div>
                            <div class="wrap-button">
                                <button class="button-auth accept js-up-category" data-id="{{$subCategory['id']}}" type="submit" name="submit-auth">Сохранить</button>
                            </div>
                        </form>
                        <form class="itemDelete">
                            <input type="submit" class="button-auth stop" value="Удалить категорию">
                        </form>

                    </div>

                    <div class="create-product-data">
                        <div class="db-product-label">
                            Актуальные данные:
                        </div>
                        <ul class="create-product-list">
                            <li class="create-product-item modul-admin-data">
                                <article class="collect-article" >Название подкатегории:</article>
                                <article class="collect-article js-category-name" data-tag="Подкатегорию">{{$subCategory['name']}}</article>
                                <article class="collect-article" >Относится к категории:</article>
                                <article class="collect-article" data-tag="Категорию">{{$subCategory['category']}}</article>
                                <div class="wrap-img-category">
                                    <img class="main-block-item-img" src="{{asset($subCategory['image'])}}" alt="Мебель в Рязани. {{$subCategory['name']}}" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
