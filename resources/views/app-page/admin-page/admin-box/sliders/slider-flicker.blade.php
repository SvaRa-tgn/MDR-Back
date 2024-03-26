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
                    Настройка слайдера
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Настройка слайдера</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Слайдер: {{$slider->name}}</h3>
                </section>

                <section class="content-admin-block">
                    <div class="edit-foto">
                        <div class="wrap-setup-button ">
                            @if($slider->status === 'deactive')
                            <form class="update-form-data" data-form="update-slider" data-id="{{$slider->id}}" data-status="active" action="{{route('updateStatusSlider', $slider->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="submit" class="button-auth accept" value="Подключить слайдер">
                            </form>
                            @elseif($slider->status === 'active')
                                <div class="info-slaider">
                                    Слайдер подключен. Для отключения этого слайдера просто подключите другой.
                                </div>
                            @endif
                        </div>
                        <article class="name-admin-block" >
                            Изменение, добавление и удаление фотографий
                        </article>
                        <div class="wrap-edit-foto-list">
                            <ul class="edit-foto-list">
                                @foreach($images as $image)
                                @if($slider->slider === $image['slider'])
                                @if($image['status'] === 'top')
                                <li class="edit-block-foto-item">
                                    <div class="wrap-edit-image ">
                                        <div class="edit-image">
                                            <img class="main-block-item-img" src="{{asset($image['link'])}}"
                                                 alt="Мебель в Рязани">
                                            <div class="filter">
                                                <div class="wrap-filter-box">
                                                    <article class="filter-box">
                                                        Обязательное фото
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="accept button-image js-image-change">Изменить</button>
                                        <article class="info-image">
                                            Удалить нельзя, только изменить
                                        </article>
                                    </div>

                                    <form class="wrap-edit-image image-update-form update-form-data js-visibality-form" data-form="update-image" data-id="{{$slider->id}}" action="{{route('updateImageSlider', $image['id'])}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img filter-blur" src="{{asset($image['link'])}}" alt="Мебель в Рязани">
                                            <div class="filter wrap-update-input" data-answer="Вы не выбрали фото">
                                                <label class="form-label">
                                                    Изменить фото
                                                </label>
                                                <input class="update-input-foto admin-input" type="file" id="image_top" name="image"  accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <button class="accept button-image" data-search="Изменяем фотографию">Сохранить</button>
                                        <article class="neutral button-image button-article js-image-back-change">
                                            Отменить
                                        </article>
                                    </form>
                                </li>
                                @endif
                                @endif
                                @endforeach

                                @foreach($images as $image)
                                @if($slider->slider === $image['slider'])
                                @if($image['status'] === 'stock')
                                <li class="edit-block-foto-item">
                                    <div class="wrap-edit-image ">
                                        <div class="edit-image">
                                            <img class="main-block-item-img " src="{{asset($image['link'])}}"
                                                 alt="Мебель в Рязани">
                                            <div class="filter">
                                                <div class="wrap-filter-box">
                                                    <article class="filter-box">
                                                        Дополнительное фото
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="accept button-image js-image-change">Изменить</button>
                                        <form class="delete-form-data" data-form="delete-image" data-success="Фотография успешно удалена" data-id="{{$slider->id}}" action="{{route('destroyImageSlider', $image['id'])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="button-image stop" value="Удалить">
                                        </form>
                                    </div>

                                    <form class="wrap-edit-image image-update-form update-form-data js-visibality-form" data-form="update-image" data-id="{{$slider->id}}" action="{{route('updateImageSlider', $image['id'])}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="edit-image imageError" data-answer="Вы не выбрали фотографию">
                                            <img class="main-block-item-img filter-blur" src="" alt="Мебель в Рязани">
                                            <div class="filter wrap-update-input" data-answer="Вы не выбрали фото">
                                                <label class="form-label">
                                                    Изменить фото
                                                </label>
                                                <input class="update-input-foto admin-input" type="file" id="image" name="image" accept="image/png, image/jpeg"/>
                                            </div>
                                        </div>
                                        <button class="accept button-image" data-search="Изменяем фотографию">Сохранить</button>
                                        <article class="neutral button-image button-article js-image-back-change">
                                            Отменить
                                        </article>
                                    </form>
                                </li>
                                @endif
                                @endif
                                @endforeach

                                <form class="edit-block-foto-item js-up-foto update-form-data" data-form="add-image" data-id="{{$slider->id}}" action="{{route('addImageSlider')}}" method="post">
                                    @csrf
                                    @method('PUT')
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
                </section>
            </div>
        </section>
    </section>
@endsection
