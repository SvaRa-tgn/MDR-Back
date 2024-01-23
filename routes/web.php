<?php

namespace App\Http\Controllers;

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
    Route::get('mdr', [Page\InfoPage\InfoMainController::class, 'index'])->name('information.index');
    Route::get('information-dlya-pokupateley.mdr', [Page\InfoPage\InfoUserController::class, 'infoUser'])->name('infoUser');
    Route::get('kak-oformit-zakaz.mdr', [Page\InfoPage\HowDesignOrderController::class, 'howDesignOrder'])->name('howDesignOrder');
    Route::get('obmen-i-vozvrat.mdr', [Page\InfoPage\ObmenVozvratController::class, 'obmenVozvrat'])->name('obmenVozvrat');
    Route::get('personalnye-dannye.mdr', [Page\InfoPage\PersonalDataController::class, 'personalData'])->name('personalData');
    Route::get('publichnaya-offerta.mdr', [Page\InfoPage\PublicOffertaController::class, 'offerta'])->name('offerta');
    Route::get('cookies.mdr', [Page\InfoPage\CookiesController::class, 'cookies'])->name('cookies');
});

//Страница Сервис
Route::prefix('service')->group(function(){
    Route::get('mdr', [Page\ServicePage\ServiceMainController::class, 'servicePage'])->name('servicePage');
    Route::get('oplata.mdr', [Page\ServicePage\OplataController::class, 'oplata'])->name('oplata');
    Route::get('dostavka.mdr', [Page\ServicePage\DeliveryController::class, 'delivery'])->name('delivery');
    Route::get('samovyvoz.mdr', [Page\ServicePage\SamovyvozController::class, 'samovyvoz'])->name('samovyvoz');
    Route::get('sborka.mdr', [Page\ServicePage\SborkaController::class, 'sborka'])->name('sborka');
});

