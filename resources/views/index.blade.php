@include('static.main-block.head')
@include('static.modal-block.callback-block')
@include('static.modal-block.auth-block')
@include('static.modal-block.callback')
@include('static.modal-block.modal')
<main>
    @yield('content')
</main>
@include('static.main-block.footer')

