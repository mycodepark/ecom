<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');


        
        Route::group(['prefix'  =>   'profile'], function() {

            Route::get('/', 'Admin\ProfileController@index')->name('admin.profiles.index');
            Route::post('/update', 'Admin\ProfileController@update')->name('admin.profiles.update');
            Route::post('/avatar', 'Admin\ProfileController@avatarUpdate')->name('admin.profiles.avatarUpdate');
            Route::post('/store', 'Admin\ProfileController@store')->name('admin.profiles.store');
            Route::post('/changePassword','Admin\ProfileController@changePassword')->name('admin.profiles.changePassword');
            
        });



        Route::group(['prefix'  =>   'categories'], function() {

            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
            Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

        });

        Route::group(['prefix'  =>   'attributes'], function() {

            Route::get('/', 'Admin\AttributeController@index')->name('admin.attributes.index');
            Route::get('/create', 'Admin\AttributeController@create')->name('admin.attributes.create');
            Route::post('/store', 'Admin\AttributeController@store')->name('admin.attributes.store');
            Route::get('/{id}/edit', 'Admin\AttributeController@edit')->name('admin.attributes.edit');
            Route::post('/update', 'Admin\AttributeController@update')->name('admin.attributes.update');
            Route::get('/{id}/delete', 'Admin\AttributeController@delete')->name('admin.attributes.delete');

            Route::post('/get-values', 'Admin\AttributeValueController@getValues');
            Route::post('/add-values', 'Admin\AttributeValueController@addValues');
            Route::post('/update-values', 'Admin\AttributeValueController@updateValues');
            Route::post('/delete-values', 'Admin\AttributeValueController@deleteValues');
        });

        Route::group(['prefix'  =>   'brands'], function() {

            Route::get('/', 'Admin\BrandController@index')->name('admin.brands.index');
            Route::get('/create', 'Admin\BrandController@create')->name('admin.brands.create');
            Route::post('/store', 'Admin\BrandController@store')->name('admin.brands.store');
            Route::get('/{id}/edit', 'Admin\BrandController@edit')->name('admin.brands.edit');
            Route::post('/update', 'Admin\BrandController@update')->name('admin.brands.update');
            Route::get('/{id}/delete', 'Admin\BrandController@delete')->name('admin.brands.delete');

        });

        Route::group(['prefix' => 'products'], function () {

           Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
           Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
           Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
           Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('admin.products.edit');
           Route::post('/update', 'Admin\ProductController@update')->name('admin.products.update');
           //Route::get('/{id}/delete', 'Admin\ProductController@delete')->name('admin.products.delete');

           Route::post('images/upload', 'Admin\ProductImageController@upload')->name('admin.products.images.upload');
           Route::get('images/{id}/delete', 'Admin\ProductImageController@delete')->name('admin.products.images.delete');

           Route::get('attributes/load', 'Admin\ProductAttributeController@loadAttributes');
           Route::post('attributes', 'Admin\ProductAttributeController@productAttributes');
           Route::post('attributes/values', 'Admin\ProductAttributeController@loadValues');
           Route::post('attributes/add', 'Admin\ProductAttributeController@addAttribute');
           Route::post('attributes/delete', 'Admin\ProductAttributeController@deleteAttribute');

        });

        Route::group(['prefix' => 'orders'], function () {
           Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
           Route::get('/{order}/show', 'Admin\OrderController@show')->name('admin.orders.show');
        });


        Route::group(['prefix'  =>   'carousels'], function() {

            Route::get('/', 'Admin\CarouselController@index')->name('admin.carousels.index');
            Route::get('/create', 'Admin\CarouselController@create')->name('admin.carousels.create');
            Route::post('/store', 'Admin\CarouselController@store')->name('admin.carousels.store');
            Route::get('/{id}/edit', 'Admin\CarouselController@edit')->name('admin.carousels.edit');
            Route::post('/update', 'Admin\CarouselController@update')->name('admin.carousels.update');
            Route::get('/{id}/delete', 'Admin\CarouselController@delete')->name('admin.carousels.delete');

        });


        Route::group(['prefix'  =>   'about'], function() {

            Route::get('/', 'Admin\AboutController@index')->name('admin.about.index');
            Route::get('/edit', 'Admin\AboutController@edit')->name('admin.about.edit');
            Route::post('/update', 'Admin\AboutController@update')->name('admin.about.update');

        });


        Route::group(['prefix'  =>   'outlets'], function() {

            Route::get('/', 'Admin\OutletController@index')->name('admin.outlets.index');
            Route::get('/create', 'Admin\OutletController@create')->name('admin.outlets.create');
            Route::post('/store', 'Admin\OutletController@store')->name('admin.outlets.store');
            Route::get('/{id}/edit', 'Admin\OutletController@edit')->name('admin.outlets.edit');
            Route::post('/update', 'Admin\OutletController@update')->name('admin.outlets.update');
            Route::get('/{id}/delete', 'Admin\OutletController@delete')->name('admin.outlets.delete');

        });




    });
});
