<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ChangeMailController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RecoveryRequestController;
use App\Http\Controllers\Auth\ResetFormPasswordController;
use App\Http\Controllers\Auth\VerificationNoticeController;
use App\Http\Controllers\Auth\VerificationSendController;
use App\Http\Controllers\Auth\VerificationVerifyController;
use App\Http\Controllers\Page\AdminPage\Category\CategoryController;
use App\Http\Controllers\Page\AdminPage\Category\CreateCategoryController;
use App\Http\Controllers\Page\AdminPage\Category\DestroyCategoryController;
use App\Http\Controllers\Page\AdminPage\Category\EditCategoryController;
use App\Http\Controllers\Page\AdminPage\Category\UpdateCategoryController;
use App\Http\Controllers\Page\AdminPage\Color\ColorController;
use App\Http\Controllers\Page\AdminPage\Color\CreateColorController;
use App\Http\Controllers\Page\AdminPage\Color\DestroyColorController;
use App\Http\Controllers\Page\AdminPage\Color\EditColorController;
use App\Http\Controllers\Page\AdminPage\Color\UpdateColorController;
use App\Http\Controllers\Page\AdminPage\Excel\ExcelController;
use App\Http\Controllers\Page\AdminPage\Excel\ExcelUploadController;
use App\Http\Controllers\Page\AdminPage\Head\HeadAdminController;
use App\Http\Controllers\Page\AdminPage\ItemCollection\CreateItemCollectionController;
use App\Http\Controllers\Page\AdminPage\ItemCollection\DestroyItemCollectionController;
use App\Http\Controllers\Page\AdminPage\ItemCollection\EditItemCollectionController;
use App\Http\Controllers\Page\AdminPage\ItemCollection\ItemCollectionController;
use App\Http\Controllers\Page\AdminPage\ItemCollection\UpdateItemCollectionController;
use App\Http\Controllers\Page\AdminPage\Product\AddImageController;
use App\Http\Controllers\Page\AdminPage\Product\AddModulController;
use App\Http\Controllers\Page\AdminPage\Product\AllProductsController;
use App\Http\Controllers\Page\AdminPage\Product\ChooseProductsController;
use App\Http\Controllers\Page\AdminPage\Product\CreateModulCompilationController;
use App\Http\Controllers\Page\AdminPage\Product\CreateProductController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyImageController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyModulCompilationController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyModulController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyProductController;
use App\Http\Controllers\Page\AdminPage\Product\EditModulCompilationController;
use App\Http\Controllers\Page\AdminPage\Product\EditProductController;
use App\Http\Controllers\Page\AdminPage\Product\ModulCompilationController;
use App\Http\Controllers\Page\AdminPage\Product\ProductController;
use App\Http\Controllers\Page\AdminPage\Product\SampleCollectionController;
use App\Http\Controllers\Page\AdminPage\Product\SampleModulController;
use App\Http\Controllers\Page\AdminPage\Product\SampleProductController;
use App\Http\Controllers\Page\AdminPage\Product\SampleSubCategoriesController;
use App\Http\Controllers\Page\AdminPage\Product\SampleSubCategoriesCreateController;
use App\Http\Controllers\Page\AdminPage\Product\SearchEditProductController;
use App\Http\Controllers\Page\AdminPage\Product\SearchProductController;
use App\Http\Controllers\Page\AdminPage\Product\SearchSetupProductController;
use App\Http\Controllers\Page\AdminPage\Product\SetupProductsController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateImageController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateProductController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateStatusController;
use App\Http\Controllers\Page\AdminPage\Sliders\AddImageSlidersController;
use App\Http\Controllers\Page\AdminPage\Sliders\DestroyImageSlidersController;
use App\Http\Controllers\Page\AdminPage\Sliders\SetupSliderController;
use App\Http\Controllers\Page\AdminPage\Sliders\SlidersController;
use App\Http\Controllers\Page\AdminPage\Sliders\UpdateImageSlidersController;
use App\Http\Controllers\Page\AdminPage\Sliders\UpdateStatusSlidersController;
use App\Http\Controllers\Page\AdminPage\SubCategory\CreateSubCategoryController;
use App\Http\Controllers\Page\AdminPage\SubCategory\DestroySubCategoryController;
use App\Http\Controllers\Page\AdminPage\SubCategory\EditSubCategoryController;
use App\Http\Controllers\Page\AdminPage\SubCategory\SubCategoryController;
use App\Http\Controllers\Page\AdminPage\SubCategory\UpdateSubCategoryController;
use App\Http\Controllers\Page\AdminPage\Users\DestroyUserController;
use App\Http\Controllers\Page\AdminPage\Users\EditUserController;
use App\Http\Controllers\Page\AdminPage\Users\SearchUserController;
use App\Http\Controllers\Page\AdminPage\Users\UpdatePasswordUserController;
use App\Http\Controllers\Page\AdminPage\Users\UpdateUserController;
use App\Http\Controllers\Page\AdminPage\Users\UpdateUserRoleController;
use App\Http\Controllers\Page\AdminPage\Users\UsersController;
use App\Http\Controllers\Page\CatalogPage\CatalogController;
use App\Http\Controllers\Page\CatalogPage\CatalogProductPageController;
use App\Http\Controllers\Page\CatalogPage\CatalogProductsController;
use App\Http\Controllers\Page\CatalogPage\CatalogSubcategoriesController;
use App\Http\Controllers\Page\indexPage\IndexController;
use App\Http\Controllers\Page\indexPage\IndexSearchController;
use App\Http\Controllers\Page\InfoPage\CookiesController;
use App\Http\Controllers\Page\InfoPage\HowDesignOrderController;
use App\Http\Controllers\Page\InfoPage\InfoMainController;
use App\Http\Controllers\Page\InfoPage\InfoUserController;
use App\Http\Controllers\Page\InfoPage\ObmenVozvratController;
use App\Http\Controllers\Page\InfoPage\PersonalDataController;
use App\Http\Controllers\Page\InfoPage\PublicOffertaController;
use App\Http\Controllers\Page\ProfilePage\Profile\DestroyProfileController;
use App\Http\Controllers\Page\ProfilePage\Profile\ProfileCheckController;
use App\Http\Controllers\Page\ProfilePage\Profile\ProfileController;
use App\Http\Controllers\Page\ProfilePage\Profile\UpdateProfileController;
use App\Http\Controllers\Page\ProfilePage\Profile\UpdateProfilePasswordController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\CheckoutOrderController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\CreateOrderController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\ProfileAddCartController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\ProfileCartController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\ProfileDestroyAllCartController;
use App\Http\Controllers\Page\ProfilePage\ProfileCart\ProfileDestroyCartController;
use App\Http\Controllers\Page\ProfilePage\ProfileFavorites\ProfileFavoritesController;
use App\Http\Controllers\Page\ProfilePage\ProfilePurchased\ProfilePurchasedController;
use App\Http\Controllers\Page\ServicePage\DeliveryController;
use App\Http\Controllers\Page\ServicePage\OplataController;
use App\Http\Controllers\Page\ServicePage\SamovyvozController;
use App\Http\Controllers\Page\ServicePage\SborkaController;
use App\Http\Controllers\Page\ServicePage\ServiceMainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/', [IndexController::class, 'index'])->name('/.index');
Route::post('search-product', [IndexSearchController::class, 'searchIndex'])->name('searchIndex');

