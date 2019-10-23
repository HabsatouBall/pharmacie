<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');

    Route::resource('commandes', 'CommandesController');

    Route::resource('ventes', 'VenteController');

    Route::resource('categories', 'CategorieController');
    //Route::delete('users/fournisseur', 'UsersController@fournisseur')->name('users.fournisseur');
    Route::delete('users/client', 'UsersController@client')->name('users.client');

    Route::get('users/fournisseur', function () {
      return view('admin/users/fournisseurs');
    });


});
