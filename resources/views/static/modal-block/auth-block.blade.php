<section class="auth-block">
    <div class="wrap-auth-block">
        <section class="block-auth visible-block-auth">
            <article class="auth-cross">
                <img class="img-cross" src="{{asset('/img/icon/cross.png')}}" alt="Cross" />
            </article>
            <div class="block-auth-head">
                <img class="block-auth-logo" src="{{asset('/img/logo/logo.svg')}}" alt="Логотип" />
            </div>

            <div class="wrap-auth-item">
                <h2 class="block-auth-h1">Вход в личный кабинет</h2>
                <form class="form-auth" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="wrap-input wrap-input-auth" data-answer="">
                        <input id="email-auth" type="email" name="email" placeholder="Введите свой email" value="{{ old('email') }}" class="input-auth"  autocomplete="email" autofocus />
                    </div>
                    <div class="wrap-input wrap-input-auth emailError" data-answer="">
                        <input id="password-auth" type="password" name="password" placeholder="Введите свой пароль" class="input-auth"  autocomplete="current-password" />
                    </div>
                    <button class="button-auth accept" type="submit" name="submit-auth">Войти</button>
                </form>
                <ul class="form-list">
                    <li class="form-input">
                        <article class="form-item-link registration-slide">Регистрация</article>
                    </li>
                    <li class="form-input">
                        <article class="form-item-link recovery-slide">Восстановление пароля</article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="block-reg">
            <article class="auth-cross">
                <img class="img-cross" src="{{asset('/img/icon/cross.png')}}" alt="Cross" />
            </article>
            <div class="block-auth-head">
                <img class="block-auth-logo" src="{{asset('/img/logo/logo.svg')}}" alt="Логотип" />
            </div>

            <div class="wrap-auth-item">
                <h1 class="block-auth-h1">Регистрация</h1>
                <form class="form-auth-reg" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="wrap-fio-form">
                        <div class="wrap-input wrap-input-reg input-width" data-answer="">
                            <input id="name-reg" type="text" name="name" placeholder="Ваше имя" class="input-auth input-reg" value="{{ old('name') }}" autocomplete="name" />
                        </div>
                        <div class="wrap-input wrap-input-reg input-width" data-answer="">
                            <input id="familia" type="text" name="familia" placeholder="Ваша фамилия" class="input-auth input-reg" value="{{ old('familia') }}" autocomplete="familia" />
                        </div>
                        <div class="wrap-input wrap-input-reg input-width" data-answer="">
                            <input id="father-name" type="text" name="father_name" placeholder="Ваше отчество" class="input-auth input-reg" value="{{ old('father_name') }}" autocomplete="father-name" />
                        </div>
                    </div>
                    <div class="wrap-input wrap-input-reg input-width emailErrorReg" data-answer="">
                        <input id="email-reg" type="email" name="email" placeholder="Ваш email" value="{{ old('email') }}" class="input-auth input-reg" autocomplete="email" />
                    </div>
                    <div class="wrap-input wrap-input-reg input-width" data-answer="">
                        <input id="phone" type="text" name="phone" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" placeholder="Ваш номер телефона БЕЗ 8 или +7" class="input-auth input-reg" value="{{ old('phone') }}" autocomplete="phone" />
                    </div>
                    <div class="wrap-input wrap-input-reg input-width passwordErrorReg" data-answer="">
                        <input id="password-reg" type="password" name="password" placeholder="Пароль" class="input-auth input-reg"  />
                    </div>
                    <div class="wrap-input wrap-input-reg input-width passwordErrorReg" data-answer="">
                        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Подтвердите пароль" class="input-auth input-reg" />
                    </div>
                    <button class="button-auth accept btn-reg" type="submit" name="submit-auth">Регистрация</button>
                </form>
                <ul class="form-list">
                    <li class="form-input">
                        <article class="form-item-link auth-slide">Уже зарегестрированы?</article>
                    </li>
                    <li class="form-input">
                        <article class="form-item-link recovery-slide">Восстановление пароля</article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="block-recovery">
            <article class="auth-cross">
                <img class="img-cross" src="{{asset('/img/icon/cross.png')}}" alt="Cross" />
            </article>
            <div class="block-auth-head">
                <img class="block-auth-logo" src="{{asset('/img/logo/logo.svg')}}" alt="Логотип" />
            </div>

            <div class="wrap-auth-item">
                <h2 class="block-auth-h1">Восстановление пароля</h2>
                <form class="form-recovery" method="POST" action="{{ route('recovery.email') }}">
                    @csrf
                    <div class="wrap-input wrap-input-auth" data-answer="">
                        <input id="email-auth" type="email" name="email" placeholder="Введите свой email" value="{{ old('email') }}" class="input-auth"  autocomplete="email" autofocus />
                    </div>
                    <button class="button-auth accept" type="submit" name="submit-auth">Восстановить пароль</button>
                </form>
                <ul class="form-list">
                    <li class="form-input">
                        <article class="form-item-link auth-slide">Вход в личный кабинет</article>
                    </li>
                    <li class="form-input">
                        <article class="form-item-link registration-slide">Регистрация</article>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</section>


