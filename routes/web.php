<?php

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
Route::get('/', [App\Http\Controllers\Page\indexPage\IndexController::class, 'index'])->name('/.index');

//Страница Информация
Route::get('information.mdr', [App\Http\Controllers\Page\InfoPage\InfoMainController::class, 'index'])->name('information.index');
Route::get('information/information-dlya-pokupateley.mdr', [App\Http\Controllers\Page\InfoPage\InfoDlyaPokupateleyController::class, 'index'])->name('pokupateli.index');
Route::get('information/kak-oformit-zakaz.mdr', [App\Http\Controllers\Page\InfoPage\KakOformitZakazController::class, 'index'])->name('zakaz.index');
Route::get('information/obmen-i-vozvrat.mdr', [App\Http\Controllers\Page\InfoPage\ObmenVozvratController::class, 'index'])->name('obmen.index');
Route::get('information/personalnye-dannye.mdr', [App\Http\Controllers\Page\InfoPage\PersonalnyeDannyeController::class, 'index'])->name('personality.index');
Route::get('information/publichnaya-offerta.mdr', [App\Http\Controllers\Page\InfoPage\PublichnayaOffertaController::class, 'index'])->name('offerta.index');
Route::get('information/cookies.mdr', [App\Http\Controllers\Page\InfoPage\CookiesController::class, 'index'])->name('cookies.index');

//Страница Сервис
Route::get('service.mdr', [App\Http\Controllers\Page\ServicePage\ServiceMainController::class, 'index'])->name('service.index');
Route::get('service/oplata.mdr', [App\Http\Controllers\Page\ServicePage\OplataController::class, 'index'])->name('oplata.index');
Route::get('service/dostavka.mdr', [App\Http\Controllers\Page\ServicePage\DeliveryController::class, 'index'])->name('delivery.index');
Route::get('service/samovyvoz.mdr', [App\Http\Controllers\Page\ServicePage\SamovyvozController::class, 'index'])->name('samovyvoz.index');
Route::get('service/sborka.mdr', [App\Http\Controllers\Page\ServicePage\SborkaController::class, 'index'])->name('sborka.index');

//СТРАНИЦА АДМИНКИ
Route::prefix('admin')->group(function (){
    //Профиль Админки
    Route::namespace('App\Http\Controllers\Page\AdminPage\Head')->group(function(){
        Route::get('/adminka.mdr', 'HeadAdminController@index')->name('admin.index');
    });

    //Категории товара
    Route::namespace('App\Http\Controllers\Page\AdminPage\Category')->group(function(){
        Route::get('/category.mdr', 'ShowCategoryController@showCategory')->name('category.show');
        Route::post('/category/create', 'CreateCategoryController@createCategory')->name('createCategory.create');
        Route::get('/category/{slug_category}.mdr', 'EditCategoryController@editCategory')->name('editCategory.edit');
        Route::put('/category/update/{id}', 'UpdateCategoryController@updateCategory')->name('updateCategory.update');
        Route::delete('/category/destroy/{id}', 'DestroyCategoryController@destroyCategory')->name('destroyCategory.destroy');
    });

    //Подкатегории товара
    Route::namespace('App\Http\Controllers\Page\AdminPage\SubCategory')->group(function(){
        Route::get('/sub-category.mdr', 'ShowSubCategoryController@showSubCategory')->name('subCategory.show');
        Route::post('/sub-category/create', 'CreateSubCategoryController@createSubCategory')->name('createSubCategory.create');
        Route::get('/sub-category/{slug_sub_category}.mdr', 'EditSubCategoryController@editSubCategory')->name('editSubCategory.edit');
        Route::put('/sub-category/update/{id}', 'UpdateSubCategoryController@updateSubCategory')->name('updateSubCategory.update');
        Route::delete('/sub-category/destroy/{id}', 'DestroySubCategoryController@destroySubCategory')->name('destroySubCategory.destroy');
    });

    //Товар
    Route::namespace('App\Http\Controllers\Page\AdminPage\Product')->group(function(){
        Route::get('/create-product.mdr', 'ShowProductController@show')->name('createProduct.show');
        Route::post('/create-product/create', 'CreateProductController@createProduct')->name('createProduct.create');
        Route::get('/sample-sub-catagory/{id}.mdr', 'SampleController@sample')->name('sample.show');
        Route::post('/sample-product', 'SampleProductController@sample')->name('sampleProduct.show');
        Route::get('/edit-product.mdr', 'EditProductController@editShow')->name('editProduct.show');
        Route::get('/update-product/{slug_full_name}.mdr', 'UpdateProductController@updateProduct')->name('updateProduct.show');
        Route::put('/update-status/{id}', 'UpdateStatusController@updateStatus')->name('updateStatus.update');
        Route::post('/add-image/{id}', 'AddImageController@addImage')->name('addImage.add');
        Route::put('/update-image/{id}', 'UpdateImageController@updateImage')->name('updateImage.update');
        Route::delete('/delete-image/{id}', 'DestroyImageController@destroyImage')->name('destroyImage.destroy');
        Route::put('/update-data/{id}', 'UpdateDataController@updateData')->name('updateData.update');
        Route::delete('/delete-product/{id}', 'DestroyProductController@destroyProduct')->name('destroyProduct.destroy');
    });

    //Модульные коллекции
    Route::namespace('App\Http\Controllers\Page\AdminPage\ModulCollection')->group(function(){
        Route::get('/modul-collection.mdr', 'ShowModulCollectionController@showModulCollection')->name('modulCollection.show');
        Route::post('/modul-collection/create', 'CreateModulCollectionController@createModulCollection')->name('createModulCollection.create');
        Route::get('/modul-collection/{slug_modul_collection}.mdr', 'EditModulCollectionController@editModulCollection')->name('editModulCollection.edit');
        Route::put('/modul-collection/update/{id}', 'UpdateModulCollectionController@updateModulCollection')->name('updateModulCollection.update');
        Route::delete('/modul-collection/destroy/{id}.mdr', 'DestroyModulCollectionController@destroyModulCollection')->name('destroyModulCollection.destroy');
    });

    //Готовые коллекции
    Route::namespace('App\Http\Controllers\Page\AdminPage\ReadyCollection')->group(function(){
        Route::get('/ready-collection.mdr', 'ShowReadyCollectionController@showReadyCollection')->name('readyCollection.show');
        Route::post('/ready-collection/create', 'CreateReadyCollectionController@createReadyCollection')->name('createReadyCollection.create');
        Route::get('/ready-collection/{slug_ready_collection}.mdr', 'EditReadyCollectionController@editReadyCollection')->name('editReadyCollection.edit');
        Route::put('/ready-collection/update/{id}', 'UpdateReadyCollectionController@updateReadyCollection')->name('updateReadyCollection.update');
        Route::delete('/ready-collection/destroy/{id}', 'DestroyReadyCollectionController@destroyReadyCollection')->name('destroyReadyCollection.destroy');
    });

    //Цвет товара
    Route::namespace('App\Http\Controllers\Page\AdminPage\Color')->group(function(){
        Route::get('/color.mdr', 'ShowColorController@showColor')->name('color.show');
        Route::post('/color/create', 'CreateColorController@createColor')->name('createColor.create');
        Route::get('/color/edit-color/{slug_color}.mdr', 'EditColorController@editColor')->name('editColor.edit');
        Route::put('/color/update/{id}', 'UpdateColorController@updateColor')->name('updateColor.update');
        Route::delete('/color/destroy/{id}', 'DestroyColorController@destroyColor')->name('destroyColor.destroy');
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
