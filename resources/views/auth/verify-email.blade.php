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
                    Подтверждение email
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        @include('static.aside.profile-aside')
        <section class="private-main-block">
            <div class="wrap-head-page alt-bg">
                <h1 class="private-page-h1">Подтверждение email</h1>
            </div>

            <div class="email-page">

                <article class="name-admin-block">
                    Здравствуйте, {{$user->familia}} {{$user->name}}  {{$user->father_name}}.
                </article>

                <div class="email-relevant">
                    Вы зарегестрировались на нашем сайте. Для окончания регистрации и активации вашего личного кабинета вам нужно подтвердить email.
                </div>
                <div class="email-relevant">
                    Для подтверждения вам нужно перейти по ссылке в письме, которое мы отправили Вам на email: {{$user->email}}, указанный Вами при регистрации.
                </div>
                <a class="button-auth button-relevant neutral" href="{{$user->mail}}">Порверить почту</a>

                <div class="email-relevant">
                    Если вы не получали письмо нажмите на кнопку ниже чтобы выслать письмо повторно.
                </div>
                <a class="button-auth button-relevant accept js-verify-mail" href="{{route('verification.send')}}">Выслать письмо</a>

                <div class="email-relevant">
                    Если вы указали не тот email вы можете его изменить. Письмо будет отправлено на новый email.
                </div>
                <form class="update-form-data change-form js-reload-block" data-form="email-change" method="POST" action="{{ route('change.mail')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="wrap-input emailError" data-answer="Вы не внесли изменения" data-relink="{{route('verification.send')}}">
                        <input class="admin-select admin-input " type="email" id="new_email" name="email" value="{{$user->email}}">
                    </div>

                    <button class="button-auth button-relevant stop" type="submit" name="submit-auth">
                        Изменить email
                    </button>
                </form>
            </div>
        </section>
    </section>
@endsection
