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
                    <a class="breadcrumbs-link" href="{{route('chooseProducts')}}">Выбор товара</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Создать Модульный комплект
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Создать Модульный комплект</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Создание Модульного комплекта:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-1fr">

                        <form class="create-form-data" data-form="create-modul-product" action="{{ route('addCompilation') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="edit-foto">
                                <article class="name-admin-block" data-success="Модульный комплект успешно создан">
                                    Добавление фотографий Комплекта
                                </article>
                                <ul class="edit-foto-list">
                                    <li class="wrap-edit-image" data-answer="Вы не выбрали фотографию">
                                        <div class="edit-image">
                                            <img class="main-block-item-img" src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input" >
                                                <label class="form-label">
                                                    Добавить Заглавную фотографию
                                                </label>

                                                <input class="update-input-foto js-image-input" type="file" id="foto" name="image_top" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <article class="info-image image-top">
                                            Обязательно!
                                        </article>
                                    </li>

                                    <li class="wrap-edit-image">
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img" src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input">
                                                <label class="form-label">
                                                    Добавить дополнительную фотографию
                                                </label>

                                                <input class="update-input-foto" type="file" id="foto1" name="image" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <article class="info-image">
                                            При наличии
                                        </article>
                                    </li>

                                    <li class="wrap-edit-image">
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img" src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input">
                                                <label class="form-label">
                                                    Добавить дополнительную фотографию
                                                </label>

                                                <input class="update-input-foto" type="file" id="foto2" name="image1" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <article class="info-image">
                                            При наличии
                                        </article>
                                    </li>

                                    <li class="wrap-edit-image">
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img" src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input">
                                                <label class="form-label">
                                                    Добавить дополнительную фотографию
                                                </label>

                                                <input class="update-input-foto" type="file" id="foto3" name="image2" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <article class="info-image">
                                            При наличии
                                        </article>
                                    </li>

                                    <li class="wrap-edit-image">
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img" src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input">
                                                <label class="form-label">
                                                    Добавить дополнительную фотографию
                                                </label>

                                                <input class="update-input-foto" type="file" id="foto4" name="image3" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <article class="info-image">
                                            При наличии
                                        </article>
                                    </li>
                                </ul>
                            </div>

                            <article class="name-admin-block">
                                Введите данные Комплекта
                            </article>
                            <ul class="admin-block-2fr">
                                <li class="wrap-input categoryError" data-answer="Вы не выбрали Категорию товара">
                                    <label class="form-label">
                                        Категория товара
                                    </label>

                                    <select class="admin-select admin-input" name="category" id="class">
                                        <option class="class" value="">--Выберите Категорию товара--</option>
                                        @foreach($categories as $category)
                                            <option class="class" data-link="{{ route('sampleSubCategoriesCreate', ['id' => $category->id, 'type_item' => 'Модульные комплекты']) }}" value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="wrap-input sub_categoryError" data-answer="Вы не выбрали Подкатегорию товара">
                                    <label class="form-label">
                                        Подкатегория товара
                                    </label>
                                    <select class="admin-select admin-input type-category visible-type-modul" name="sub_category" id="sub-class" disabled>
                                        <option class="sub-class" value="">Сначала выберите Категорию товара</option>
                                    </select>
                                </li>

                                <li class=" wrap-input item_readyError" data-answer="Вы не выбрали Коллекцию товара">
                                    <label class="form-label">
                                        Коллекция товара
                                    </label>

                                    <select class="admin-select admin-input collection visible-type-modul" name="collection" id="collection">
                                        <option class="sub-collection" value="">--Выберите коллекцию--</option>
                                        @foreach($item_collections as $item_collection)
                                        <option class="sub-collection" data-link="{{ route('sampleModul', $item_collection['id']) }}" value="{{$item_collection['id']}}">{{$item_collection['collection']}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="wrap-input articleError" data-answer="Введите Артикул товара">
                                    <label class="form-label">
                                        Артикул товара (только цифры(!!!))
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="article" name="article" value="{{ old('article') }}"/>
                                </li>

                                <li class="wrap-input full_nameError" data-answer="Введите Полное название товара">
                                    <label class="form-label">
                                        Полное название товара
                                    </label>

                                    <input class="admin-select admin-input" type="text" id="full-name" name="full_name" value="{{ old('full_name') }}"/>
                                </li>

                                <li class="wrap-input small_nameError" data-answer="Введите Короткое название товара">
                                    <label class="form-label">
                                        Короткое название товара
                                    </label>

                                    <input class="admin-select admin-input" type="text" id="name" name="small_name" value="{{ old('small_name') }}"/>
                                </li>

                                <li class="wrap-input korpusError" data-answer="Выберите Материал корпус">
                                    <label class="form-label">
                                        Материал корпус
                                    </label>

                                    <select class="admin-select admin-input" name="korpus" id="korpus">
                                        <option value="">--Выберите материал корпуса--</option>
                                        <option value="ЛДСП">ЛДСП</option>
                                        <option value="МДФ">МДФ</option>
                                    </select>
                                </li>

                                <li class="wrap-input fasadError" data-answer="Выберите Материал фасада">
                                    <label class="form-label">
                                        Материал фасада
                                    </label>

                                    <select class="admin-select admin-input" name="fasad" id="fasad">
                                        <option value="">--Выберите материал фасада--</option>
                                        <option value="ЛДСП">ЛДСП</option>
                                        <option value="МДФ">МДФ</option>
                                    </select>
                                </li>

                                <li class="wrap-input color_korpus_idError" data-answer="Выберите Цвет корпуса">
                                    <label class="form-label">
                                        Цвет корпуса
                                    </label>

                                    <select class="admin-select admin-input" name="color_korpus_id" id="color-korpus">
                                        <option value="">--Выберите цвет корпуса--</option>
                                        @if($colors->isEmpty())
                                            <option value="">Вы не создали ни одного цвета</option>
                                        @else
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}">{{$color->color}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>

                                <li class="wrap-input color_fasad_idError" data-answer="Выберите Цвет фасада">
                                    <label class="form-label">
                                        Цвет фасада
                                    </label>

                                    <select class="admin-select admin-input" name="color_fasad_id" id="color-fasad">
                                        <option value="">--Выберите цвет фасада--</option>
                                        @if($colors->isEmpty())
                                            <option value="">Вы не создали ни одного цвета</option>
                                        @else
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}">{{$color->color}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>

                                <li class="wrap-input" data-answer="Вы не выбрали новый статус">
                                    <label class="form-label">
                                        Статус товара
                                    </label>

                                    <select class="admin-select admin-input" name="status" id="status">
                                        <option class="option" value="">--Выберите новый статус товара--</option>
                                        <option class="option" value="Продажа">Продажа</option>
                                        <option class="option" value="Резерв">Резерв</option>
                                        <option class="option" value="Не отображать">Не отображать</option>
                                    </select>
                                </li>
                            </ul>

                            <ul class="admin-block-2fr block-padding">
                                <li class="wrap-input" data-answer="Вы не выбрали новый статус">
                                    <label class="db-admin-article">
                                        Добавить модуль в комплектацию
                                    </label>

                                    <select class="admin-select" name="modul_item" id="modul_item" disabled>
                                        <option class="modul_item" value="">--Выберите Коллекцию--</option>
                                    </select>

                                    <div class="wrap-button button-single js-button" data-search="Создаем Модульный комплект">
                                        Добавить Модуль
                                    </div>
                                </li>
                                <li class="wrap-input js-admin-input" data-answer="Вы не добавили Модули">
                                    <article class="db-admin-article">
                                        Добавленные модули:
                                    </article>
                                        <ul class="relevant-info-list js-reload-block">
                                            <li class="form-label admin-block-2fr-db js-warning">
                                                <article class="collect-article">Вы не добавили Модули</article>
                                            </li>
                                        </ul>
                                </li>
                            </ul>

                            <div class="wrap-button-big wrap-button" data-search="Создаем Модульный комплект">
                                <button class="button-form accept" type="submit" name="submit">Создать</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
