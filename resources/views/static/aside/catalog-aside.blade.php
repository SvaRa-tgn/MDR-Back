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
            @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'catalogCategory')
                Каталог
            @else
                {{$article}}
            @endif
        </h1>
    </div>
</aside>
