<section class="main-block" id="catalog">
    <div class="wrap-img-background">
        <div class="wrap-index-img-box">
            <img class="index-img-box" src="{{asset('/img/static/catalog/hall.jpg')}}" alt="Мебель в Рязани">
        </div>
        <div class="wrap-white-bg">
            <div class="wrap-blue-bg main-min-aside">

                <aside class="index-aside">
                    <article class="article-catalog">
                        Каталог
                    </article>
                </aside>

                <div class="content-main-block">
                    <ul class="main-block-list block-4fr box-align-right">
                        @foreach($categories as $category)
                        <li class="main-block-item">
                            <a class="main-block-link" href="{{route('catalogSubcategories', $category->slug_category)}}">
                                <img class="main-block-item-img" src="{{asset($category->link)}}" alt="Мебель в Рязани. {{$category->category}}">
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

<section class="block-info">
    <div class="wrap-bg-info">
        <img class="block-info-img" src="{{asset('/img/static/info/1.jpg')}}" alt="Мебель в Рязани">
    </div>
    <div class="filter-info">
        <ul class="block-info-list">
            <li class="block-info-item">
                <img class="block-info-img" src="{{asset('/img/static/info/1.jpg')}}" alt="Мебель в Рязани">
                <div class="filter">
                    <div class="wrap-block-info-logo">
                        <img class="block-info-logo" src="{{asset('/img/logo/logo.svg')}}" alt="My Decor Room">
                    </div>
                </div>
            </li>
            <li class="block-info-item">
                <div class="block-info-content">
                    <h3 class="block-info-h3">
                        Широкий выбор продукции
                    </h3>
                    <article class="block-info-article">
                        Ни для кого не секрет, что у каждого человека свои вкусовые предпочтения.
                    </article>
                    <article class="block-info-article">
                        Мы учли этот момент, и предлагаем мебель разных стилей, но неизменно высокого качества.
                    </article>
                    <article class="block-info-article">
                        Вы без труда подберете вариант, который идеально впишется в интерьер Вашей квартиры или дома.
                    </article>
                </div>
            </li>
        </ul>
    </div>
</section>
