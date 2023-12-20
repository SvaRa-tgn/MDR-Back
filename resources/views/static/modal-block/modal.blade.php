<section class="modal-block @if (session('success'))modal-block-open @endif">
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
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editCategory.edit')
    <ul class="modal-list js-link-3">
        <li class="modal-item">
            <form class="itemAdminDelete" data-id="{{$category['id']}}"  action="{{ route('destroyCategory.destroy', $category['slug_category']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить категорию">
            </form>
        </li>
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close">Не буду удалять</div>
        </li>
    </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editSubCategory.edit')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete" data-id="{{$subCategory['id']}}"  action="{{ route('destroySubCategory.destroy', $subCategory['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить подкатегорию">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button stop js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editColor.edit')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete" data-id="{{$color['id']}}"  action="{{ route('destroyColor.destroy', $color['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить цвет">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button stop js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editModulCollection.edit')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete" data-id="{{$modul_collection['id']}}"  action="{{ route('destroyModulCollection.destroy', $modul_collection['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить Модульную коллекцию">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button stop js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editReadyCollection.edit')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete" data-id="{{$ready_collection['id']}}"  action="{{ route('destroyReadyCollection.destroy', $ready_collection['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить Готовую коллекцию">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button stop js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
</section>
