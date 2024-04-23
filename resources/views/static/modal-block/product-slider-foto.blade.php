@if(isset($images))
<section class="product-slider-foto">
    <article class="product-cross">
        <img class="img-cross" src="{{asset('/img/icon/cross.png')}}" alt="Cross" />
    </article>
    <div class="wrap-product-slider-foto">

        <div class="arrow-box">
            @if($images->count() > 1)
            <i class="fa fa-arrow-circle-left fa-5x" aria-hidden="true"></i>
            @endif
        </div>

        <ul class="product-slider-foto-list">
            @foreach($images as $image)
            @if($image->status === 'top')
            <li class="product-slider-foto-item">
                <img class="main-block-item-img" src="{{$image->link}}" alt="{{$product->category}} купить в Рязани">
            </li>
            @else
            <li class="product-slider-foto-item">
                <img class="main-block-item-img" src="{{$image->link}}" alt="{{$product->category}} купить в Рязани">
            </li>
            @endif
            @endforeach
        </ul>

        <div class="arrow-box">
            @if($images->count() > 1)
            <i class="fa fa-arrow-circle-right fa-5x" aria-hidden="true"></i>
            @endif
        </div>

    </div>
</section>
@endif
