<?php   
Route::get('/',array(
    'as'=> 'home',
    'uses' => 'HomeController@home'
    ));

Route::get('/projekti',array(
    'as'=>'projekti',
    'uses'=>'ProjectController@project'
));

Route::get('/cenas',array(
  'as'=>'cenas',
    'uses'=>'PriceController@cenas'
));
Route::get('/about',array(
  'as'=>'about',
    'uses'=>'HomeController@about'
));
Route::get('/projekti/individualie',array(
    'as'=>'projekti-individual',
    'uses'=>'ProjectController@individual'
));
Route::get('/projekti/kolektivie',array(
    'as'=>'projekti-colective',
    'uses'=>'ProjectController@colective'
));
Route::get('/piedavajums',array(
    'as'=>'piedavajums',
    'uses'=>'SewingController@piedavajums'
));
Route::get('/piedavajums/susana',array(
    'as'=>'piedavajums-susana',
    'uses'=>'SewingController@susana'
));
Route::get('/piedavajums/izsusana',array(
    'as'=>'piedavajums-izsusana',
    'uses'=>'SewingController@izsusana'
));
Route::controller('admin/products', 'ProductsController');
Route::controller('admin/categories', 'CategoriesController');

Route::get('/kontakti',array(
    'as'=>'kontakti',
    'uses'=>'ContactController@kontakti'
));
Route::get('/iespejas',array(
    'as'=>'iespejas',
    'uses'=>'PossibilitiesController@iespejas'
));

Route::get('/store', array(
    'as'=>'store',
    'uses'=>'StoreController@getIndex'));

Route::controller('store', 'StoreController');
Route::controller('account','AccountController');

Route::resource('posts', 'PostController');
Route::resource ('products', 'ProductsController');

Route::get('/blogs', function()
{
	$posts = Post::orderBy('created_at', 'DESC')->paginate(3);

	return View::make('blogs.index')->with('posts', $posts);
});

Route::post('search', 'BaseController@search');

Route::get('blog/{slug}', function($slug){

	$post = Post::where('slug', $slug)->first();

	$date = $post->created_at;
	setlocale(LC_TIME, 'America/New_York');
	$date = $date->formatlocalized('%A %d %B %Y');

	return View::make('blogs.post')->with('post', $post)->with('date', $date);
});



Route::get ('account/change-password', array(
    'as' => 'account-change-password-post',
    'uses' => 'AccountController@postChangePassword'
));
        
Route::get ('account/change-password', array(
    'as' => 'account-change-password',
    'uses' => 'AccountController@getChangePassword'
));

Route::get ('account/change-email', array(
    'as' => 'account-change-email-post',
    'uses' => 'AccountController@postChangeEmail'
));
        
Route::get ('account/change-email', array(
    'as' => 'account-change-email',
    'uses' => 'AccountController@getChangeEmail'
));
Route::post('/account/create', array(
             'as'=> 'account-create-post',
            'uses'=>'AccountController@postCreate'
        )); 
    
    /*
     * Sign in    (POST)
     */
    Route::post('/account/signin', array(
        'as'=>'account-sign-in-post',
        'uses'=>'AccountController@postSignIn'
    ));
    /*
     * Forgot password    (POST)
     */
    
    Route::post('/account/forgot-password', array(
        'as' =>'account-forgot-password-post',
        'uses'=>'AccountController@postForgotPassword'
    ));
    /*
     * Forgot password    (GET)
     */
    
   Route::get('/account/forgot-password', array(
    'as' => 'account-forgot-password',
    'uses' => 'AccountController@getForgotPassword'
    ));
   
  Route::get('/account/recover/{code}', array(
    'as' => 'account-recover',
    'uses' => 'AccountController@getRecover'
    ));
  
  
  