<section class="wrap-block-recom">
    <div class="wrap-bg-info">
        <img class="block-info-img" src="http://localhost:8080/img/static/info/1.jpg" alt="Мебель в Рязани">
    </div>

    <div class="wrap-block-recom-box">
        <div class="block-recom-box">
            <div class="box-article-top">
                <h1 class="catalog-article-top">Рекомендуем</h1>
            </div>

            <ul class="block-5fr">
                @foreach($rProducts as $rProducts)
                    <li class="main-block-item">
                        <a class="main-block-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $rProducts->slug_full_name])}}">
                            <img class="main-block-item-img" src="{{$rProducts->link}}" alt="{{$rProducts->sub_category}} купить в Рязани">
                            <div class="filter-main" data-link="Просмотр">
                                <div class="main-block-box-content">
                                    <div class="main-block-info">
                                        <article class="main-block-article">
                                            {{$rProducts->small_name}}
                                        </article>
                                        <article class="main-block-price">
                                            {{$rProducts->price}}&#8381
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
</section>
