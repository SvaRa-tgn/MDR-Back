<?php

namespace App\Http\Controllers;

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
use App\Http\Controllers\Page\AdminPage\ModulCollection\CreateModulCollectionController;
use App\Http\Controllers\Page\AdminPage\ModulCollection\DestroyModulCollectionController;
use App\Http\Controllers\Page\AdminPage\ModulCollection\EditModulCollectionController;
use App\Http\Controllers\Page\AdminPage\ModulCollection\ModulCollectionController;
use App\Http\Controllers\Page\AdminPage\ModulCollection\UpdateModulCollectionController;
use App\Http\Controllers\Page\AdminPage\Product\AddImageController;
use App\Http\Controllers\Page\AdminPage\Product\AllProductsController;
use App\Http\Controllers\Page\AdminPage\Product\CreateProductController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyImageController;
use App\Http\Controllers\Page\AdminPage\Product\DestroyProductController;
use App\Http\Controllers\Page\AdminPage\Product\EditProductController;
use App\Http\Controllers\Page\AdminPage\Product\ProductController;
use App\Http\Controllers\Page\AdminPage\Product\SampleProductController;
use App\Http\Controllers\Page\AdminPage\Product\SampleSubCategoriesController;
use App\Http\Controllers\Page\AdminPage\Product\SearchProductController;
use App\Http\Controllers\Page\AdminPage\Product\SearchSetupProductController;
use App\Http\Controllers\Page\AdminPage\Product\SetupProductsController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateDataController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateImageController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateProductController;
use App\Http\Controllers\Page\AdminPage\Product\UpdateStatusController;
use App\Http\Controllers\Page\AdminPage\ReadyCollection\CreateReadyCollectionController;
use App\Http\Controllers\Page\AdminPage\ReadyCollection\DestroyReadyCollectionController;
use App\Http\Controllers\Page\AdminPage\ReadyCollection\EditReadyCollectionController;
use App\Http\Controllers\Page\AdminPage\ReadyCollection\ReadyCollectionController;
use App\Http\Controllers\Page\AdminPage\ReadyCollection\UpdateReadyCollectionController;
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
use App\Http\Controllers\Page\InfoPage\CookiesController;
use App\Http\Controllers\Page\InfoPage\HowDesignOrderController;
use App\Http\Controllers\Page\InfoPage\InfoMainController;
use App\Http\Controllers\Page\InfoPage\InfoUserController;
use App\Http\Controllers\Page\InfoPage\ObmenVozvratController;
use App\Http\Controllers\Page\InfoPage\PersonalDataController;
use App\Http\Controllers\Page\InfoPage\PublicOffertaController;
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
Route::get('/', [Page\indexPage\IndexController::class, 'index'])->name('/.index');

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
        Route::get('{slug_category}.mdr', [EditCategoryController::class, 'editCategory'])->name('editCategory');
        Route::put('update/{id}', [UpdateCategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::delete('destroy/{id}', [DestroyCategoryController::class, 'destroyCategory'])->name('destroyCategory');
    });

    //Подкатегории товара
    Route::prefix('sub-category')->group(function(){
        Route::get('mdr', [SubCategoryController::class, 'subCategory'])->name('subCategory');
        Route::post('create', [CreateSubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
        Route::get('{slug_sub_category}.mdr', [EditSubCategoryController::class, 'editSubCategory'])->name('editSubCategory');
        Route::put('update/{id}', [UpdateSubCategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
        Route::delete('destroy/{id}', [DestroySubCategoryController::class, 'destroySubCategory'])->name('destroySubCategory');
    });

    //Модульные коллекции
    Route::prefix('modul-collection')->group(function(){
        Route::get('mdr', [ModulCollectionController::class, 'modulCollection'])->name('modulCollection');
        Route::post('create', [CreateModulCollectionController::class, 'createModulCollection'])->name('createModulCollection');
        Route::get('{slug_modul_collection}.mdr', [EditModulCollectionController::class, 'editModulCollection'])->name('editModulCollection');
        Route::put('update/{id}', [UpdateModulCollectionController::class, 'updateModulCollection'])->name('updateModulCollection');
        Route::delete('destroy/{id}.mdr', [DestroyModulCollectionController::class, 'destroyModulCollection'])->name('destroyModulCollection');
    });

    //Готовые коллекции
    Route::prefix('ready-collection')->group(function(){
        Route::get('mdr', [ReadyCollectionController::class, 'readyCollection'])->name('readyCollection');
        Route::post('create', [CreateReadyCollectionController::class, 'createReadyCollection'])->name('createReadyCollection');
        Route::get('{slug_ready_collection}.mdr', [EditReadyCollectionController::class, 'editReadyCollection'])->name('editReadyCollection');
        Route::put('update/{id}', [UpdateReadyCollectionController::class, 'updateReadyCollection'])->name('updateReadyCollection');
        Route::delete('destroy/{id}', [DestroyReadyCollectionController::class, 'destroyReadyCollection'])->name('destroyReadyCollection');
    });

    //Цвет товара
    Route::prefix('color')->group(function(){
        Route::get('mdr', [ColorController::class, 'color'])->name('color');
        Route::post('create', [CreateColorController::class, 'createColor'])->name('createColor');
        Route::get('edit-color/{slug_color}.mdr', [EditColorController::class, 'editColor'])->name('editColor');
        Route::put('update/{id}', [UpdateColorController::class, 'updateColor'])->name('updateColor');
        Route::delete('destroy/{id}', [DestroyColorController::class, 'destroyColor'])->name('destroyColor');
    });

    //Товар
    Route::prefix('product')->group(function(){
        Route::get('/mdr', [SetupProductsController::class, 'product'])->name('product');
        Route::get('/setup/{page}.mdr', [AllProductsController::class, 'productsClass'])->name('productAll');
        Route::get('/create-product.mdr', [ProductController::class, 'productCreate'])->name('productCreate');
        Route::get('/sample-sub-catagory/{id}.mdr', [SampleSubCategoriesController::class, 'sample'])->name('sample');
        Route::post('/create-product', [CreateProductController::class, 'createProduct'])->name('createProduct');
        Route::get('/edit-product.mdr', [EditProductController::class, 'editProduct'])->name('editProduct');
        Route::post('/search-product.mdr', [SearchProductController::class, 'searchProduct'])->name('searchProduct');
        Route::post('/search-product/{page}.mdr', [SearchSetupProductController::class, 'searchSetupProduct'])->name('searchSetupProduct');
        Route::post('/sample-product', [SampleProductController::class, 'sampleProducts'])->name('sampleProducts');
        Route::get('/update/{slug_full_name}.mdr', [UpdateProductController::class, 'updateProduct'])->name('updateProduct');
        Route::put('/update-status/{id}', [UpdateStatusController::class, 'updateStatus'])->name('updateStatus');
        Route::post('/add-image/{id}', [AddImageController::class, 'addImage'])->name('addImage');
        Route::put('/update-image/{id}', [UpdateImageController::class, 'updateImage'])->name('updateImage');
        Route::delete('/delete-image/{id}', [DestroyImageController::class, 'destroyImage'])->name('destroyImage');
        Route::put('/update-data/{id}', [UpdateDataController::class, 'updateData'])->name('updateData');
        Route::delete('/delete-product/{id}', [DestroyProductController::class, 'destroyProduct'])->name('destroyProduct');
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
});

//Страница Личный кабинет
Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Page\ProfilePage\Profile'], function(){
    Route::get('profile/private.mdr', 'IndexController@index')->name('profile.index');
    Route::get('profile/private/{familia}_{name}_{father}.mdr', 'UserController@show')->name('profile.user');
    Route::put('profile/private/update.mdr', 'UpdateUserController@updateUser')->name('profileUser.update');
    Route::put('profile/private/update-password.mdr', 'UpdatePasswordUserController@updatePasswordUser')->name('profilePasswordUser.update');
    Route::delete('profile/private/destroy/{user}.mdr', 'DestroyUserController@destroyUser')->name('profileUser.destroy');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
