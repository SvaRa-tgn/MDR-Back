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
                    Сброс пароля
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
        <aside class="aside aside-nav">
            <div class="wrap-aside-nav wrap-aside-box-nav bg">
                <div class="aside-block">
                    <div class="aside-logo">
                        <img class="aside-logo-img" src="{{asset('/img/logo/logo.svg')}}" alt="Мебель в Рязани. My Decor Room">
                    </div>
                    <a class="link-aside-nav wrap-aside-link-h2" href="{{route('catalogCategory')}}"><h2 class="aside-h2">Каталог</h2></a>

                    <ul class="aside-nav-list">
                        @foreach($categories as $category)
                            <li class="aside-nav-item">
                                <div class="menu-link aside-nav-item-h2">{{$category->category}}</div>

                                <ul class="aside-nav-list-sub">
                                    @foreach($subCategories as $subCategory)
                                        @if($category->id === $subCategory->category_id)
                                            <li class="aside-nav-item-sub">
                                                <a class="link-aside-nav" href="{{route('catalogProducts', ['slugCategory' => $category->slug_category, 'slugSubCategory' => $subCategory->slug_sub_category])}}">{{$subCategory->sub_category}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="wrap-aside-h1 wrap-a-left">
                <h1 class="aside-h1 color">
                    Сброс пароля
                </h1>
            </div>
        </aside>
        <section class="content-main-block catalog-block">
            <div class="wrap-head-page">
                <h1 class="catalog-article-top">Сброс пароля</h1>
            </div>

            <div class="email-page">

                <form class="update-profile-data change-form" method="POST" action="{{ route('newPassword') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->token }}">

                    <article class="name-admin-block" data-success="Пароль обновлен">
                        Новый пароль:
                    </article>
                    <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email ?? old('email') }}" required autocomplete="email" autofocus>
                    <div class="wrap-input passwordError center" data-answer="Вы не ввели новый пароль">
                        <label class="form-label private-relevant-item">
                            Введите новый пароль
                        </label>
                        <input class="admin-select profile-input" type="password" id="password" name="password"/>
                    </div>
                    <div class="wrap-input passwordError center" data-answer="Вы не ввели новый пароль">
                        <label class="form-label private-relevant-item">
                            Подтверждение нового пароля
                        </label>
                        <input class="admin-select profile-input" type="password" id="profile_password_confirmation" name="password_confirmation" />
                    </div>

                    <div class="wrap-button" data-search="Изменяем пароль">
                        <button class="button-auth accept js-up-category" type="submit" name="submit-auth">Сохранить</button>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection
