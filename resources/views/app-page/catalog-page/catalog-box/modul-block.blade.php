@if($moduls->isNotEmpty())
    <div class="wrap-modul-block">
        <section class="modul-block modul-block-padding">
            <div class="wrap-head-page">
                <h1 class="catalog-article-top modul-top">Модули в {{$product->small_name}}</h1>
            </div>

            <ul class="modul-block-list">
                @foreach($moduls as $modul)
                    <li class="main-block-item">
                        <a class="main-block-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $modul->slug_full_name])}}">
                            <img class="main-block-item-img" src="{{$modul->link}}" alt="{{$product->category}} купить в Рязани">
                            <div class="filter-main" data-link="Просмотр">
                                <div class="modul-block-info">
                                    <div class="modul-block-info-top">
                                        <div class="wrap-block-content">
                                            <article class="modul-block-name">
                                                {{$modul->full_name}}
                                            </article>
                                            <article class="modul-block-collection">
                                                {{$modul->price}} &#8381
                                            </article>
                                        </div>
                                    </div>
                                    <div class="modul-block-info-bottom">
                                        Ш х В х Г : {{$modul->width}} мм. {{$modul->height}} мм. {{$modul->deep}} мм.
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section class="modul-block modul-block-padding">
            <div class="wrap-head-page">
                <h1 class="catalog-article-top modul-top">Все модули коллекции "{{$product->collection}}"</h1>
            </div>

            <ul class="modul-block-list">
                @foreach($allModuls as $modul)
                    @if($modul->color_korpus_id === $product->color_korpus_id AND $modul->color_fasad_id === $product->color_fasad_id)
                        <li class="main-block-item">
                            <a class="main-block-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $modul->slug_full_name])}}">
                                <img class="main-block-item-img" src="{{$modul->link}}" alt="{{$product->category}} купить в Рязани">
                                <div class="filter-main" data-link="Просмотр">
                                    <div class="modul-block-info">
                                        <div class="modul-block-info-top">
                                            <div class="wrap-block-content">
                                                <article class="modul-block-name">
                                                    {{$modul->small_name}}
                                                </article>
                                                <article class="modul-block-collection">
                                                    {{$modul->price}} &#8381
                                                </article>
                                            </div>
                                        </div>
                                        <div class="modul-block-info-bottom">
                                            Ш х В х Г : {{$modul->width}} мм. {{$modul->height}} мм. {{$modul->deep}} мм.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endif
                @endforeach
                @foreach($allModuls as $modul)
                    @if($modul->color_korpus_id !== $product->color_korpus_id AND $modul->color_fasad_id !== $product->color_fasad_id)
                        <li class="main-block-item">
                            <a class="main-block-link" href="{{route('productPage', ['slugCategory' => $category->slug_category,
                                                                                'slugSubCategory' => $subCategory->slug_sub_category, 'slugFullName' => $modul->slug_full_name])}}">
                                <img class="img-product-block-item" src="{{$modul->link}}" alt="{{$product->category}} купить в Рязани">
                                <div class="filter-main" data-link="Просмотр">
                                    <div class="modul-block-info">
                                        <div class="modul-block-info-top">
                                            <div class="wrap-block-content">
                                                <article class="modul-block-name">
                                                    {{$modul->full_name}}
                                                </article>
                                                <article class="modul-block-collection">
                                                    {{$modul->price}} &#8381
                                                </article>
                                            </div>
                                        </div>
                                        <div class="modul-block-info-bottom">
                                            Ш х В х Г : {{$modul->width}} мм. {{$modul->height}} мм. {{$modul->deep}} мм.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </section>
    </div>

@endif
