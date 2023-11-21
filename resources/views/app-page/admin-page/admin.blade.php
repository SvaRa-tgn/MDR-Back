@extends('/index')
@push('styles')
    <link rel="stylesheet" href="{{asset('/css/private.min.css?v=').time()}}">
    <link rel="stylesheet" href="{{asset('/css/admin.min.css?v=').time()}}">
@endpush
@section('content')

        @yield('admin')

@endsection
