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

Route::get('/',[
    'uses'=>'IndexController@index',
    'as'=>'index'
]);
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
    Route::get('/Order/Track',[
        'as'=>'OrderController@track',
        'as'=>'order.track'
    ]);
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
Route::get('/Home/Publications/',[
    'uses'=>'AssignmentController@all',
    'as'=>'publications.all'
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
    Route::get('/Assignment/View',[
        'uses'=>'AssignmentController@index',
        'as'=>'assignment.view'
    ]);
    Route::get('/Assignment/single/{slug}',[
        'uses'=>'AssignmentController@show',
        'as'=>'assignment.single'
    ]);
    Route::get('/Assignment/Single/Edit/{slug}',[
        'uses'=>'AssignmentController@edit',
        'as'=>'assignment.edit'
    ]);
    Route::post('/Assignment/Single/Update/{slug}',[
        'uses'=>'AssignmentController@update',
        'as'=>'assignment.update'
    ]);
    ROute::get('Assignment/Delete/{slug}',[
        'uses'=>'AssignmentController@delete',
        'as'=>'assignment.delete'
    ]);
    Route::get('/Assignment/New/',[
        'uses'=>'AssignmentController@create',
        'as'=>'assignment.add'
    ]);
    Route::get('/Assignment/Recycle/Bin',[
        'uses'=>'AssignmentController@trashed',
        'as'=>'assignment.trashed'
    ]);
    Route::get('/Assignment/Recover/{slug}',[
        'uses'=>'AssignmentController@recover',
        'as'=>'assignment.recover'
    ]);
    Route::get('/Assignment/Disputed',[
        'uses'=>'AssignmentController@dispute',
        'as'=>'assignment.disputed'
    ]);
    Route::get('/Assignment/Dispute/{slug}',[
        'uses'=>'DisputeController@create',
        'as'=>'assignment.dispute'
    ]);
    Route::get('/Dispute/Single/{slug}',[
        'uses'=>'DisputeController@show',
        'as'=>'dispute.single'
    ]);
    Route::get('/Dispute/Settle/{slug}',[
        'uses'=>'DisputeController@settle',
        'as'=>'dispute.settle'
    ]);
    Route::post('/Dispute/New',[
        'uses'=>'DisputeController@store',
        'as'=>'dispute.post'
    ]);
    Route::get('/Assignment/Close/Dispute/{slug}',[
        'uses'=>'DisputeController@remove',
        'as'=>'assignment.undispute'
    ]);
    Route::get('/Dispute/Close/{slug}',[
        'uses'=>'DisputeController@close',
        'as'=>'dispute.undispute'
    ]);
    Route::get('/Dispute/View/This/{slug}',[
        'uses'=>'DisputeController@view',
        'as'=>'dispute.view.this'
    ]);
    Route::get('/Disputes/All/List',[
        'uses'=>'DisputeController@index',
        'as'=>'disputes.index'
    ]);
    Route::post('/Product/Cart',[
        'uses'=>'ShopController@cart',
        'as'=>'product.cart'
    ]); 
    Route::get('Shop/Cart/MyAccount',[
        'uses'=>'CartController@index',
        'as'=>'cart.index'
    ]) ;
});
Route::get('/Wishlist/Add/Product/{slug}',[
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
Route::get('/Complete/{orderNumber}/{useremail}/{total}','ConfirmedController@record')->name('cart.clear');
Route::post('/pay','CompleteController@create');
Route::post('pay-cash','CompleteController@pay')->name('pay-cash');
Route::get('single/Cart/{slug}',[
    'uses'=>'ShopController@singleCart',
    'as'=>'single.cart'
]);
Route::get('/ThankYou/{order}',[
    'uses'=>'ShopController@thankyou',
    'as'=>'thank.you'
]);
Route::get('/Order/View/{order}',[
    'uses'=>'OrderController@show',
    'as'=>'view.order'
]);
Route::get('/Proposal/Order',[
    'uses'=>'ProposalController@index',
    'as'=>'proposal.order'
]);
Route::post('/Request/Proposal',[
    'uses'=>'ProposalController@store',
    'as'=>'proposal.post'
]);
Route::get('/Account/Client/Register',[
    'uses'=>'ClientRegister@create',
    'as'=>'client.register'
]);
Route::post('/Account/Client/Store',[
    'uses'=>'ClientRegister@store',
    'as'=>'client.details.login'
]);
Route::get('/Cart/Remove/{slug}',[
    'uses'=>'CartController@remove',
    'as'=>'cart.remove'
]);
Route::get('/profile',[
    'uses'=>'AccountController@index',
    'as'=>'profile.view'
]);
Route::post('/password',[
    'uses'=>'AccountController@update',
    'as'=>'password.change'
]);
Route::get('/Completed/Assignment',[
    'uses'=>'CompletedController@index',
    'as'=>'assignments.completed'
]);
Route::get('/CheckDraft/Assignments/{slug}',[
    'uses'=>'CompletedController@completed',
    'as'=>'assignment.complete'
]);
Route::get('/Revision/Assignment/{slug}',[
    'uses'=>'CompletedController@revise',
    'as'=>'assignment.revise'
]);
Route::get('/Complete/Single/{slug}',[
    'uses'=>'CompletedController@complete',
    'as'=>'assignment.markComplete'
]);
Route::get('/Completed/New',[
    'uses'=>'CompletedController@create',
    'as'=>'completed.new'
]);
Route::post('/Assignment/New/Completed',[
    'uses'=>'CompletedController@store',
    'as'=>'completed.post'
]);
Route::get('/Completed/Edit/{slug}',[
    'uses'=>'CompletedController@edit',
    'as'=>'completed.edit'
]);
Route::post('/Completed/Update',[
    'uses'=>'CompletedController@update',
    'as'=>'completed.update'
]);

Route::resource('availables', 'AvailableController');

Route::resource('topics', 'TopicsController');
Route::get('/Available/Assignments',[
    'uses'=>'AvailableController@available',
    'as' =>'assignment.available'
]);
Route::get('/Assignment/Topic/{slug}',[
    'uses'=>'AvailableController@Assignment',
    'as'=>'assignment.category'
]);
Route::get('/Topic/Assignment/{slug}',[
    'uses'=>'AvailableController@Single',
    'as'=>'Topic.single'
]);
Route::get('Assignment/Download/{slug}',[
    'uses'=>'AssignmentController@Download',
    'as'=>'assignment.download'
]);
Route::get('/Download/{slug}',[
    'uses'=>'AssignmentController@ADownload'
]);
Route::get('/Opinions/Home',[
    'uses'=>'OpinionsController@index',
    'as'=>'opinions.index'
]);


Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/Users/Show',[
        'uses'=>'HomeController@users',
        'as'=>'users.all'
    ]);
    Route::get('/Users/Suspend/{id}',[
        'uses'=>'HomeController@suspend',
        'as'=>'user.suspend'
    ]);
    Route::get('/Users/Reinstate/{id}',[
        'uses'=>'HomeController@reinstate',
        'as'=>'user.reinstate'
    ]);
    Route::get('/Opinions/Home/Create',[
        'uses'=>'OpinionController@create',
        'as'=>'opinion.create'
    ]);
    Route::get('/Opinions/Approve/{slug}',[
        'uses'=>'OpinionController@approve',
        'as'=>'opinions.approve'
    ]);
    Route::get('/Opinions/Disapprove/{slug}',[
        'uses'=>'OpinionController@disapprove',
        'as'=>'opinions.disapprove'
    ]);
    Route::resource('optionsTopics', 'OptionsTopicController');
    Route::resource('opinions', 'OpinionController');  
    Route::resource('others', 'OtherController'); 
});
Route::get('/Opinions/View',[
    'uses'=>'OpinionController@Home',
    'as'=>'opinion.home'
]);
Route::get('/Opinions/Single/{slug}',[
    'uses'=>'OpinionController@singlet',
    'as'=>'opinion.singlet'
]);
Route::get('/Opinions/Topic/{slug}',[
    'uses'=>'OpinionController@Topic',
    'as'=>'opinions.topic'
]);
Route::get('/Others/Posts',[
    'uses'=>'OthersController@index',
    'as'=>'others.all'
]);
Route::get('/Others/Single/{slug}',[
    'uses'=>'OthersController@single',
    'as'=>'other.single'
]);
Route::get('/Others/Publish',[
    'uses'=>'OtherController@create',
    'as'=>'others.create'
]);
Route::post('/Others/Save',[
    'uses'=>'OtherController@store',
    'as'=>'others.store'
]);
Route::post('/Blogger/Register',[
    'uses'=>'BlogsController@store',
    'as'=>'blogger.register'
]);
Route::get('/Paid/Proposals',[
    'uses'=>'ProposalController@paid',
    'as'=>'proposal.paid'
]);