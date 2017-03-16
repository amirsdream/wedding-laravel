<?php



Route::get('/', ['as'=>'home','uses'=>function () {
    return view('home');
}]);

Route::get('new','SessionController@newUser');

Route::get('admin', function () {

    if(\Illuminate\Support\Facades\Session::get('userRole')=='admin' and \Illuminate\Support\Facades\Session::has('userRole')){

        return view('admin-dashboard');
    }
    elseif (\Illuminate\Support\Facades\Session::get('userRole')!='admin' and \Illuminate\Support\Facades\Session::has('userRole')){

        return redirect()->route('home');
    }
    else{

        return view('admin');
    }

});
Route::post('admin/login',['as'=>'adminLogin','uses'=>'SessionController@isLogin']);
Route::get('admin/login', ['as'=>'adminLogin','uses'=>'SessionController@isLogin']);

Route::post('user/login',['as'=>'userLogin','uses'=>'SessionController@isLogin']);
Route::get('user/login', ['as'=>'userLogin','uses'=>'SessionController@isLogin']);

Route::get('admin/signout',['as'=>'adminSignout','uses'=>'SessionController@signOut'] );
Route::get('user/signout',['as'=>'userSignout','uses'=>'SessionController@signOut'] );

Route::post('add/slider','SliderController@create');
Route::get('add/slider','SliderController@create');

Route::get('add/aboute','AboutController@create');
Route::post('add/aboute','AboutController@create');

Route::get('add/contact','ContactController@create');
Route::post('add/contact','ContactController@create');

Route::get('/show/messages','MessageController@showAll');
Route::get('/delete/message/{id}','MessageController@delete');
Route::get('/show/message/{id}','MessageController@show');
Route::post('send/message','MessageController@create');

Route::get('add/order','PackageController@addOrder');
Route::post('add/order','PackageController@addOrder');

Route::get('add/order/two','PackageController@addOrderTwo');
Route::post('add/order/two','PackageController@addOrderTwo');

Route::get('add/order/three','PackageController@addOrderThree');
Route::post('add/order/three','PackageController@addOrderThree');