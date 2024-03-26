<section class="modal-block @if (session('success'))modal-block-open @endif">
    <div class="wap-img-logo-modal">
        <img class="img-logo-modal" src="{{asset('/img/logo/logo.svg')}}" alt="MDR">
    </div>
    <article class="modal-content">{{ session('success') }}</article>
    <ul class="modal-list js-link-2">
        <li class="modal-item">
            <a class="modal-link mdr-button accept" href="{{route('private')}}">Перейти в личный кабинет</a>
        </li>
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close">Остаться на странице</div>
        </li>
    </ul>
    <ul class="modal-list close js-link-1 @if (session('success'))open-box @endif">
        <li class="modal-item">
            <div class="modal-link mdr-button stop js-close js-reload">Отлично!</div>
        </li>
    </ul>
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editCategory')
    <ul class="modal-list js-link-3">
        <li class="modal-item">
            <form class="itemAdminDelete delete-form-data" data-success="Категория успешно удалена"  action="{{ route('destroyCategory', $category['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить категорию">
            </form>
        </li>
        <li class="modal-item">
            <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
        </li>
    </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editSubCategory')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Подкатегория успешно удалена"  action="{{ route('destroySubCategory', $subCategory['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить подкатегорию">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editColor')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Цвет успешно удален"  action="{{ route('destroyColor', $color['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить цвет">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editCollection')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Коллекция успешно удалена"  action="{{ route('destroyCollection', $item_collection['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить Коллекцию">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif

    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editProduct')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Товар успешно удален"  action="{{ route('destroyProduct', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить Товар">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editModulCompilation')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Товар успешно удален"  action="{{ route('destroyModulCompilation', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить Товар">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'editUser')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-success="Пользователь успешно удален"  action="{{ route('destroyUser', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить пользователя">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'profile')
        <ul class="modal-list js-link-3">
            <li class="modal-item">
                <form class="itemAdminDelete delete-form-data" data-acc="delete-accaunt" data-success="Аккаунт удален :( Нам жаль, что вы уходите."  action="{{ route('destroyProfile') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="width-modal-form mdr-button stop modal-link" value="Удалить аккаунт">
                </form>
            </li>
            <li class="modal-item">
                <div class="modal-link mdr-button neutral js-close">Не буду удалять</div>
            </li>
        </ul>
    @endif
</section>
