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
                    Профиль админки
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')
        <section class="private-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Админка</h1>
            </div>

            <ul class="main-private-data-list">
                <li class="main-private-data-item transform-start">
                    <div class="wrap-head-page-h3">
                        <h3 class="page-h3 color-admin">Личные даные админа:</h3>

                    </div>

                    <ul class="private-data-list">
                        <li class="private-data-item">
                            Фамилия:
                        </li>
                        <li class="private-data-item">
                            Пользователь
                        </li>
                        <li class="private-data-item">
                            Имя:
                        </li>
                        <li class="private-data-item">
                            Пользователь
                        </li>
                        <li class="private-data-item">
                            Отчество:
                        </li>
                        <li class="private-data-item">
                            Пользователевич
                        </li>
                        <li class="private-data-item">
                            Телефон:
                        </li>
                        <li class="private-data-item">
                            +79001112233
                        </li>
                        <li class="private-data-item">
                            email:
                        </li>
                        <li class="private-data-item">
                            polzovatel@mail.ru
                        </li>
                    </ul>
                    <div class="wrap-form-button">
                        <div class="mdr-button neutral fs-1-5">
                            Выйти из аккаунта
                        </div>
                        <div class="mdr-button accept fs-1-5 redaction">
                            Редактировать
                        </div>
                    </div>
                </li>

                <li class="main-private-data-item transform-start-2">
                    <div class="wrap-private-top">
                        <h3 class="page-h3 color-admin">Редактирование личных данных:</h3>
                    </div>

                    <form class="private-data-form">
                        <div class="wrap-private-data-form">
                            <label class="private-data-form-ladel">
                                Фамилия:
                            </label>
                            <input id="lastname" type="text" name="lastname" placeholder="Пользователь" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                Имя:
                            </label>
                            <input id="name" type="text" name="name" placeholder="Пользователь" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                Отчество:
                            </label>
                            <input id="surname" type="text" name="surname" placeholder="Пользователевич" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                Телефон:
                            </label>
                            <input id="phone" type="number" name="phone" placeholder="+79001112233" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                email:
                            </label>
                            <input id="email" type="email" name="email" placeholder="polzovatel@mail.ru" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                Новый пароль:
                            </label>
                            <input id="password" type="password" name="password" placeholder="Введите новый пароль" class="private-data-form-input" />
                            <label class="private-data-form-ladel">
                                Подтверждение нового пароля:
                            </label>
                            <input id="password" type="password" name="password" placeholder="Подтвердите новый пароль" class="private-data-form-input" />
                        </div>

                        <div class="wrap-form-button">
                            <div class="mdr-button stop fs-1-5 cancel">
                                Отменить
                            </div>
                            <button class="mdr-button accept fs-1-5">
                                Сохранить
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </section>
    </section>
@endsection
