@include('static.main-block.head')
@include('static.modal-block.loader')
@include('static.modal-block.callback-block')
@include('static.modal-block.auth-block')
@include('static.modal-block.callback')
@include('static.modal-block.modal')
@include('static.modal-block.product-slider-foto')
<main>
    @yield('content')
</main>
@include('static.main-block.footer')

