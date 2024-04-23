<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    @if (isset($head))
    <title>{{$head['title']}}</title>
    <meta name="description" content="{{$head['description']}}">
    @else
    <title>MDR</title>
    <meta name="description" content="">
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="icon.png">

    <!--font-->
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css?v=').time()}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" >
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600&display=swap')}}" rel="stylesheet">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Forum&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap')}}" rel="stylesheet">

    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('/css/normalize.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/styles.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/modul.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/product.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/page.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/slider.min.css?v=').time()}}">
    @stack('styles')

    <script src="{{asset('/js/jquery.min.js?v=').time()}}" defer></script>
    <script src="{{asset('/js/slider.js?v=').time()}}" defer></script>
    <script src="{{asset('/js/main.js?v=').time()}}" defer></script>
    <script src="{{asset('/js/form.js?v=').time()}}" defer></script>
    <script src="{{asset('/js/profile.js?v=').time()}}" defer></script>

    <meta name="theme-color" content="#fafafa">
</head>
@if(Route::currentRouteName() === '/.index')
    @include('static.main-block.header')
@else
    @include('static.main-block.header-page')
@endif
