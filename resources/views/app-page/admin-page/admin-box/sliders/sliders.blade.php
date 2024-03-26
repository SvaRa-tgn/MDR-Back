@extends('/app-page/admin-page/admin')
@section('admin')
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
                    <a class="breadcrumbs-link" href="{{route('adminka')}}">Профиль админки</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Настройка слайдеров
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="private-page-h1">Слайдеры</h1>
            </div>

            <div class="main-private-data-item">
                <ul class="admin-slider-list">
                    @foreach($sliders as $slider)
                    @if($slider->slider === 'flicker')
                    <li class="admin-slider-item">
                        <div class="slider-flicker">
                            <ul class="slider-flicker-list mini-slider">
                                @foreach($images as $image)
                                    @if($image['slider'] === 'flicker')
                                <li class="slider-flicker-item slider-opacity">
                                    <div class="wrap-block-item">
                                        <img class="img-slider-item" src="{{$image['link']}}" alt="Купить мебель в Рязани"/>
                                    </div>
                                </li>
                                    @endif
                                @endforeach
                            </ul>

                            <a class="filter-setup" href="{{route('setupSlider', $slider->slider)}}">
                                <div class="wrap-slider-content">

                                    <article class="name-slider">
                                        "{{$slider->name}}"
                                    </article>

                                    <article class="slider-status {{$slider->status}}">
                                        {{$slider->status_page}}
                                    </article>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endif

                    @if($slider->slider === 'move')
                    <li class="admin-slider-item">
                        <div class="slider-move">
                            <ul class="slider-move-list mini-slider">
                                @foreach($images as $image)
                                    @if($image['slider'] === 'move')
                                <li class="slider-move-item slider-opacity slider-position-{{$image['slider']}}">
                                    <div class="wrap-block-item">
                                        <img class="img-slider-item" src="{{$image['link']}}" />
                                    </div>
                                </li>
                                    @endif
                                @endforeach
                            </ul>

                            <a class="filter-setup" href="{{route('setupSlider', $slider->slider)}}">
                                <div class="wrap-slider-content">
                                    <article class="name-slider">
                                        "{{$slider->name}}"
                                    </article>
                                    <article class="slider-status {{$slider->status}}">
                                        {{$slider->status_page}}
                                    </article>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </section>
    </section>
@endsection
