<section class="modal-block modal-admin @if (session('success'))modal-block-open @endif">
    <div class="wap-img-logo-modal">
        <img class="img-logo-modal" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
    </div>
    <article class="modal-content">{{ session('success') }}</article>
    <ul class="modal-list js-link-2">
        <li class="modal-item">
            <a class="modal-link mdr-button accept" href="{{route('profile.index')}}">Перейти в личный кабинет</a>
        </li>
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close">Остаться на странице</div>
        </li>
    </ul>
    <ul class="modal-list close js-link-1 @if (session('success'))open-box @endif">
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close js-reload">Закрыть</div>
        </li>
    </ul>
    <ul class="modal-list js-link-3">
        <li class="modal-item">
            <form class="itemAdminDelete" data-id="{{$category['id']}}"  action="{{ route('destroyCategory.destroy', $category['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить категорию">
            </form>
        </li>
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close">Остаться на странице</div>
        </li>
    </ul>
</section>
