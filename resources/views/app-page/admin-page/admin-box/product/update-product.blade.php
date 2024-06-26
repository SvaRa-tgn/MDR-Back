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
                    Редактировать - {{$product->full_name}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">{{$product->small_name}}</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные товара:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="update-form-data" data-form="update-status" method="POST" action="{{ route('updateStatus', $product->id )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <article class="name-admin-block" data-success="Статус товара изменен">
                                Изменение статуса товара
                            </article>
                            <div class="wrap-input" data-answer="Вы не выбрали новый статус">
                                <label class="form-label">
                                    Статус товара
                                </label>

                                <select class="admin-select admin-input" name="status_product" id="status">
                                    @if($images->isEmpty())
                                    <option class="option" value="">--Без заглавной фотографиий вы не можете менять статус--</option>
                                    @else
                                    <option class="option" value="">--Выберите новый статус товара--</option>
                                    <option class="option" value="Продажа">Продажа</option>
                                    <option class="option" value="Резерв">Резерв</option>
                                    <option class="option" value="Не отображать">Не отображать</option>
                                    @endif
                                </select>
                            </div>
                            <div class="wrap-button" data-search="Изменяем статус товара">
                                <button class="button-form accept" type="submit" name="submit">Изменить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Актуальный статус:
                            </article>
                            <article class="db-non-list">
                                {{$product->status}}
                            </article>
                        </div>
                    </div>

                    <div class="edit-foto ">
                        <article class="name-admin-block">
                            Изменение, добавление и удаление фотографий
                        </article>
                        <div class="wrap-edit-foto-list">
                            <ul class="edit-foto-list">
                                @foreach($images as $image)
                                    @if($image->status === 'top')
                                        <li class="edit-block-foto-item">
                                            <div class="wrap-edit-image ">
                                                <div class="edit-image">
                                                    <img class="main-block-item-img" src="{{asset($image->link)}}"
                                                         alt="Гостиные">
                                                    <div class="filter">
                                                        <div class="wrap-filter-box">
                                                            <article class="filter-box">
                                                                Заглавное фото
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="accept button-image js-image-change">Изменить</button>
                                                <article class="info-image">
                                                    Удалить нельзя, только изменить
                                                </article>
                                            </div>

                                            <form class="wrap-edit-image image-update-form update-form-data js-visibality-form" data-form="update-image" data-id="{{$product->id}}" action="{{ route('updateImage', $image->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="edit-image imageError"
                                                     data-answer="Вы не выбрали фотографию">

                                                    <img class="main-block-item-img filter-blur"
                                                         src="{{asset($image->link)}}" alt="Гостиные">


                                                    <div class="filter wrap-update-input" data-answer="Вы не выбрали фото">
                                                        <label class="form-label">
                                                            Изменить фото
                                                        </label>
                                                        <input class="update-input-foto admin-input" type="file" id="image_top"
                                                               name="image"
                                                               accept="image/png, image/jpeg"/>
                                                    </div>
                                                </div>
                                                <button class="accept button-image" data-search="Изменяем главную фотографию">Сохранить</button>
                                                <article class="neutral button-image button-article js-image-back-change">
                                                    Отменить
                                                </article>
                                            </form>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach($images as $image)
                                    @if($image->status === 'stock')
                                        <li class="edit-block-foto-item">
                                            <div class="wrap-edit-image ">
                                                <div class="edit-image">
                                                    <img class="main-block-item-img " src="{{asset($image->link)}}"
                                                         alt="Гостиные">
                                                    <div class="filter">
                                                        <div class="wrap-filter-box">
                                                            <article class="filter-box">
                                                                Дополнительное фото
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="accept button-image js-image-change">Изменить</button>
                                                <form class="delete-form-data" data-form="delete-image" data-success="Фотография успешно удалена" data-id="{{$product->id}}" action="{{ route('destroyImage', $image->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="button-image stop" value="Удалить">
                                                </form>
                                            </div>

                                            <form class="wrap-edit-image image-update-form update-form-data js-visibality-form" data-form="update-image" data-id="{{$product->id}}" action="{{ route('updateImage', $image->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="edit-image imageError"
                                                     data-answer="Вы не выбрали фотографию">

                                                    <img class="main-block-item-img filter-blur "
                                                         src="{{asset($image->link)}}" alt="Гостиные">

                                                    <div class="filter wrap-update-input" data-answer="Вы не выбрали фото">
                                                        <label class="form-label">
                                                            Изменить фото
                                                        </label>
                                                        <input class="update-input-foto admin-input" type="file" id="image"
                                                               name="image"
                                                               accept="image/png, image/jpeg"/>
                                                    </div>
                                                </div>
                                                <button class="accept button-image" data-search="Изменяем фотографию">Сохранить</button>
                                                <article class="neutral button-image button-article js-image-back-change">
                                                    Отменить
                                                </article>
                                            </form>
                                        </li>
                                    @endif
                                @endforeach

                                <form class="edit-block-foto-item js-up-foto update-form-data" data-form="add-image" data-id="" action="{{ route('addImage', $product->id) }}" method="post">
                                    <div class="wrap-edit-image">
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img"
                                                 src="{{asset('/img/icon/non-image.png')}}" alt="Гостиные">
                                            <div class="filter wrap-update-input" data-answer="Вы не выбрали фото">
                                                <label class="form-label">
                                                    Добавить фото
                                                </label>

                                                <input class="update-input-foto admin-input" type="file" id="image_delete" name="image"
                                                       accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <button class="accept button-image" data-search="Добавляем фотографию">Добавить</button>
                                        <article class="info-image">
                                            При наличии
                                        </article>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>

                    <div class="admin-block-2fr">
                        <form class="update-form-data" data-form="update-product" action="{{ route('updateProduct', $product->id) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <article class="name-admin-block" data-success="Изменения в товаре сохранены">
                                Редактировать товар
                            </article>
                            <ul class="admin-block-1fr">
                                <li class="wrap-input categoryError" data-answer="Вы не выбрали Категорию товара">
                                    <label class="form-label">
                                        Категория товара
                                    </label>

                                    <select class="admin-select admin-input" name="category" id="class">
                                        <option class="class" value="">--Выберите категорию товара--</option>
                                        @foreach($categories as $category)
                                            <option class="class" data-link="{{ route('sampleSubCategories', ['id' => $category->id, 'type_item' => 'Товары']) }}"
                                                    value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="wrap-input sub_categoryError"
                                    data-answer="Вы не выбрали Подкатегорию товара">
                                    <label class="form-label">
                                        Подкатегория товара
                                    </label>
                                    <select class="admin-select admin-input type-category visible-type-modul"
                                            name="sub_category" id="sub-class" disabled>
                                        <option class="sub-class" value="">Сначала выберите Категорию товара</option>
                                    </select>
                                </li>

                                <li class="wrap-input typeError" data-answer="Вы не выбрали Тип товара">
                                    <label class="form-label">
                                        Тип товара
                                    </label>

                                    <select class="admin-select admin-input type" name="type" id="type">
                                        <option class="type-disable" value="">--Выберите тип товара--</option>
                                        <option class="type" data-link="{{ route('sampleCollection', ['type' => 'Модульная коллекция']) }}" value="Модуль">Модуль</option>
                                        <option class="type" data-link="{{ route('sampleCollection', ['type' => 'Готовая коллекция']) }}" value="Готовый">Готовый</option>
                                    </select>
                                </li>

                                <li class=" wrap-input item_readyError" data-answer="Вы не выбрали Коллекцию товара">
                                    <label class="form-label">
                                        Коллекция товара
                                    </label>

                                    <select class="admin-select admin-input collection visible-type-modul" name="collection" id="collection" disabled>
                                        <option class="sub-collection" value="">Сначала выберите Тип товара</option>
                                    </select>
                                </li>

                                <li class="wrap-input full_nameError" data-answer="Введите Полное название товара">
                                    <label class="form-label">
                                        Полное название товара
                                    </label>

                                    <input class="admin-select admin-input" type="text" id="full-name" name="full_name"
                                           value="{{ old('full_name') }}"/>
                                </li>

                                <li class="wrap-input small_nameError" data-answer="Введите Короткое название товара">
                                    <label class="form-label">
                                        Короткое название товара
                                    </label>

                                    <input class="admin-select admin-input" type="text" id="name" name="small_name"
                                           value="{{ old('small_name') }}"/>
                                </li>

                                <li class="wrap-input articleError" data-answer="Введите Артикул товара">
                                    <label class="form-label">
                                        Артикул товара (только цифры(!!!))
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                           type="text" id="article" name="article" value="{{ old('article') }}"/>
                                </li>

                                <li class="wrap-input heightError" data-answer="Введите Высоту товара">
                                    <label class="form-label">
                                        Высота
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                           type="text" id="height" name="height" value="{{ old('height') }}"/>
                                </li>

                                <li class="wrap-input widthError" onkeypress="return /[0-9]/i.test(event.key)"
                                    data-answer="Введите Ширину товара">
                                    <label class="form-label">
                                        Ширина
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                           type="text" id="width" name="width" value="{{ old('width') }}"/>
                                </li>

                                <li class="wrap-input deepError" data-answer="Введите Глубину товара">
                                    <label class="form-label">
                                        Глубина
                                    </label>

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                           type="text" id="deep" name="deep" value="{{ old('deep') }}"/>
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

                                    <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                           type="text" id="price" name="price"/>
                                </li>
                            </ul>

                            <div class="wrap-button-big wrap-button" data-search="Изменяем данные товара">
                                <button class="button-form accept" type="submit" name="submit">Сохранить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные
                            </article>
                            <ul class="relevant-info-list">
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Категория:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->category}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Подкатегория:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->sub_category}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Тип товара:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->type}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Коллекция:
                                    </article>
                                    <article class="relevant-info">
                                        @if($product->collection === null)
                                        Без коллекции
                                        @else
                                            {{$product->collection}}
                                        @endif
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Полное название товара:
                                    </article>
                                    <article class="relevant-info js-data-name" data-tag="Товар">
                                        {{$product->full_name}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Короткое название товара:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->small_name}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Артикул товара:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->article}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Высота:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->height}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Ширина:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->width}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Глубина:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->deep}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Материал корпуса:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->korpus}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Материал фасада:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->fasad}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Цвет корпуса:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->color_korpus}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Цвет фасада:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->color_fasad}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Цена:
                                    </article>
                                    <article class="relevant-info">
                                        {{$product->price}}
                                    </article>
                                </li>
                            </ul>
                            <form class="wrap-button-big itemDelete">
                                <button class="button-form stop" type="submit" name="submit">Удалить товар</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