//Страница Каталог
Route::prefix('catalog')->group(function(){
    Route::get('mdr', [CatalogController::class, 'catalogCategory'])->name('catalogCategory');
    Route::get('{slugCategory}.mdr', [CatalogSubcategoriesController::class, 'catalogSubcategories'])->name('catalogSubcategories');
    Route::get('{slugCategory}/{slugSubCategory}.mdr', [CatalogProductsController::class, 'catalogProducts'])->name('catalogProducts');
    Route::get('{slugCategory}/{slugSubCategory}/{slugFullName}.mdr', [CatalogProductPageController::class, 'productPage'])->name('productPage');
});

//Страница Информация
Route::prefix('information')->group(function(){
    Route::get('mdr', [InfoMainController::class, 'index'])->name('information.index');
    Route::get('information-dlya-pokupateley.mdr', [InfoUserController::class, 'infoUser'])->name('infoUser');
    Route::get('kak-oformit-zakaz.mdr', [HowDesignOrderController::class, 'howDesignOrder'])->name('howDesignOrder');
    Route::get('obmen-i-vozvrat.mdr', [ObmenVozvratController::class, 'obmenVozvrat'])->name('obmenVozvrat');
    Route::get('personalnye-dannye.mdr', [PersonalDataController::class, 'personalData'])->name('personalData');
    Route::get('publichnaya-offerta.mdr', [PublicOffertaController::class, 'offerta'])->name('offerta');
    Route::get('cookies.mdr', [CookiesController::class, 'cookies'])->name('cookies');
});

