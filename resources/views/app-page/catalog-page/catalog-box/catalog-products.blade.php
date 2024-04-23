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
                    <a class="breadcrumbs-link" href="{{route('catalogCategory')}}">Каталог</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link"
                       href="{{route('catalogSubcategories', $category->slug_category)}}">{{$category->category}}</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    {{$subCategory->sub_category}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block ">
        <div class="wrap-img-background">
            <div class="wrap-index-img-box">
                <img class="index-img-box" src="{{asset($subCategory->link)}}" alt="Мебель в Рязани">
            </div>
            <div class="wrap-white-bg">
                <div class="wrap-blue-bg-rv main-max-aside main-medium-aside">
                    @include('static.aside.catalog-aside')

                    <div class="catalog-main-block catalog-block">
                        <div class="wrap-head-page">
                            <h1 class="catalog-article-top">{{$article}}</h1>
                        </div>
                        @if(empty($products))
                            <div class="attention-block box-align-right">
                                В этой категории пока нет товаров=( Мы работаем над этим.
                            </div>
                        @else
                            <ul class="main-block-list block-3fr box-align-right js-reload-block">
                                @foreach($products as $product)
                                    <li class="main-block-page-item">
                                        <a class="main-block-page-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $product->slug_full_name])}}">
                                            <img class="main-block-item-img" src="{{$product->link}}"
                                                 alt="Модульные гостиные">
                                            <div class="filter-page">
                                                <div class="main-page-box-content">
                                                    <div class="wrap-content-page-block">
                                                        <div class="article-content-page-block">
                                                            <div class="wrap-article-page-block">
                                                                <article class="article-page-block">
                                                                    {{$product->full_name}}
                                                                </article>
                                                                <article class="article-page-block">
                                                                    Цвет: {{$product->color_korpus}}
                                                                    / {{$product->color_fasad}}
                                                                </article>
                                                                <article class="article-page-block">
                                                                    {{$product->price}} &#8381
                                                                </article>
                                                                @if($product->status === 'Продажа')
                                                                    <article class="article-page-block color-sale">
                                                                        Есть в наличии
                                                                    </article>
                                                                @else
                                                                    <article class="article-page-block color-zakaz">
                                                                        Под заказ
                                                                    </article>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="button-content-page-block">
                                                            <div class="button-heart"><i
                                                                    class="fa fa-heart-o fa-2x fa-heart-p "
                                                                    aria-hidden="true"></i></div>
                                                            @if($user !== null)
                                                            @if($product->cart === $user->id)
                                                            <form class="button-page js-name-product in-cart" data-form="catalog-product" method="POST" data-add="{{route('addCart')}}" data-delete="{{route('destroyCart', $product->id)}}" action="{{route('destroyCart', $product->id)}}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <i class="fa fa-shopping-cart fa-1x fa-cart"
                                                                   aria-hidden="true"></i>
                                                                <article class="article-page-cart button-catalog" data-product="{{$product->slug_full_name}}">В корзине</article>
                                                            </form>
                                                            @else
                                                                <form class="button-page js-name-product" data-form="catalog-product" method="POST" data-add="{{route('addCart')}}" data-delete="{{route('destroyCart', $product->id)}}" action="{{route('addCart')}}">
                                                                    @csrf
                                                                    <i class="fa fa-shopping-cart fa-1x fa-cart"
                                                                       aria-hidden="true"></i>
                                                                    <article class="article-page-cart button-catalog" data-product="{{$product->slug_full_name}}">Добавить</article>
                                                                </form>
                                                            @endif
                                                            @else
                                                                <form class="button-page js-name-product" method="POST" data-delete="{{route('addCart')}}"  action="{{route('addCart')}}">
                                                                    @csrf
                                                                    <i class="fa fa-shopping-cart fa-1x fa-cart"
                                                                       aria-hidden="true"></i>
                                                                    <article class="article-page-cart button-catalog" data-product="{{$product->slug_full_name}}">Добавить</article>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                @endif
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
