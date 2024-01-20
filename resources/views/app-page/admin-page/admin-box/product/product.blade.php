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
                    Создать товар
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Создать товар</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные товара:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-1fr">

                        <form class="form-create-product" data-form="product" action="{{ route('createProduct.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="edit-foto">
                                <article class="name-admin-block">
                                    Добавление фотографий
                                </article>
                                <ul class="edit-foto-list">
                                    <li class="wrap-edit-image" data-answer="Вы не выбрали фотографию">
                                        <div class="edit-image imageError" >
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
                                Введите данные товара
                            </article>
                            <ul class="admin-block-2fr">
                                <li class="wrap-input categoryError" data-answer="Вы не выбрали Категорию товара">
                                    <label class="form-label">
                                        Категория товара
                                    </label>

                                    <select class="admin-select admin-input" name="category" id="class">
                                        <option class="class" value="">--Выберите категорию товара--</option>
                                        @foreach($categories as $category)
                                            <option class="class" data-link="{{ route('sample.show', $category->id) }}" value="{{$category->id}}">{{$category->category}}</option>
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

                                <li class="wrap-input typeError" data-answer="Вы не выбрали Тип товара">
                                    <label class="form-label">
                                        Тип товара
                                    </label>

                                    <select class="admin-select admin-input type" name="type" id="type" disabled>
                                        <option class="type-disable" value="">Сначала выберите подкатегорию товара</option>
                                        <option class="type" value="Модульный">Модульный</option>
                                        <option class="type" value="Готовый">Готовый</option>
                                    </select>
                                </li>

                                <li class="wrap-input type_modulError" data-answer="Вы не выбрали Тип модульного товара">
                                    <label class="form-label">
                                        Тип модульного товара
                                    </label>

                                    <select class="admin-select admin-input js-item-coll type-modul" name="type_modul" id="type-modul" disabled>
                                        <option class="type-modul-disable option-null" value="">Выберите тип товара</option>
                                        <option class="type-modul" value="Комплект">Комплект</option>
                                        <option class="type-modul" value="модуль">Модуль</option>
                                    </select>
                                </li>

                                <li class=" wrap-input item_modulError" data-answer="Вы не выбрали Коллекцию модульного товара">
                                    <label class="form-label">
                                        Коллекция модульного товара
                                    </label>

                                    <select class="admin-select admin-input js-item-coll item-collection" name="item_modul" id="modul_collection" disabled>
                                        <option class="modul-collection-disable option-null" value="">Выберите тип товара</option>
                                        @if($modul_collections->isEmpty())
                                            <option class="modul-collection" value="null">Без коллекции</option>
                                        @else
                                            <option class="modul-collection" value="null">Без коллекции</option>
                                            @foreach($modul_collections as $modul_collection)
                                                <option class="modul-collection" value="{{$modul_collection->modul_collection}}">{{$modul_collection->modul_collection}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>

                                <li class=" wrap-input item_readyError" data-answer="Вы не выбрали Коллекцию готового товара">
                                    <label class="form-label">
                                        Коллекция готового товара
                                    </label>

                                    <select class="admin-select admin-input js-item-coll item-ready" name="item_ready" id="ready_collection" disabled>
                                        <option class="ready-collection-disable option-null" value="">Выберите тип товара</option>
                                        @if($ready_collections->isEmpty())
                                            <option class="modul-collection" value="null">Без коллекции</option>
                                        @else
                                            <option class="modul-collection" value="null">Без коллекции</option>
                                            @foreach($ready_collections as $ready_collection)
                                                <option class="modul-collection" value="{{$ready_collection->ready_collection}}">{{$ready_collection->ready_collection}}</option>
                                            @endforeach
                                        @endif
                                    </select>
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

                                <li class="wrap-input articleError" data-answer="Введите Артикул товара">
                                    <label class="form-label">
                                        Артикул товара (только цифры(!!!))
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="article" name="article" value="{{ old('article') }}"/>
                                </li>

                                <li class="wrap-input" data-answer="Вы не выбрали новый статус">
                                    <label class="form-label">
                                        Статус товара
                                    </label>

                                    <select class="admin-select admin-input" name="status" id="status">
                                        <option class="option" value="">--Выберите новый статус товара--</option>
                                        <option class="option" value="Продажа">Продажа</option>
                                        <option class="option" value="Резерв">Заказ</option>
                                        <option class="option" value="Не отображать">Не отображать</option>
                                    </select>
                                </li>

                                <li class="wrap-input heightError" data-answer="Введите Высоту товара">
                                    <label class="form-label">
                                        Высота
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="height" name="height" value="{{ old('height') }}"/>
                                </li>

                                <li class="wrap-input widthError" onkeypress="return /[0-9]/i.test(event.key)" data-answer="Введите Ширину товара">
                                    <label class="form-label">
                                        Ширина
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="width" name="width" value="{{ old('width') }}"/>
                                </li>

                                <li class="wrap-input deepError" data-answer="Введите Глубину товара">
                                    <label class="form-label">
                                        Глубина
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="deep" name="deep" value="{{ old('deep') }}"/>
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

                                <li class="wrap-input priceError" data-answer="Введите цену">
                                    <label class="form-label">
                                        Цена
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)" type="text" id="price" name="price"/>
                                </li>

                                <div class="wrap-button-big">
                                    <button class="button-form accept" type="submit" name="submit">Сохранить</button>
                                </div>
                            </ul>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
