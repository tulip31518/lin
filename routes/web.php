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
});

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
 ]);

 Route::get('terminate',[
    'middleware' => 'Terminate:editor',
    'uses' => 'ABCController@index',
 ]);

 Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
 ]);

 Route::resource('my','MyController');
 Route::resource('test','ImplicitController');

 
 Route::get('/myclass','ImplicitController@index');
 Route::get('/foo/bar','UriController@index');

 Route::get('/register', function(){
     return view('register');
 });
 Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));

 Route::get('/cookie/get', 'CookieController@getCookie');
 Route::get('/cookie/set', 'CookieController@setCookie');

 Route::get('/test', ['as'=>'testing',function(){
    return view('test2');
 }]);
 
 Route::get('redirect',function(){
    return redirect()->route('testing');
 });

 Route::get("rr", 'RedirectController@index');
 Route::get("redirect", function(){
     return redirect()->action('RedirectController@index');
 });

 Route::get('insert','StudentController@insertForm');
 Route::post('create', 'StudentController@insert');

 Route::get('view_records', 'StudViewController@index');

 Route::get('edit_records', 'StudUpdateController@index');
 Route::get('edit/{id}', 'StudUpdateController@show');
 Route::post('edit/{id}', 'StudUpdateController@edit');

 Route::get('delete_records', 'StudDeleteController@index');
 Route::get('delete/{id}', 'StudDeleteController@destroy');

 Route::get('/form',function(){
    return view('form');
 });

 Route::get('localization/{locale}','LocalizationController@index');

 Route::get('session/get', 'SessionController@accessSessionData');
 Route::get('session/store', 'SessionController@storeSessionData');
 Route::get('session/remove', 'SessionController@deleteSessionData');

 Route::get('/validation','ValidationController@showform');
 Route::post('/validation','ValidationController@validateform');

 Route::get('/uploadfile','UploadFileController@index');
 Route::post('/uploadfile','UploadFileController@showUploadFile');

 Route::get('ajax',function(){
    return view('message');
 });
 Route::post('/getmsg','AjaxController@index');