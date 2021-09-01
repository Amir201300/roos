<?php

Route::post('/admin/login', 'AuthController@login')->name('admin.login');

Route::prefix('Admin')->group(function () {
    Route::get('/login', function () {
        return view('Admin.loginAdmin');
    });
    Route::group(['middleware' => 'roles', 'roles' => ['Admin']], function () {

        Route::get('/logout/logout', 'AuthController@logout')->name('user.logout');
        Route::get('/home', 'AuthController@index')->name('admin.dashboard');

        // Profile Route
        Route::prefix('profile')->group(function () {
            Route::get('/index', 'profileController@index')->name('profile.index');
            Route::post('/index', 'profileController@update')->name('profile.update');
        });

        // Category Routes
        Route::prefix('Category')->group(function () {
            Route::get('/index', 'CategoryController@index')->name('Category.index');
            Route::get('/allData', 'CategoryController@allData')->name('Category.allData');
            Route::post('/create', 'CategoryController@create')->name('Category.create');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('Category.edit');
            Route::post('/update', 'CategoryController@update')->name('Category.update');
            Route::get('/destroy/{id}', 'CategoryController@destroy')->name('Category.destroy');
            Route::get('/ChangeStatus/{id}', 'CategoryController@ChangeStatus')->name('Category.ChangeStatus');
        });

        // Color Routes
        Route::prefix('Color')->group(function () {
            Route::get('/index', 'ColorController@index')->name('Color.index');
            Route::get('/allData', 'ColorController@allData')->name('Color.allData');
            Route::post('/create', 'ColorController@create')->name('Color.create');
            Route::get('/edit/{id}', 'ColorController@edit')->name('Color.edit');
            Route::post('/update', 'ColorController@update')->name('Color.update');
            Route::get('/destroy/{id}', 'ColorController@destroy')->name('Color.destroy');
        });

        // Product Routes
        Route::prefix('Product')->group(function () {
            Route::get('/index', 'ProductController@index')->name('Product.index');
            Route::get('/allData', 'ProductController@allData')->name('Product.allData');
            Route::get('/createForm', 'ProductController@createForm')->name('Product.createForm');
            Route::post('/create', 'ProductController@create')->name('Product.create');
            Route::get('/edit/{id}', 'ProductController@edit')->name('Product.edit');
            Route::post('/update', 'ProductController@update')->name('Product.update');
            Route::get('/destroy/{id}', 'ProductController@destroy')->name('Product.destroy');
        });

    });
});