//СТРАНИЦА АДМИНКИ
Route::prefix('admin')->middleware('admin')->group(function (){
    //Профиль Админки
    Route::get('/adminka.mdr', [Page\Adminpage\Head\HeadAdminController::class, 'adminka'])->name('adminka');

    //Категории товара
    Route::prefix('category')->group(function(){
        Route::get('mdr', [Page\Adminpage\Category\ShowCategoryController::class, 'category'])->name('category');
        Route::post('create', [Page\Adminpage\Category\CreateCategoryController::class, 'createCategory'])->name('createCategory');
        Route::get('{slug_category}.mdr', [Page\Adminpage\Category\EditCategoryController::class, 'editCategory'])->name('editCategory');
        Route::put('update/{id}', [Page\Adminpage\Category\UpdateCategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::delete('destroy/{id}', [Page\Adminpage\Category\DestroyCategoryController::class, 'destroyCategory'])->name('destroyCategory');
    });

    //Подкатегории товара
    Route::prefix('sub-category')->group(function(){
        Route::get('mdr', [Page\Adminpage\SubCategory\ShowSubCategoryController::class, 'subCategory'])->name('subCategory');
        Route::post('create', [Page\Adminpage\SubCategory\CreateSubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
        Route::get('{slug_sub_category}.mdr', [Page\Adminpage\SubCategory\EditSubCategoryController::class, 'editSubCategory'])->name('editSubCategory');
        Route::put('update/{id}', [Page\Adminpage\SubCategory\UpdateSubCategoryController::class, 'updateSubCategory'])->name('updateSubCategory');
        Route::delete('destroy/{id}', [Page\Adminpage\SubCategory\DestroySubCategoryController::class, 'destroySubCategory'])->name('destroySubCategory');
    });

    //Модульные коллекции
    Route::prefix('modul-collection')->group(function(){
        Route::get('mdr', [Page\Adminpage\ModulCollection\ShowModulCollectionController::class, 'modulCollection'])->name('modulCollection');
        Route::post('create', [Page\Adminpage\ModulCollection\CreateModulCollectionController::class, 'createModulCollection'])->name('createModulCollection');
        Route::get('{slug_modul_collection}.mdr', [Page\Adminpage\ModulCollection\EditModulCollectionController::class, 'editModulCollection'])->name('editModulCollection');
        Route::put('update/{id}', [Page\Adminpage\ModulCollection\UpdateModulCollectionController::class, 'updateModulCollection'])->name('updateModulCollection');
        Route::delete('destroy/{id}.mdr', [Page\Adminpage\ModulCollection\DestroyModulCollectionController::class, 'destroyModulCollection'])->name('destroyModulCollection');
    });

    //Готовые коллекции
    Route::prefix('ready-collection')->group(function(){
        Route::get('mdr', [Page\Adminpage\ReadyCollection\ShowReadyCollectionController::class, 'readyCollection'])->name('readyCollection');
        Route::post('create', [Page\Adminpage\ReadyCollection\CreateReadyCollectionController::class, 'createReadyCollection'])->name('createReadyCollection');
        Route::get('{slug_ready_collection}.mdr', [Page\Adminpage\ReadyCollection\EditReadyCollectionController::class, 'editReadyCollection'])->name('editReadyCollection');
        Route::put('update/{id}', [Page\Adminpage\ReadyCollection\UpdateReadyCollectionController::class, 'updateReadyCollection'])->name('updateReadyCollection');
        Route::delete('destroy/{id}', [Page\Adminpage\ReadyCollection\DestroyReadyCollectionController::class, 'destroyReadyCollection'])->name('destroyReadyCollection');
    });

    //Цвет товара
    Route::prefix('color')->group(function(){
        Route::get('mdr', [Page\Adminpage\Color\ShowColorController::class, 'color'])->name('color');
        Route::post('create', [Page\Adminpage\Color\CreateColorController::class, 'createColor'])->name('createColor');
        Route::get('edit-color/{slug_color}.mdr', [Page\Adminpage\Color\EditColorController::class, 'editColor'])->name('editColor');
        Route::put('update/{id}', [Page\Adminpage\Color\UpdateColorController::class, 'updateColor'])->name('updateColor');
        Route::delete('destroy/{id}', [Page\Adminpage\Color\DestroyColorController::class, 'destroyColor'])->name('destroyColor');
    });

    //Товар
    Route::prefix('product')->group(function(){
        Route::get('/create-product.mdr', [Page\Adminpage\Product\ShowProductController::class, 'product'])->name('product');
        Route::post('/create-product', [Page\Adminpage\Product\CreateProductController::class, 'createProduct'])->name('createProduct');
        Route::get('/sample-sub-catagory/{id}.mdr', [Page\Adminpage\Product\SampleController::class, 'sample'])->name('sample');
        Route::post('/sample-product', [Page\Adminpage\Product\SampleProductController::class, 'sampleProducts'])->name('sampleProducts');
        Route::get('/edit-product.mdr', [Page\Adminpage\Product\EditProductController::class, 'editProduct'])->name('editProduct');
        Route::post('/search-product.mdr', [Page\Adminpage\Product\SearchProductController::class, 'searchProduct'])->name('searchProduct');
        Route::get('/{slug_full_name}.mdr', [Page\Adminpage\Product\UpdateProductController::class, 'updateProduct'])->name('updateProduct');
        Route::put('/update-status/{id}', [Page\Adminpage\Product\UpdateStatusController::class, 'updateStatus'])->name('updateStatus');
        Route::post('/add-image/{id}', [Page\Adminpage\Product\AddImageController::class, 'addImage'])->name('addImage');
        Route::put('/update-image/{id}', [Page\Adminpage\Product\UpdateImageController::class, 'updateImage'])->name('updateImage');
        Route::delete('/delete-image/{id}', [Page\Adminpage\Product\DestroyImageController::class, 'destroyImage'])->name('destroyImage');
        Route::put('/update-data/{id}', [Page\Adminpage\Product\UpdateDataController::class, 'updateData'])->name('updateData');
        Route::delete('/delete-product/{id}', [Page\Adminpage\Product\DestroyProductController::class, 'destroyProduct'])->name('destroyProduct');
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
