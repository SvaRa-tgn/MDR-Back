@extends('/index')
@push('styles')
    <link rel="stylesheet" href="{{asset('/css/private.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/checkout.min.css?v=').time()}}">
@endpush
@section('content')
    <main>
        @yield('app-page.profile-page.profile-box.profile-main')
    </main>
@endsection
