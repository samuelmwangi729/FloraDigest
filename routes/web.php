<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/blog/post/{slug}',[
    'uses'=>'PostController@singlePost',
    'as'=>'posts.single'
]);
Route::get('/news/News/{slug}',[
    'uses'=>'NewsController@singleNews',
    'as'=>'news.single'
]);
Route::get('/News/Categories/{name}',[
    'uses'=>'NewsController@NewsTag',
    'as'=>'tag.type'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logistics','LogisticsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
route::get('/academia','AcademiaController@index');
Route::get('/news','NewsController@index');
Route::get('/politics','PoliticsController@index');
Route::get('/blog',[
    'uses' => 'PostController@index',
    'as' => 'post.create'
]);

Route::group(['prefix' => 'blog','middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController');
    Route::get('/trashed',[
        'uses'=>'PostController@trashed',
        'as'=>'posts.trashed'
    ]);
    Route::get('/viewAll',[
        'uses'=>'PostController@view',
        'as'=>'posts.view'
    ]);
    Route::get('/restore',[
        'uses'=>'PostController@restore',
        'as'=>'posts.restore'
    ]);
    Route::post('/update/{id}',[
        'uses'=>'PostController@update',
        'as'=>'posts.update'
    ]);
    Route::get('/posts/restore/{id}',[
        'uses'=>'PostController@restore',
        'as'=>'posts.restore'
    ]);
    Route::get('/posts/edit/{id}',[
        'uses'=>'PostController@edit',
        'as'=>'posts.edit'
    ]);
});
Route::group(['middleware' => ['auth','admin']], function () {
    Route::resource('categories', 'CategoryController');
});

Route::resource('tags', 'TagsController');

Route::resource('newsTags', 'NewsTagsController');
Route::get('/restore',[
    'uses'=>'NewsTagsController@restore',
    'as'=>'newsTags.restore'
]);
Route::get('/newstag/recover/{id}',[
    'uses'=>'NewsTagsController@recover',
    'as'=>'newsTags.recover'
]);

Route::get('/newstag/delete/{id}',[
    'uses'=>'NewsTagsController@delete',
    'as'=>'newsTags.delete'
]);
Route::resource('news', 'NewsController');
Route::post('/newsUpdate/{slug}',[
    'uses'=>'NewsController@update',
    'as'=>'news.update'
]);
Route::get('/News',[
    'uses'=>'NewsController@Index1',
    'as'=>'news.Index'
]);
Route::get('/deleted',[
    'uses'=>'NewsController@deleted',
    'as'=>'news.deleted'
]);
Route::get('/newsRestore/{slug}',[
    'uses'=>'NewsController@restore',
    'as'=>'news.restore'
]);
Route::get('/newsDelete/{slug}',[
    'uses'=>'NewsController@delete',
    'as'=>'news.delete'
]);

Route::resource('politicsTags', 'PoliticsTagsController');
Route::get('Politics/Trashed',[
    'uses'=>'PoliticsTagsController@trashed',
    'as'=>'politics.trashed.tags'
]);
Route::get('PoliticsTags/Recover/{id}',[
    'uses'=>'PoliticsTagsController@recover',
    'as'=>'political.tags.recover'
]);
Route::get('PoliticsTags/Delete/{id}',[
    'uses'=>'PoliticsTagsController@delete',
    'as'=>'political.tags.delete'
]);

Route::resource('politics', 'PoliticsController');
Route::post('Politics/Update/{id}',[
    'uses'=>'PoliticsController@update',
    'as'=>'politics.update'
]);
Route::get('/Political/Deleted',[
    'uses'=>'PoliticsController@trashed',
    'as'=>'political.news.trashed'
]);
Route::get('/Political/restore/{slug}',[
    'uses'=>'PoliticsController@restore',
    'as'=>'politics.restore'
]);
Route::get('/Political/Destroy/{slug}',[
    'uses'=>'PoliticsController@Delete',
    'as'=>'politics.delete'
]);
Route::get('/Home/Politics/News',[
    'uses'=>'PoliticsController@Home',
    'as'=>'politics.home'
]);
Route::get('/Home/Politics/Type/{id}',[
    'uses'=>'PoliticsController@TagsType',
    'as'=>'politics.type'
]);
Route::get('/Home/Politics/Single/{slug}',[
    'uses'=>'PoliticsController@single',
    'as'=>'politics.single'
]);

Route::resource('productsCategories', 'ProductsCategoriesController');

Route::resource('products', 'ProductsController');

Route::resource('subcategories', 'SubCategoriesController');
Route::get('/Home/Shop',[
    'uses'=>'ShopController@index',
    'as'=>'site.shop'
]);

Route::resource('brands', 'BrandController');

Route::resource('colors', 'ColorController');
Route::post('Product/Update/{id}',[
    'uses'=>'ProductsController@update',
    'as'=>'products.update'
]);
Route::get('/Shop/Product/{id}',[
    'uses'=>'ShopController@show',
    'as'=>'product.show'
]);

Route::resource('labels', 'LabelController');
Route::group(['middleware' => ['auth']], function () {
    Route::post('/Product/Cart',[
        'uses'=>'ShopController@cart',
        'as'=>'product.cart'
    ]); 
    Route::get('Shop/Cart/MyAccount',[
        'uses'=>'CartController@index',
        'as'=>'cart.index'
    ]) ;
});
ROute::get('/Wishlist/Add/Product/{slug}',[
    'uses'=>'ShopController@addWishlist',
    'as'=>'wishlist.add'
]);

Route::resource('counties', 'CountyController');

Route::resource('towns', 'TownController');

Route::resource('shippings', 'ShippingController');
Route::post('/MyAccount/Order/Make',[
    'uses'=>'OrderController@index',
    'as'=>'order.post'
]);

Route::resource('payments', 'PaymentController');
Route::post('/Update/payment/Method/{id}',[
    'uses'=>'PaymentController@update',
    'as'=>'payments.update'
]);
Route::get('/Shop/Product/Single/{category}',[
    'uses'=>'ProductsController@category',
    'as'=>'product.category'
]);
Route::get('/Shop/Product/Brand/{brand}',[
    'uses'=>'ProductsController@brand',
    'as'=>'product.brand'
]);
Route::get('/Shop/Product/Color/{color}',[
    'uses'=>'ProductsController@color',
    'as'=>'product.color'
]);
Route::post('/MyAccount/Order/CheckOut',[
    'uses'=>'OrderController@checkOut',
    'as'=>'order.checkout'
]);
Route::get('/Complete','CompleteController@record');