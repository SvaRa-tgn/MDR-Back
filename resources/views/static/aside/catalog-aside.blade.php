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
                        @foreach($sub_categories as $sub_category)
                            @if($category->id === $sub_category->category_id)
                        <li class="aside-nav-item-sub">
                            <a class="link-aside-nav" href="/html/catalog/catalog-item.html">{{$sub_category->sub_category}}</a>
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
                {{$article->category}}
            @endif
        </h1>
    </div>
</aside>
