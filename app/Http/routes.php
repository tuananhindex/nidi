<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/',['as' => 'home' , 'uses' => 'frontend\PageController@home']);

	//Route::get('/danh-muc-san-pham/giong-cay-khac',['as' => 'home' , 'uses' => 'frontend\PageController@home']);

	Route::get('san-pham/{alias}',['as' => 'product' , 'uses' => 'frontend\PageController@product']);
	Route::get('danh-muc-san-pham/{alias}/{filter?}',['as' => 'product_category' , 'uses' => 'frontend\PageController@product_category']);

	Route::get('bai-viet/{alias}',['as' => 'posts' , 'uses' => 'frontend\PageController@posts']);
	Route::get('danh-muc-bai-viet/{alias}',['as' => 'posts.category' , 'uses' => 'frontend\PageController@posts_category']);

	Route::get('y-kien-khach-hang',['as' => 'customer_reviews' , 'uses' => 'frontend\PageController@customer_reviews']);

	Route::post('tim-kiem',['as' => 'search.post' , 'uses' => 'frontend\PageController@search_post']);
	Route::get('tim-kiem/{key}',['as' => 'search.get' , 'uses' => 'frontend\PageController@search_get']);

	Route::get('menu/{alias}',['as' => 'menu' , 'uses' => 'frontend\PageController@menu']);
	
	Route::get('capcha',['as' => 'capcha' , 'uses' => 'CapchaController@getBuild']);
	Route::get('danhgia',['as' => 'danhgia' , 'uses' => 'CapchaController@danhgia']);

	Route::get('lien-he',['as' => 'contact' , 'uses' => 'frontend\PageController@contact']);

    Route::group(['prefix' => 'backend'],function(){
    	Route::group(['middleware' => ['guest']], function () {
			Route::get('login',['as' => 'backend.login.get' , 'uses' => 'backend\LoginController@getLogin']);
			Route::post('login',['as' => 'backend.login.post' , 'uses' => 'backend\LoginController@postLogin']);
		});

    	Route::group(['middleware' => ['auth']], function () {
    		Route::get('logout',['as' => 'backend.logout' , 'uses' => 'backend\LoginController@logout']);
	    	Route::get('/',['as' => 'backend.home' , 'uses' => 'backend\HomeController@index']);
	    	
	    	Route::group(['middleware' => ['admin']], function () {
		    	Route::group(['prefix' => 'account'],function(){
					Route::get('add',['as' => 'backend.account.add.get' , 'uses' => 'backend\AccountController@add_get']);
					Route::post('add',['as' => 'backend.account.add.post' , 'uses' => 'backend\AccountController@add_post']);
					Route::get('edit/{id}',['as' => 'backend.account.edit.get' , 'uses' => 'backend\AccountController@edit_get']);
					Route::post('edit/{id}',['as' => 'backend.account.edit.post' , 'uses' => 'backend\AccountController@edit_post']);
					Route::get('{key?}',['as' => 'backend.account.list.get' , 'uses' => 'backend\AccountController@list_get']);
					Route::post('/',['as' => 'backend.account.list.post' , 'uses' => 'backend\AccountController@list_post']);
					Route::get('delete/{id}',['as' => 'backend.account.delete' , 'uses' => 'backend\AccountController@delete']);
		    	});
		    });
	    	
	    	Route::group(['prefix' => 'product'],function(){
		    	Route::group(['prefix' => 'category'],function(){
					Route::get('add',['as' => 'backend.product.category.add.get' , 'uses' => 'backend\product\CategoryController@add_get']);
					Route::post('add',['as' => 'backend.product.category.add.post' , 'uses' => 'backend\product\CategoryController@add_post']);
					Route::get('edit/{id}',['as' => 'backend.product.category.edit.get' , 'uses' => 'backend\product\CategoryController@edit_get']);
					Route::post('edit/{id}',['as' => 'backend.product.category.edit.post' , 'uses' => 'backend\product\CategoryController@edit_post']);
					Route::get('{key?}',['as' => 'backend.product.category.list.get' , 'uses' => 'backend\product\CategoryController@list_get']);
					Route::post('/',['as' => 'backend.product.category.list.post' , 'uses' => 'backend\product\CategoryController@list_post']);
					Route::get('delete/{id}',['as' => 'backend.product.category.delete' , 'uses' => 'backend\product\CategoryController@delete']);
		    	});

		    	Route::group(['prefix' => 'product'],function(){
					Route::get('add',['as' => 'backend.product.product.add.get' , 'uses' => 'backend\product\ProductController@add_get']);
					Route::post('add',['as' => 'backend.product.product.add.post' , 'uses' => 'backend\product\ProductController@add_post']);
					Route::get('edit/{id}',['as' => 'backend.product.product.edit.get' , 'uses' => 'backend\product\ProductController@edit_get']);
					Route::post('edit/{id}',['as' => 'backend.product.product.edit.post' , 'uses' => 'backend\product\ProductController@edit_post']);
					Route::get('{key?}',['as' => 'backend.product.product.list.get' , 'uses' => 'backend\product\ProductController@list_get']);
					Route::post('/',['as' => 'backend.product.product.list.post' , 'uses' => 'backend\product\ProductController@list_post']);
					Route::get('delete/{id}',['as' => 'backend.product.product.delete' , 'uses' => 'backend\product\ProductController@delete']);
		    	});
		    });

		    Route::group(['prefix' => 'posts'],function(){
		    	Route::group(['prefix' => 'category'],function(){
					Route::get('add',['as' => 'backend.posts.category.add.get' , 'uses' => 'backend\posts\CategoryController@add_get']);
					Route::post('add',['as' => 'backend.posts.category.add.post' , 'uses' => 'backend\posts\CategoryController@add_post']);
					Route::get('edit/{id}',['as' => 'backend.posts.category.edit.get' , 'uses' => 'backend\posts\CategoryController@edit_get']);
					Route::post('edit/{id}',['as' => 'backend.posts.category.edit.post' , 'uses' => 'backend\posts\CategoryController@edit_post']);
					Route::get('{key?}',['as' => 'backend.posts.category.list.get' , 'uses' => 'backend\posts\CategoryController@list_get']);
					Route::post('/',['as' => 'backend.posts.category.list.post' , 'uses' => 'backend\posts\CategoryController@list_post']);
					Route::get('delete/{id}',['as' => 'backend.posts.category.delete' , 'uses' => 'backend\posts\CategoryController@delete']);
		    	});

		    	Route::group(['prefix' => 'posts'],function(){
					Route::get('add',['as' => 'backend.posts.posts.add.get' , 'uses' => 'backend\posts\PostsController@add_get']);
					Route::post('add',['as' => 'backend.posts.posts.add.post' , 'uses' => 'backend\posts\PostsController@add_post']);
					Route::get('edit/{id}',['as' => 'backend.posts.posts.edit.get' , 'uses' => 'backend\posts\PostsController@edit_get']);
					Route::post('edit/{id}',['as' => 'backend.posts.posts.edit.post' , 'uses' => 'backend\posts\PostsController@edit_post']);
					Route::get('{key?}/{cat?}',['as' => 'backend.posts.posts.list.get' , 'uses' => 'backend\posts\PostsController@list_get']);
					Route::post('/',['as' => 'backend.posts.posts.list.post' , 'uses' => 'backend\posts\PostsController@list_post']);
					Route::get('delete/{id}',['as' => 'backend.posts.posts.delete' , 'uses' => 'backend\posts\PostsController@delete']);
		    	});
		    });

		    Route::group(['prefix' => 'menu'],function(){
				Route::get('add',['as' => 'backend.menu.add.get' , 'uses' => 'backend\MenuController@add_get']);
				Route::post('add',['as' => 'backend.menu.add.post' , 'uses' => 'backend\MenuController@add_post']);
				Route::get('edit/{id}',['as' => 'backend.menu.edit.get' , 'uses' => 'backend\MenuController@edit_get']);
				Route::post('edit/{id}',['as' => 'backend.menu.edit.post' , 'uses' => 'backend\MenuController@edit_post']);
				Route::get('{key?}',['as' => 'backend.menu.list.get' , 'uses' => 'backend\MenuController@list_get']);
				Route::post('/',['as' => 'backend.menu.list.post' , 'uses' => 'backend\MenuController@list_post']);
				Route::get('delete/{id}',['as' => 'backend.menu.delete' , 'uses' => 'backend\MenuController@delete']);
	    	});

	    	Route::group(['prefix' => 'banner'],function(){
				Route::get('add',['as' => 'backend.banner.add.get' , 'uses' => 'backend\BannerController@add_get']);
				Route::post('add',['as' => 'backend.banner.add.post' , 'uses' => 'backend\BannerController@add_post']);
				Route::get('edit/{id}',['as' => 'backend.banner.edit.get' , 'uses' => 'backend\BannerController@edit_get']);
				Route::post('edit/{id}',['as' => 'backend.banner.edit.post' , 'uses' => 'backend\BannerController@edit_post']);
				Route::get('{key?}',['as' => 'backend.banner.list.get' , 'uses' => 'backend\BannerController@list_get']);
				Route::post('/',['as' => 'backend.banner.list.post' , 'uses' => 'backend\BannerController@list_post']);
				Route::get('delete/{id}',['as' => 'backend.banner.delete' , 'uses' => 'backend\BannerController@delete']);
	    	});

	    	Route::group(['prefix' => 'ajax'],function(){
	    		Route::get('get_data_cursor',['as' => 'get_data_cursor' , 'uses' => 'backend\AjaxController@get_data_cursor']);
	    	});
	    });
    });

    //Route::any('/{page?}',function(){
	//  	return View::make('errors.404');
	//})->where('page','.*');
});
