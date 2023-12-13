@extends('/app-page/profile-page/profile')
@section('content')
<section class="breadcrumbs">
    <div class="wrap-breadcrumbs">
        <ul class="breadcrumbs-list">
            <li class="breadcrumbs-item">
                <a class="breadcrumbs-link" href="/index.html">Главная</a>
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
            <h1 class="page-h1">Личный кабинет</h1>
        </div>

        <ul class="main-private-data-list">
            <li class="main-private-data-item transform-start">
                <div class="wrap-head-page-h3">
                    <h3 class="private-page-h3 alt-color">Личные данные:</h3>

                    <form  action="{{route('profileUser.destroy', $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mdr-button stop fs-1-1 button-margin" value="удалить">
                    </form>

                </div>

                <ul class="private-data-list">
                    <li class="private-data-item">
                        Фамилия:
                    </li>
                    <li class="private-data-item">
                        {{$user->familia}}
                    </li>
                    <li class="private-data-item">
                        Имя:
                    </li>
                    <li class="private-data-item">
                        {{$user->name}}
                    </li>
                    <li class="private-data-item">
                        Отчество:
                    </li>
                    <li class="private-data-item">
                        {{$user->father_name}}
                    </li>
                    <li class="private-data-item">
                        Телефон:
                    </li>
                    <li class="private-data-item">
                        {{$user->phone}}
                    </li>
                    <li class="private-data-item">
                        email:
                    </li>
                    <li class="private-data-item">
                        {{$user->email}}
                    </li>
                </ul>
                <div class="wrap-form-button">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button class="dropdown-item mdr-button neutral fs-1-5">Выйти из аккаунта</button>
                    </form>
                    <div class="mdr-button accept redaction fs-1-5">
                        Редактировать
                    </div>
                </div>
            </li>

            <li class="main-private-data-item transform-start-2">
                <div class="wrap-private-top">
                    <h3 class="private-page-h3 alt-color">Редактирование личных данных:</h3>
                </div>
                <form class="private-data-form" action="{{ route('profileUser.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="wrap-private-data-form">
                        <label class="private-data-form-ladel">
                            Фамилия:
                        </label>
                        <div class="wrap-input wrap-input-reg" data-answer="">
                            <input id="familia-update" type="text" name="familia" value="{{$user->familia}}" class="private-data-form-input input-update" />
                        </div>
                        <label class="private-data-form-ladel">
                            Имя:
                        </label>
                        <div class="wrap-input wrap-input-reg" data-answer="">
                            <input id="name-update" type="text" name="name" value="{{$user->name}}" class="private-data-form-input input-update" />
                        </div>
                        <label class="private-data-form-ladel">
                            Отчество:
                        </label>
                        <div class="wrap-input wrap-input-reg" data-answer="">
                            <input id="father-name-update" type="text" name="father_name" value="{{$user->father_name}}" class="private-data-form-input input-update" />
                        </div>
                        <label class="private-data-form-ladel">
                            Телефон:
                        </label>
                        <div class="wrap-input wrap-input-reg" data-answer="">
                            <input id="phone-update" type="phone" name="phone" value="{{$user->phone}}" class="private-data-form-input input-update" />
                        </div>
                    </div>
                    <div class="wrap-form-button">
                        <div class="mdr-button stop cancel fs-1-5">
                            Отменить
                        </div>
                        <button class="mdr-button accept fs-1-5">
                            Сохранить
                        </button>
                    </div>
                </form>
                <div class="wrap-private-top">
                    <h3 class="private-page-h3 alt-color">Изменить пароль:</h3>
                </div>
                <form class="private-data-form-password" action="{{ route('profilePasswordUser.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="wrap-private-data-form">

                        <label class="private-data-form-ladel">
                            Новый пароль:
                        </label>
                        <div class="wrap-input wrap-input-reg passwordErrorPas" data-answer="">
                            <input id="password-private-update" type="password" name="password" placeholder="Введите новый пароль" class="private-data-form-input" />
                        </div>
                        <label class="private-data-form-ladel">
                            Подтверждение нового пароля:
                        </label>
                        <div class="wrap-input wrap-input-reg passwordErrorPas" data-answer="">
                            <input id="password-confirmation-update" type="password" name="password_confirmation" placeholder="Подтвердите новый пароль" class="private-data-form-input" />
                        </div>
                    </div>

                    <div class="wrap-form-button">
                        <div class="mdr-button stop cancel fs-1-5">
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
@include('app-page.index-page.index-box.index-subscrible')
@endsection
