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
                    <a class="breadcrumbs-link"
                       href="{{route('catalogProducts', ['slugCategory' => $category->slug_category, 'slugSubCategory' => $subCategory->slug_sub_category])}}">{{$subCategory->sub_category}}</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    {{$product['full_name']}}
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block ">
        <div class="wrap-img-background">
            <div class="wrap-index-img-box">
                <img class="index-img-box" src="{{asset($subCategory->link)}}" alt="{{$product->category}} купить в Рязани">
            </div>
            <div class="wrap-white-bg">
                <div class="wrap-blue-bg-rv main-max-aside main-medium-aside">
                    @include('static.aside.catalog-aside')

                    <div class="content-main-block catalog-block">
                        <div class="wrap-head-page">
                            <h1 class="catalog-article-top">{{$product->small_name}}</h1>
                        </div>
                        <div class="product-block">
                        @if($images->count() === 1)
                            @include('app-page.catalog-page.catalog-box.product-box.block-foto-single')
                        @else
                                @include('app-page.catalog-page.catalog-box.product-box.block-foto')
                        @endif
                            <div class="product-block-info">
                                <div class="wrap-product-price js-reload-block">
                                    @if($user !== null)
                                    @if($product->cart === $user->id)
                                    <form class="button-page js-name-product in-cart" method="POST" data-form="product" data-add="{{route('addCart')}}" data-delete="{{route('destroyCart', $product->id)}}" action="{{route('destroyCart', $product->id)}}">
                                       @csrf
                                       @method('DELETE')
                                        <article class="article-page-cart button-product" data-product="{{$product->slug_full_name}}">В корзине</article>
                                    </form>
                                    @else
                                    <form class="button-page js-name-product" method="POST" data-form="product" data-add="{{route('addCart')}}" data-delete="{{route('destroyCart', $product->id)}}" action="{{route('addCart')}}">
                                        @csrf
                                        <article class="article-page-cart button-product" data-product="{{$product->slug_full_name}}">Добавить в корзину</article>
                                    </form>
                                    @endif
                                    @else
                                    <form class="button-page js-name-product" method="POST" data-add="{{route('addCart')}}" data-delete="{{route('destroyCart', $product->id)}}" action="{{route('addCart')}}">
                                        @csrf
                                        <article class="article-page-cart button-product" data-product="{{$product->slug_full_name}}">Добавить в корзину</article>
                                    </form>
                                    @endif
                                    <ul class="product-char-list">
                                        <li class="char-price-item">
                                            Цена:
                                        </li>
                                        <li class="char-price-item prc" data-prc="11000">
                                            {{$product->price}} &#8381
                                        </li>
                                    </ul>

                                    <ul class="char-article-list char-article-padding">
                                        <li class="char-article-item">
                                            Артикул товара:
                                        </li>
                                        <li class="char-article-item">
                                            {{$product->article}}
                                        </li>
                                    </ul>
                                    <ul class="char-article-list">
                                        <li class="char-article-item char-status">
                                            Доступность:
                                        </li>
                                        @if($product->status === 'Продажа')
                                            <li class="char-article-item char-status color-sale-prod">
                                                Есть в наличии
                                            </li>
                                        @else
                                            <li class="char-article-item char-status color-zakaz-prod">
                                                Под заказ
                                            </li>
                                        @endif

                                    </ul>

                                </div>

                                @foreach($broColors as $broColor)
                                @if($broColor->id !== $product->id AND $broColor->width === $product->width AND $broColor->height === $product->height AND $broColor->deep === $product->deep AND $broColor->price === $product->price)
                                <div class="wrap-product-select">
                                    <article class="article-bro-item">
                                        Другие цвета:
                                    </article>
                                    <ul class="product-select-list">
                                        @foreach($broColors as $broColor)
                                        @if($broColor->id !== $product->id AND $broColor->width === $product->width AND $broColor->height === $product->height AND $broColor->deep === $product->deep AND $broColor->price === $product->price)
                                        <a class="product-select-item" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $broColor->slug_full_name])}}">
                                            <div class="wrap-product-color">
                                                <img class="product-color-img" src="{{$broColor->color_fasad}}" alt="{{$product->category}} купить в Рязани">
                                                <img class="product-color-img" src="{{$broColor->color_korpus}}" alt="{{$product->category}} купить в Рязани">
                                            </div>
                                        </a>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @endforeach

                                <div class="wrap-bro-item">
                                    <article class="article-bro-item">
                                        Похожие товары
                                    </article>
                                    <ul class="bro-item-list">
                                        @foreach($broProducts as $broProduct)
                                            @if($broProduct->id !== $product->id)
                                                <li class="bro-item-item">
                                                    <a class="bro-item-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $broProduct->slug_full_name])}}">
                                                        <img class="main-block-item-img" src="{{$broProduct->link}}" alt="Гостиные">
                                                        <div class="filter-prod">
                                                            {{$broProduct->small_name}}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>


                                <div class="wrap-product-char">
                                    <div class="product-info-h2">
                                        <article class="article-bro-item">
                                            Характеристики
                                        </article>
                                    </div>

                                    <ul class="product-char-list">
                                        <li class="product-char-item char-top">
                                            Цвет:
                                        </li>
                                        <li class="product-char-item wrap-box-char-color">
                                            <img class="product-color-img" src="{{$product->link_fasad}}" alt="Цвет" />
                                            <div class="filter">
                                                <div class="box-char-color">
                                                    <ul class="product-char-list">
                                                        <li class="box-char-color-item">
                                                            Фасад:
                                                        </li>
                                                        <li class="box-char-color-item char-item-right">
                                                            {{$product->color_fasad}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-char-item wrap-box-char-color char-color-margin">
                                            <img class="product-color-img" src="{{$product->link_korpus}}" alt="Цвет" />
                                            <div class="filter">
                                                <div class="box-char-color">
                                                    <ul class="product-char-list">
                                                        <li class="box-char-color-item">
                                                            Корпус:
                                                        </li>
                                                        <li class="box-char-color-item char-item-right">
                                                            {{$product->color_korpus}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-char-item char-top">
                                            Размеры:
                                        </li>
                                        <li class="product-char-item">
                                            Ширина:
                                        </li>
                                        <li class="product-char-item char-item-right">
                                            {{$product->width}} мм
                                        </li>
                                        <li class="product-char-item">
                                            Высота:
                                        </li>
                                        <li class="product-char-item char-item-right">
                                            {{$product->height}} мм
                                        </li>
                                        <li class="product-char-item item-info-margin">
                                            Глубина:
                                        </li>
                                        <li class="product-char-item char-item-right item-info-margin">
                                            {{$product->deep}} мм.
                                        </li>
                                        <li class="product-char-item char-top">
                                            Материал:
                                        </li>
                                        <li class="product-char-item">
                                            Корпус:
                                        </li>
                                        <li class="product-char-item char-item-right">
                                            {{$product->korpus}}
                                        </li>
                                        <li class="product-char-item item-info-margin">
                                            Фасад:
                                        </li>
                                        <li class="product-char-item char-item-right item-info-margin">
                                            {{$product->fasad}}
                                        </li>
                                        <li class="product-char-item char-top">
                                            Информация:
                                        </li>
                                        <li class="product-char-item">
                                            Гарантия:
                                        </li>
                                        <li class="product-char-item char-item-right">
                                            24 месяца
                                        </li>
                                        <li class="product-char-item char-padding">
                                            Производство:
                                        </li>
                                        <li class="product-char-item char-padding char-item-right">
                                            Россия
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="wrap-dop-info">
                                <div class="wrap-dop-info-box">
                                    <ul class="dop-link-list">
                                        <li class="dop-link-item">
                                            <a class="dop-link" href="{{route('samovyvoz')}}">Самовывоз</a>
                                        </li>
                                        <li class="dop-link-item">
                                            <a class="dop-link" href="{{route('delivery')}}">Доставка от 700 рублей</a>
                                        </li>
                                        <li class="dop-link-item">
                                            <a class="dop-link" href="{{route('sborka')}}">Сборка</a>
                                        </li>
                                    </ul>

                                    <ul class="dop-info-list">
                                        <li class="dop-info-item">
                                            <i class="fa fa-cubes fa-2x fa-product-color" aria-hidden="true"></i>
                                            <article class="dop-info-article">
                                                Товар с пометкой в названии - "модульный", явлется товарм составленным из модулей коллекции, цена такого товара складывается из стоимости каждого модуля. Вы можете сами выбрать понравившиеся модули. Для консультации свяжтесь с нашим менеджером.
                                            </article>
                                        </li>
                                        <li class="dop-info-item">
                                            <i class="fa fa-car fa-2x fa-product-color" aria-hidden="true"></i>
                                            <article class="dop-info-article">
                                                Вы можете самостоятельно забрать товар на нашем складе или в магазине. Просим вас, перед покупкой или оформлением товара, уточнять у менеджера наличие товара на складе и в магазине, а так же обговорить время у дату, когда вы заберет свой товар.
                                            </article>
                                        </li>
                                        <li class="dop-info-item">
                                            <i class="fa fa-gavel fa-2x fa-product-color" aria-hidden="true"></i>
                                            <article class="dop-info-article">
                                                Наша компания предоставляет услуги профессиональной сборки мебели. Свяжитесь с менеджером, чтобы узнать все детали и заказть услугу.
                                            </article>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="dop-contact-list">
                                    <li class="dop-contact-item">
                                        <a class="footer-data-link fa-phone-mdr-product" href="tel:+79209685108"><i class="fa fa-phone fa-2x" aria-hidden="true"><span class="fa-font-mdr">  +7 920 968-51-08</span></i> </a>
                                    </li>
                                    <li class="dop-contact-item">
                                        <i class="fa fa-envelope fa-2x fa-phone-mdr-product" aria-hidden="true"><span class="fa-font-mdr">  manager@mydecor-room.ru</span></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if($product->type === 'Комплект')
                        @include('app-page.catalog-page.catalog-box.modul-block')
                        @endif
                    </div>
                </div>
                @include('app-page.catalog-page.catalog-box.product-box.product-recomendation')
            </div>
        </div>
    </section>
@endsection
