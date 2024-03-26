@extends('/index')
@section('content')
    @if(isset($slider) AND $slider->slider === 'flicker')
    @include('app-page.index-page.index-box.sliders.slider-flickers')
    @elseif(isset($slider) AND $slider->slider === 'move')
    @include('app-page.index-page.index-box.sliders.slider-move')
    @else
    @include('app-page.index-page.index-box.slider')
    @endif
    @include('app-page.index-page.index-box.index-catalog')
    @include('app-page.index-page.index-box.index-new')
    @include('app-page.index-page.index-box.index-recomendation')
    @include('app-page.index-page.index-box.index-idea')
    @include('app-page.index-page.index-box.index-pop')
    @include('app-page.index-page.index-box.index-subscrible')
@endsection

