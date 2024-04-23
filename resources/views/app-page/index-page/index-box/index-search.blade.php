<section class="search index-search start-search">
    <form class="form-search" data-form="search" method="POST" action="{{route('searchIndex')}}">
        @csrf
        <div>
            <input id="search" name="search" class="input-search" value=""/>
        </div>
        <div class="wrap-button-search">
            <button class="button-search" type="submit" name="submit_form">Найти</button>
        </div>
    </form>
    <ul class="form-search-list">
        @if(empty($products))
            <li class="form-search-item">
                <div class="form-search-link">
                    Ничего не найдено
                </div>
            </li>
        @else
            @foreach($products as $product)
                <li class="form-search-item">
                    <a class="form-search-link" >
                        {{$product['full_name']}}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</section>
