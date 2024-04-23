<div class="product-block-foto-single">
    <div class="wrap-product-block-foto">
        <ul class="product-block-foto-list">
            @foreach($images as $image)
                <li class="product-block-foto-item img-item-opacity">
                    <img class="main-block-item-img" src="{{$image->link}}"
                         alt="{{$product->category}} купить в Рязани">
                    <div class="filter">
                        <div class="wrap-filter-box">
                            <article class="filter-box">
                                Просмотр
                            </article>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="wrap-filter-info">
            <div class="filter-product">
                <div class="wrap-filter-fa">
                    <article class="filter-fa">
                        <div class="button-heart"><i class="fa fa-heart-o fa-3x fa-heart-p " aria-hidden="true"></i>
                        </div>
                    </article>
                </div>
                <div class="wrap-filter-fa">
                    <article class="filter-price">
                        {{$product->price}} &#8381
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
