<?php

Route::get('/admin', 'AdminController@loginAdmin');
Route::post('/admin', 'AdminController@postloginAdmin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    //category
    Route::prefix('categories')->group(function () {
        Route::get('/',[
            'as'=> 'categories.index',
            'uses' => 'CategoryController@index',
            'middleware'=>'can:category_list',
        ]);

        Route::get('/create',[
            'as'=> 'categories.create',
            'uses' => 'CategoryController@create',
            'middleware'=>'can:category_add',
        ]);
        Route::post('/store',[
            'as'=> 'categories.store',
            'uses' => 'CategoryController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'categories.edit',
            'uses' => 'CategoryController@edit',
            'middleware'=>'can:category_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'categories.update',
            'uses' => 'CategoryController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'categories.delete',
            'uses' => 'CategoryController@delete',
            'middleware'=>'can:category_delete',
        ]);
    });
    //menu
    Route::prefix('menus')->group(function () {
        Route::get('/',[
            'as'=> 'menus.index',
            'uses' => 'MenuController@index',
            'middleware'=>'can:menu_list',
        ]);
        Route::get('/create',[
            'as'=> 'menus.create',
            'uses' => 'MenuController@create',
            'middleware'=>'can:menu_add',
        ]);
        Route::post('/store',[
            'as'=> 'menus.store',
            'uses' => 'MenuController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'menus.edit',
            'uses' => 'MenuController@edit',
            'middleware'=>'can:menu_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'menus.update',
            'uses' => 'MenuController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'menus.delete',
            'uses' => 'MenuController@delete',
            'middleware'=>'can:menu_delete',
        ]);
    });

    //Product
    Route::prefix('product')->group(function () {
        Route::get('/',[
            'as'=> 'product.index',
            'uses' => 'AdminProductController@index',
            'middleware'=>'can:product_list',
        ]);
        Route::get('/create',[
            'as'=> 'product.create',
            'uses' => 'AdminProductController@create',
            'middleware'=>'can:product_add',
        ]);
        Route::post('/store',[
            'as'=> 'product.store',
            'uses' => 'AdminProductController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'product.edit',
            'uses' => 'AdminProductController@edit',
            'middleware'=>'can:product_edit,id',

        ]);
        Route::post('/update/{id}',[
            'as'=> 'product.update',
            'uses' => 'AdminProductController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'product.delete',
            'uses' => 'AdminProductController@delete',
            'middleware'=>'can:product_delete',
        ]);
    });

    //Slider
    Route::prefix('slider')->group(function () {
        Route::get('/',[
            'as'=> 'slider.index',
            'uses' => 'SliderAdminController@index',
            'middleware'=>'can:slider_list',
        ]);
        Route::get('/create',[
            'as'=> 'slider.create',
            'uses' => 'SliderAdminController@create',
            'middleware'=>'can:slider_add',
        ]);
        Route::post('/store',[
            'as'=> 'slider.store',
            'uses' => 'SliderAdminController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'slider.edit',
            'uses' => 'SliderAdminController@edit',
            'middleware'=>'can:slider_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'slider.update',
            'uses' => 'SliderAdminController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'slider.delete',
            'uses' => 'SliderAdminController@delete',
            'middleware'=>'can:slider_delete',
        ]);
    });

    //Settings
    Route::prefix('settings')->group(function () {
        Route::get('/',[
            'as'=> 'settings.index',
            'uses' => 'AdminSettingController@index',
            'middleware'=>'can:setting_list',
        ]);
        Route::get('/create',[
            'as'=> 'settings.create',
            'uses' => 'AdminSettingController@create',
            'middleware'=>'can:setting_add',
        ]);
        Route::post('/store',[
            'as'=> 'settings.store',
            'uses' => 'AdminSettingController@store'
        ]);
        Route::get('/edit/{id}',[
                'as'=> 'settings.edit',
            'uses' => 'AdminSettingController@edit',
            'middleware'=>'can:setting_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'settings.update',
            'uses' => 'AdminSettingController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'settings.delete',
            'uses' => 'AdminSettingController@delete',
            'middleware'=>'can:setting_delete',
        ]);
    });

    //User
    Route::prefix('users')->group(function () {
        Route::get('/',[
            'as'=> 'users.index',
            'uses' => 'AdminUserController@index',
            'middleware'=>'can:user_list',
        ]);
        Route::get('/create',[
            'as'=> 'users.create',
            'uses' => 'AdminUserController@create',
            'middleware'=>'can:user_add',
        ]);
        Route::post('/store',[
            'as'=> 'users.store',
            'uses' => 'AdminUserController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'users.edit',
            'uses' => 'AdminUserController@edit',
            'middleware'=>'can:user_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'users.update',
            'uses' => 'AdminUserController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'users.delete',
            'uses' => 'AdminUserController@delete',
            'middleware'=>'can:user_delete',
        ]);
    });

    //Role
    Route::prefix('roles')->group(function () {
        Route::get('/',[
            'as'=> 'roles.index',
            'uses' => 'AdminRoleController@index',
            'middleware'=>'can:role_list',
        ]);
        Route::get('/create',[
            'as'=> 'roles.create',
            'uses' => 'AdminRoleController@create',
            'middleware'=>'can:role_add',
        ]);
        Route::post('/store',[
            'as'=> 'roles.store',
            'uses' => 'AdminRoleController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=> 'roles.edit',
            'uses' => 'AdminRoleController@edit',
            'middleware'=>'can:role_edit',
        ]);
        Route::post('/update/{id}',[
            'as'=> 'roles.update',
            'uses' => 'AdminRoleController@update'
        ]);
        Route::get('/delete/{id}',[
            'as'=> 'roles.delete',
            'uses' => 'AdminRoleController@delete',
            'middleware'=>'can:role_delete',
        ]);
    });

    //Permissions
    Route::prefix('permissions')->group(function () {
        Route::get('/create',[
            'as'=> 'permissions.create',
            'uses' => 'AdminPremissionController@createPermissions'
        ]);
        Route::post('/store',[
            'as'=> 'permissions.store',
            'uses' => 'AdminPremissionController@store'
        ]);

    });
});


