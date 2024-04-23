@extends('/app-page/catalog-page/catalog')
@section('catalog')
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
                    Каталог
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block">
        <div class="wrap-img-background">
            <div class="wrap-index-img-box">
                <img class="index-img-box" src="{{asset('/img/static/catalog/hall.jpg')}}" alt="Мебель в Рязани">
            </div>
            <div class="wrap-white-bg">
                <div class="wrap-blue-bg-rv main-max-aside main-medium-aside">
                    @include('static.aside.catalog-aside')

                    <div class="catalog-main-block catalog-block">
                        <div class="wrap-head-page">
                            <h1 class="catalog-article-top">Каталог</h1>
                        </div>
                        <ul class="main-block-list block-3fr-alt box-align-right">
                            @foreach($categories as $category)
                                <li class="main-block-item">
                                    <a class="main-block-link"
                                       href="{{route('catalogSubcategories', $category->slug_category)}}">
                                        <img class="main-block-item-img" src="{{$category->link}}"
                                             alt="{{$category->category}} купить в Рязани. My Decor Room">
                                        <div class="filter-main" data-link="Посмотреть">
                                            <div class="main-block-box-content position-for-catalog">
                                                <div class="main-block-info">
                                                    <article class="main-block-article">
                                                        {{$category->category}}
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
