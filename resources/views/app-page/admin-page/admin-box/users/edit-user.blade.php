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
                    <a class="breadcrumbs-link" href="{{route('users')}}">Поиск пользователя</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Редактировать - {{$user->familia}} {{$user->name}} {{$user->father_name}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">{{$user->familia}} {{$user->name}} {{$user->father_name}}</h1>
            </div>

            <div class="main-private-data-item">
                <section class="wrap-head-page-h3">
                    <h3 class="private-page-h3 color-admin">Данные товара:</h3>
                </section>

                <section class="content-admin-block">
                    <div class="admin-block-2fr">
                        <form class="update-form-data" data-form="update-role" method="POST" action="{{ route('updateUserRole', $user->id )}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <article class="name-admin-block" data-success="Роль пользователя изменена">
                                Изменение статуса товара
                            </article>
                            <div class="wrap-input" data-answer="Вы не выбрали новую роль">
                                <label class="form-label">
                                    Статус товара
                                </label>

                                <select class="admin-select admin-input" name="role" id="up-role">
                                    <option class="option" value="">--Выберите новую роль--</option>
                                    <option class="option" value="user">Пользователь</option>
                                    <option class="option" value="admin">Админ</option>
                                </select>
                            </div>
                            <div class="wrap-button" data-search="Изменяем роль пользователя">
                                <button class="button-form accept" type="submit" name="submit">Изменить</button>
                            </div>
                        </form>

                        <div class="wrap-relevant-info js-reload-block">
                            <article class="db-admin-article">
                                Актуальная роль на сайте:
                            </article>
                            @if ($user->role === 'user')
                            <article class="db-non-list">
                                Пользователь
                            </article>
                            @else
                                <article class="db-non-list">
                                    Админ
                                </article>
                            @endif
                        </div>
                    </div>

                    <div class="admin-block-2fr">
                        <div class="">
                            <form class="update-form-data" data-form="update-user" action="{{ route('updateUser', $user->id) }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Персональные данные изменены">
                                    Редактировать персональные данные
                                </article>
                                <ul class="admin-block-1fr" >
                                    <li class="wrap-input familiaError" data-answer="">
                                        <label class="form-label">
                                            Фамилия
                                        </label>

                                        <input class="admin-select admin-input" type="text" id="up_familia" name="familia"
                                               value="{{ old('familia') }}"/>
                                    </li>

                                    <li class="wrap-input nameError" data-answer="">
                                        <label class="form-label">
                                            Имя
                                        </label>

                                        <input class="admin-select admin-input" type="text" id="up_name" name="name"
                                               value="{{ old('name') }}"/>
                                    </li>

                                    <li class="wrap-input father_nameError" data-answer="">
                                        <label class="form-label">
                                            Отчество
                                        </label>

                                        <input class="admin-select admin-input"
                                               type="text" id="up_father_name" name="father_name" value="{{ old('father_name') }}"/>
                                    </li>

                                    <li class="wrap-input phoneError" data-answer="Вы не внесли изменений">
                                        <label class="form-label">
                                            Номер телефона
                                        </label>

                                        <input class="admin-select admin-input" onkeypress="return /[0-9]/i.test(event.key)"
                                               type="text" id="up_phone" name="phone" value="{{ old('phone') }}"/>
                                    </li>
                                </ul>

                                <div class="wrap-button" data-search="Изменяем данные пользователя">
                                    <button class="button-form accept" type="submit" name="submit">Сохранить</button>
                                </div>
                            </form>

                            <form class="update-form-data" data-form="update-user-password" action="{{ route('updateUserPassword', $user->id) }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <article class="name-admin-block" data-success="Пароль изменен">
                                    Редактировать пароль пользователя
                                </article>
                                <ul class="admin-block-1fr" >
                                    <li class="wrap-input" data-answer="">
                                        <label class="form-label">
                                            Новый пароль
                                        </label>

                                        <input class="admin-select admin-input"
                                               type="password" id="up_password" name="password" placeholder="Введите новый пароль"/>
                                    </li>

                                    <li class="wrap-input passwordError" data-answer="Вы не внесли изменений" >
                                        <label class="form-label">
                                            Подтверждение пароля
                                        </label>

                                        <input class="admin-select admin-input"
                                               type="password" id="up_confirm_password" name="password_confirmation" placeholder="Подтвердите новый пароль"/>
                                    </li>
                                </ul>

                                <div class="wrap-button" data-search="Изменяем пароль пользователя">
                                    <button class="button-form accept" type="submit" name="submit">Сохранить</button>
                                </div>
                            </form>
                        </div>


                        <div class="wrap-relevant-info">
                            <article class="db-admin-article">
                                Актуальные данные
                            </article>
                            <ul class="relevant-info-list">
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Фамилия:
                                    </article>
                                    <article class="relevant-info">
                                        {{$user->familia}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Имя:
                                    </article>
                                    <article class="relevant-info js-data-name" data-tag="Пользователя">
                                        {{$user->name}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Отчество:
                                    </article>
                                    <article class="relevant-info">
                                        {{$user->father_name}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Номер телефона:
                                    </article>
                                    <article class="relevant-info">
                                        {{$user->phone}}
                                    </article>
                                </li>
                                <li class="relevant-info-item admin-block-1fr">
                                    <article class="form-label">
                                        Логин (Email) изменять нельзя:
                                    </article>
                                    <article class="relevant-info">
                                        {{$user->email}}
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <form class="wrap-button itemDelete">
                            <button class="button-form stop" type="submit" name="submit">Удалить пользователя</button>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
