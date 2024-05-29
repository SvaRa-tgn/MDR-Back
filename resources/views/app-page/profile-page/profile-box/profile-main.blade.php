@extends('/app-page/profile-page/profile')
@section('content')
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
                Личный кабинет
            </li>
        </ul>
    </div>
</section>

<section class="main-block main-medium-aside">
    @include('static.aside.profile-aside')
    <section class="private-main-block">
        <div class="wrap-head-page alt-bg">
            <h1 class="private-page-h1">Личный кабинет</h1>
        </div>

        <div class="main-private-data-item">
            <div class="wrap-head-page-h3">
                <h3 class="private-page-h3 color-private">Личные данные:</h3>
            </div>

            <div class="wrap-private-block-data">
                <div class="private-block-data">
                    <article class="name-admin-block">
                        Актуальные данные:
                    </article>
                    <div class="private-relevant-block">
                        <ul class="private-relevant-list">
                            <li class="private-relevant-item">
                                Email (логин):
                            </li>
                            <li class="private-relevant-item">
                                {{$user->email}}
                            </li>
                            <li class="private-relevant-item">
                                Телефон:
                            </li>
                            <li class="private-relevant-item">
                                +7{{$user->phone}}
                            </li>
                        </ul>
                        <ul class="private-relevant-list">
                            <li class="private-relevant-item">
                                Фамилия:
                            </li>
                            <li class="private-relevant-item">
                                {{$user->familia}}
                            </li>
                            <li class="private-relevant-item">
                                Имя:
                            </li>
                            <li class="private-relevant-item">
                                {{$user->name}}
                            </li>
                            <li class="private-relevant-item">
                                Отчество:
                            </li>
                            <li class="private-relevant-item">
                                {{$user->father_name}}
                            </li>
                        </ul>
                        <ul class="private-relevant-list">
                            <li class="private-relevant-item">
                                Дата рождения:
                            </li>
                            <li class="private-relevant-item">
                                {{$data}}
                            </li>
                            <li class="private-relevant-item">
                                Пол:
                            </li>
                            <li class="private-relevant-item">
                                @if($user->gender !== 'null')
                                {{$user->gender}}
                                @else
                                Не указан
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="profile-button-box">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <div class="wrap-button" data-search="Выходим из аккаунта">
                                <button class="dropdown-item button-auth neutral fs-1-5">Выйти из аккаунта</button>
                            </div>
                        </form>

                        <form class="wrap-button itemDelete">
                            <button class="button-auth stop fs-1-1 button-margin" type="submit" name="submit">Удалить аккаунт</button>
                        </form>
                    </div>
                </div>
                <div class="private-block-form">
                    <form class="update-profile-data" data-form="profile-update" method="POST" action="{{ route('updateProfile') }}">
                        @csrf
                        @method('PUT')
                        <article class="name-admin-block" data-success="Личные данные обновлены">
                            Редактирование личных данных:
                        </article>
                        <label class="form-label private-relevant-item">
                            Телефон:
                        </label>
                        <div class="wrap-input phoneError" data-answer="">
                            <input class="admin-select profile-input" type="text" id="new_phone" name="phone" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" placeholder="{{$user->phone}}" />
                        </div>
                        <label class="form-label private-relevant-item">
                            ФИО:
                        </label>
                        <div class="wrap-input familiaError" data-answer="">
                            <input class="admin-select profile-input" type="text" id="new_familia" name="familia" placeholder="{{$user->familia}}" />
                        </div>
                        <div class="wrap-input nameError" data-answer="">
                            <input class="admin-select profile-input" type="text" id="new_name" name="name" placeholder="{{$user->name}}" />
                        </div>
                        <div class="wrap-input father_nameError" data-answer="">
                            <input class="admin-select profile-input" type="text" id="new_father_name" name="father_name" placeholder="{{$user->father_name}}" />
                        </div>
                        <label class="form-label private-relevant-item">
                            Данные:
                        </label>
                        <div class="wrap-input dateError" data-answer="">
                            @if ($user->date_of_birth !== null)
                            <input class="admin-select profile-input" type="date" id="new_color" name="date" placeholder="{{$user->date_of_birth}}" />
                            @else
                            <input class="admin-select profile-input" type="date" id="new_color" name="date" value="" />
                            @endif
                        </div>
                        <div class="wrap-input colorError" data-answer="Вы не внесли изменений">
                            <select class="admin-select profile-input" name="gender" id="gender">
                                @if($user->gender === 'null')
                                <option class="class" value="">--Выберите свой пол--</option>
                                <option class="class" value="Мужской">Мужской</option>
                                <option class="class" value="Женский">Женский</option>
                                @elseif($user->gender === 'Мужской')
                                <option class="class" value="">{{$user->gender}}</option>
                                <option class="class" value="Женский">Женский</option>
                                @elseif($user->gender === 'Женский')
                                <option class="class" value="">{{$user->gender}}</option>
                                <option class="class" value="Мужской">Мужской</option>
                                @endif
                            </select>
                        </div>

                        <div class="wrap-button" data-search="Обновляем личные данные">
                            <button class="button-auth accept js-up-category" type="submit" name="submit-auth">Сохранить</button>
                        </div>
                    </form>
                    <form class="update-profile-data" method="POST" action="{{ route('updateProfilePassword') }}">
                        @csrf
                        @method('PUT')
                        <article class="name-admin-block" data-success="Пароль обновлен">
                            Новый пароль:
                        </article>

                        <div class="wrap-input passwordError" data-answer="Вы не ввели новый пароль">
                            <input class="admin-select profile-input" type="password" id="password" name="password"/>
                        </div>
                        <div class="wrap-input passwordError" data-answer="Вы не ввели новый пароль">
                            <input class="admin-select profile-input" type="password" id="profile_password_confirmation" name="password_confirmation" />
                        </div>

                        <div class="wrap-button" data-search="Изменяем пароль">
                            <button class="button-auth accept js-up-category" type="submit" name="submit-auth">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