//Страница Сервис
Route::prefix('service')->group(function(){
    Route::get('mdr', [ServiceMainController::class, 'servicePage'])->name('servicePage');
    Route::get('oplata.mdr', [OplataController::class, 'oplata'])->name('oplata');
    Route::get('dostavka.mdr', [DeliveryController::class, 'delivery'])->name('delivery');
    Route::get('samovyvoz.mdr', [SamovyvozController::class, 'samovyvoz'])->name('samovyvoz');
    Route::get('sborka.mdr', [SborkaController::class, 'sborka'])->name('sborka');
});

//СТРАНИЦА АДМИНКИ
Route::prefix('admin')->middleware('admin')->group(function (){
    //Профиль Админки
    Route::get('/adminka.mdr', [HeadAdminController::class, 'adminka'])->name('adminka');

    //Категории товара
    Route::prefix('category')->group(function(){
        Route::get('mdr', [CategoryController::class, 'category'])->name('category');
        Route::post('create', [CreateCategoryController::class, 'createCategory'])->name('createCategory');
        Route::get('{slugCategory}.mdr', [EditCategoryController::class, 'editCategory'])->name('editCategory');
        Route::put('update/{id}', [UpdateCategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::delete('destroy/{id}', [DestroyCategoryController::class, 'destroyCategory'])->name('destroyCategory');
    });

    //Подкатегории товара
    Route::prefix('sub-category')->group(function(){
        Route::get('mdr', [SubCategoryController::class, 'subCategory'])->name('subCategory');
        Route::post('create', [CreateSubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
        Route::get('{slugSubCategory}.mdr', [EditSubCategoryController::class, 'editSubCategory'])->name('editSubCategory');
        Route::put('update/{id}', [UpdateSubCategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
        Route::delete('destroy/{id}', [DestroySubCategoryController::class, 'destroySubCategory'])->name('destroySubCategory');
    });

    //Коллекции
    Route::prefix('collection')->group(function(){
        Route::get('mdr', [ItemCollectionController::class, 'itemCollection'])->name('itemCollection');
        Route::post('create', [CreateItemCollectionController::class, 'createCollection'])->name('createCollection');
        Route::get('{slugCollection}.mdr', [EditItemCollectionController::class, 'editCollection'])->name('editCollection');
        Route::put('update/{id}', [UpdateItemCollectionController::class, 'updateCollection'])->name('updateCollection');
        Route::delete('destroy/{id}.mdr', [DestroyItemCollectionController::class, 'destroyCollection'])->name('destroyCollection');
    });

    //Цвет товара
    Route::prefix('color')->group(function(){
        Route::get('mdr', [ColorController::class, 'color'])->name('color');
        Route::post('create', [CreateColorController::class, 'createColor'])->name('createColor');
        Route::get('edit-color/{slugColor}.mdr', [EditColorController::class, 'editColor'])->name('editColor');
        Route::put('update/{id}', [UpdateColorController::class, 'updateColor'])->name('updateColor');
        Route::delete('destroy/{id}', [DestroyColorController::class, 'destroyColor'])->name('destroyColor');
    });

    //Управление Товарами. Модульные комплекты состоят из модулей(товаров). Товары отдельные единицы.
    Route::prefix('products')->group(function(){
        //Управление товарами
        Route::get('/mdr', [SetupProductsController::class, 'product'])->name('product');
        Route::get('/setup/{page}.mdr', [AllProductsController::class, 'productsClass'])->name('productAll');
        //Создание товаров меню страницы
        Route::get('/choose-products.mdr', [ChooseProductsController::class, 'chooseProducts'])->name('chooseProducts');
        //Создание и редактирование товаров и модулей
        Route::get('/create-product.mdr', [ProductController::class, 'productCreate'])->name('productCreate');
        Route::post('/create-product', [CreateProductController::class, 'createProduct'])->name('createProduct');
        Route::get('/edit/{slugFullName}.mdr', [EditProductController::class, 'editProduct'])->name('editProduct');
        Route::put('/update-data/{id}', [UpdateProductController::class, 'updateProduct'])->name('updateProduct');
        Route::delete('/delete-product/{id}', [DestroyProductController::class, 'destroyProduct'])->name('destroyProduct');
        //Создание и редактирование  Модульных комплектов
        Route::get('/create-modul-compilation.mdr', [ModulCompilationController::class, 'createCompilation'])->name('createCompilation');
        Route::post('/create-modul-compilation', [CreateModulCompilationController::class, 'addCompilation'])->name('addCompilation');
        Route::get('/edit-modul-compilation/{slugFullName}.mdr', [EditModulCompilationController::class, 'editModulCompilation'])->name('editModulCompilation');
        Route::delete('/delete-modul-compilation/{id}', [DestroyModulCompilationController::class, 'destroyModulCompilation'])->name('destroyModulCompilation');
        //Загрузка, Обновление (фото статуса)
        Route::put('/update-status/{id}', [UpdateStatusController::class, 'updateStatus'])->name('updateStatus');
        Route::post('/add-image/{id}', [AddImageController::class, 'addImage'])->name('addImage');
        Route::put('/update-image/{id}', [UpdateImageController::class, 'updateImage'])->name('updateImage');
        Route::put('/add-modul/{id}', [AddModulController::class, 'addModul'])->name('addModul');
        Route::delete('/delete-image/{id}', [DestroyImageController::class, 'destroyImage'])->name('destroyImage');
        Route::delete('/delete-modul/{id}-{productId}', [DestroyModulController::class, 'destroyModul'])->name('destroyModul');
        //JSON выборки для страниц
        Route::get('/sample-sub-catagory/{id}.mdr', [SampleSubCategoriesController::class, 'sampleSubCategories'])->name('sampleSubCategories');
        Route::get('/sample-sub-catagory-create/{id}_{type_item}.mdr', [SampleSubCategoriesCreateController::class, 'sampleSubCategoriesCreate'])->name('sampleSubCategoriesCreate');
        Route::get('/sample-collection/{type}.mdr', [SampleCollectionController::class, 'sampleCollection'])->name('sampleCollection');
        Route::post('/sample-product', [SampleProductController::class, 'sampleProducts'])->name('sampleProducts');
        Route::get('/sample-modul/{id}', [SampleModulController::class, 'sampleModul'])->name('sampleModul');
        //Поиск товара
        Route::get('/search-edit-products.mdr', [SearchEditProductController::class, 'searchEditProduct'])->name('searchEditProduct');
        Route::post('/search-product.mdr', [SearchProductController::class, 'searchProduct'])->name('searchProduct');
        Route::post('/search-product/{page}.mdr', [SearchSetupProductController::class, 'searchSetupProduct'])->name('searchSetupProduct');
    });

    //Excel
    Route::prefix('excel')->group(function(){
        Route::get('mdr', [ExcelController::class, 'excel'])->name('excel');
        Route::post('/excel-upload', [ExcelUploadController::class, 'excelUpload'])->name('excelUpload');
    });

    //User
    Route::prefix('users')->group(function(){
        Route::get('mdr', [UsersController::class, 'users'])->name('users');
        Route::post('/search-user.mdr', [SearchUserController::class, 'searchUser'])->name('searchUser');
        Route::get('/edit-user/id-{id}.mdr', [EditUserController::class, 'editUser'])->name('editUser');
        Route::put('/update-role/{id}', [UpdateUserRoleController::class, 'updateUserRole'])->name('updateUserRole');
        Route::put('/update-user/{id}', [UpdateUserController::class, 'updateUser'])->name('updateUser');
        Route::put('/update-user-password/{id}', [UpdatePasswordUserController::class, 'updateUserPassword'])->name('updateUserPassword');
        Route::delete('/destroy/{id}', [DestroyUserController::class, 'destroyUser'])->name('destroyUser');
    });

    //Sliders
    Route::prefix('sliders')->group(function(){
        Route::get('mdr', [SlidersController::class, 'sliders'])->name('sliders');
        Route::get('/setup-slider/{slider}.mdr', [SetupSliderController::class, 'setupSlider'])->name('setupSlider');
        Route::put('/update-status/{id}', [UpdateStatusSlidersController::class, 'updateStatus'])->name('updateStatusSlider');
        Route::put('/add-sliders', [AddImageSlidersController::class, 'addImage'])->name('addImageSlider');
        Route::put('/update-sliders/{id}', [UpdateImageSlidersController::class, 'updateImage'])->name('updateImageSlider');
        Route::delete('/destroy-sliders/{id}', [DestroyImageSlidersController::class, 'destroyImage'])->name('destroyImageSlider');
    });
});

//Страница Личный кабинет
Route::prefix('profile')->middleware(['auth', 'verified'])->group(function(){
    //Личные данные
    Route::prefix('private')->group(function(){
        Route::get('mdr', [ProfileCheckController::class, 'profile'])->name('private');
        Route::get('/{familia}_{name}_{father}.mdr', [ProfileController::class, 'profile'])->name('profile');
        Route::put('/update', [UpdateProfileController::class, 'updateProfile'])->name('updateProfile');
        Route::put('/update-password', [UpdateProfilePasswordController::class, 'updateProfilePassword'])->name('updateProfilePassword');
        Route::delete('/destroy/profile', [DestroyProfileController::class, 'destroyProfile'])->name('destroyProfile');
    });

    //Корзина пользователя (зарегестрированного)
    Route::prefix('cart')->group(function(){
        Route::get('mdr', [ProfileCartController::class, 'profileCartItems'])->name('profileCart');
        Route::post('add-cart', [ProfileAddCartController::class, 'addCart'])->name('addCart');
        Route::delete('destroy-cart/{id}', [ProfileDestroyCartController::class, 'destroyCart'])->name('destroyCart');
        Route::delete('destroy-cart', [ProfileDestroyAllCartController::class, 'destroyAllCart'])->name('destroyAllCart');

        Route::get('checkout-order', [CheckoutOrderController::class, 'checkoutOrder'])->name('checkoutOrder');
        Route::post('create-order.mdr', [CreateOrderController::class, 'createOrder'])->name('createOrder');
    });

    //Избранное пользователя (зарегестрированного)
    Route::prefix('favorites')->group(function(){
        Route::get('mdr', [ProfileFavoritesController::class, 'profileFavoritesItems'])->name('profileFavorites');
    });

    //Купленные товары (зарегестрированного)
    Route::prefix('purchased')->group(function(){
        Route::get('mdr', [ProfilePurchasedController::class, 'profilePurchasedItems'])->name('profilePurchased');
    });
});

Auth::routes(['verify' => true]);
//Подтверждение Email
Route::get('/email/verify', [VerificationNoticeController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationVerifyController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::put('/email/change', [ChangeMailController::class, 'change'])->middleware('auth')->name('change.mail');
Route::post('/email/verification-notification', [VerificationSendController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Восстановление пароля
Route::post('/forgot-password', [RecoveryRequestController::class, 'recovery'])->middleware('guest')->name('recovery.email');
Route::get('/reset-password/{token}', [ResetFormPasswordController::class, 'resetForm'])->middleware('guest')->name('passwordReset');
Route::post('/new-password', [NewPasswordController::class, 'newPassword'])->middleware('guest')->name('newPassword');

Route::get('/home', [HomeController::class, 'index'])->name('home');
