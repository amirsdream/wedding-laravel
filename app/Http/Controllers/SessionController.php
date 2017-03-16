<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function isLogin(Request $request){

        if(!strlen(Session::get('userRole'))) {
            $request->session()->regenerate();
            session(['userRole' => ""]);

            $password = $request->input('password');
            $email = $request->input('email');

            if (strlen($email) and strlen($password)) {


                $userLogin = DB::table('users')->where('password', '=', $password)->where('email', '=', $email)->get();

                //dd(User::all());

                if ($userLogin->count()) {
                    //dd($userLogin);

                    if (!($userLogin[0]->active)){

                      return view('userLogin', ['message' => 'یوزر شما فعال نیست جهت فعال سازی به ایمیل خود مراجعه کنید']);
                    }

                    session(['userId' => $userLogin[0]->id]);
                    session(['userRole'=>$userLogin[0]->role]);


                    if(Route::currentRouteName() == 'adminLogin' and $userLogin[0]->role == 'admin'){

                        return view('admin-dashboard');
                    }
                    if(Route::currentRouteName() == 'adminLogin' and $userLogin[0]->role != 'admin'){

                        Session::forget('userRole');
                        Session::forget('userId');
                        return view('admin', ['message' => 'ایمیل یا پسورد اشتباه لطفا دوباره سعی کنید']);

                    }
                    if (Route::currentRouteName() == 'userLogin'){
                        return redirect()->route('home');
                    }

                }
                else{

                    if(Route::currentRouteName() == 'adminLogin')
                        return view('admin', ['message' => 'ایمیل یا پسورد اشتباه لطفا دوباره سعی کنید']);

                    if(Route::currentRouteName() == 'userLogin')
                        return view('home.userLogin', ['message' => 'ایمیل یا پسورد اشتباه لطفا دوباره سعی کنید']);
                }
            }
            else {

                $emailMessage = "";
                $passwordMessage = "";

                if (!strlen($email)) {

                    $emailMessage = "ایمیل را وارد کنید";
                }
                if (!strlen($password)) {

                    $passwordMessage = "رمز عبور را وارد کنید";
                }

                if(Route::currentRouteName() == 'adminLogin')
                    return view('admin', ['passwordMessage' => $passwordMessage, 'emailMessage' => $emailMessage]);
                else
                    return view('home.userLogin', ['passwordMessage' => $passwordMessage, 'emailMessage' => $emailMessage]);

            }
        }
        else{

            if(Session::get('userRole') == 'admin' and Route::currentRouteName() == 'adminLogin') {

                return view('admin-dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
    }

    public function setSessionForName(Request $request){

            if(!Session::has('userRole')){
                $request->session()->regenerate();
            }
            session(['firstName'=>$request->input('firstName')]);
            session(['lastName'=>$request->input('lastName')]);

            return view('signup');
    }

    public  function signOut(){

        Session::forget('userRole');
        Session::forget('userId');


        if(Session::has('items'))
            Session::forget('items');

        if(Route::currentRouteName() == 'adminSignout')
            return view('admin');
        else
            return redirect()->route('home');
    }
    public function newUser(){
        //dd(User::all());

        //dd(Session::get('userRole'));
        $user = new User();
        $user->name = "admin";
        $user->email = 'admin@gmail.com';
        $user->password = '123456789';
        $user->role = 'admin';
        $user->save();

    }
}
