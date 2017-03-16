<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function create(Request $request){

            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $email = $request->input('email');
            $personId = $request->input('personId');
            $studentId = $request->input('studentId');
            $phone = $request->input('phone');
            $mobile = $request->input('mobile');
            $address = $request->input('address');
            $term = $request->input('term');
            $job = $request->input('job');
            $token = str_random(30);



        $emailError = "";
            $personIdError = "";
            $studentIdError = "";

            // active password role

            if (User::where('email', '=', $email)->count()) {

                $emailError = "این ایمیل قبلا ثبت شده است";
            }
            if (User::where('personId', '=', $personId)->count()) {

                $personIdError = "این کدملی قبلا ثبت شده است";
            }
            if($job == "دانشجو") {

                if (User::where('studentId', '=', $studentId)->count()) {

                    $studentIdError = "این شماره دانشجویی قبلا ثبت شده است";
                }
            }

            if (strlen($emailError) == 0 and strlen($personIdError) == 0 and strlen($studentIdError) == 0) {


                $user = new User();

                $user->firstName = $firstName;
                $user->lastName = $lastName;
                $user->email = $email;
                $user->personId = $personId;
                $user->studentId = $studentId;
                $user->phone = $phone;
                $user->mobile = $mobile;
                $user->address = $address;
                $user->term = $term;
                $user->active = true;
                $user->password = $personId;
                $user->token = $token;
                $user->role = 'admin';
                $user->job = $job;

                if ($user->save()) {

                    $link = \Illuminate\Support\Facades\Request::root() . "/user/active/" . $token;
                    $username = $email;
                    $password = $personId;

                    try {

                        Mail::send('mail', ['link' => $link, 'username' => $username, 'password' => $password], function ($message) use ($email) {

                            $message->from('testkhabgah@gmail.com');
                            $message->to($email)->subject('فعال نمودن حساب کاربری');
                        });

                        return view('home.success', ['successLogin' => 'ثبت نام شما با موفقیت انجام شد لطفا برای فعال سازی وارد ایمیل خود شوید']);
                    }
                    catch (\Exception $ex){

                         $user->delete();
                        return view('home.signup', ['faildLogin' => 'عملیات ثبت نام ناموفق بود لطفا دوباره تلاش کنید']);

                    }


                } else {

                    return view('home.signup', ['faildLogin' => 'عملیات ثبت نام ناموفق بود لطفا دوباره تلاش کنید']);

                }


            } else {

                return view('home.signup', ['emailError' => $emailError, 'personIdError' => $personIdError, 'studentIdError' => $studentIdError]);
            }


    }//end of create

    public function show(Request $request){

        if (Session::has('userRole')){

           $user = User::where('id','=', Session::get('userId'))->get();

           return view('home.profile',['user'=>$user[0]]);
        }
        else{
            return redirect()->route('home');
        }

    }

    public function showEdit(Request $request){

        if (Session::has('userRole')){

            $user = User::where('id','=', Session::get('userId'))->get();

            return view('home.edit-profile',['user'=>$user[0]]);
        }
        else{
            return redirect()->route('home');
        }

    }

    public function edit(Request $request){

        if(Session::has('userId')) {

            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $email = $request->input('email');
            $personId = $request->input('personId');
            $studentId = $request->input('studentId');
            $phone = $request->input('phone');
            $mobile = $request->input('mobile');
            $address = $request->input('address');
            $term = $request->input('term');
            $job = $request->input('job');

            $user = User::find(Session::get('userId'));

            $user->firstName = $firstName;
            $user->lastName = $lastName;
            $user->email = $email;
            $user->personId = $personId;
            $user->studentId = $studentId;
            $user->phone = $phone;
            $user->mobile = $mobile;
            $user->address = $address;
            $user->term = $term;
            $user->password = $personId;
            $user->job = $job;

            $emailError= "";
            $personIdError= "";
            $studentIdError = "";

            if (User::where('email', '=', $email)->where('id','<>',Session::get('userId'))->count()) {

                $emailError = "این ایمیل قبلا ثبت شده است";
            }
            if (User::where('personId', '=', $personId)->where('id','<>',Session::get('userId'))->count()) {

                $personIdError = "این کدملی قبلا ثبت شده است";
            }

                if (User::where('studentId', '=', $studentId)->where('id', '<>', Session::get('userId'))->count()) {

                    $studentIdError = "این شماره دانشجویی قبلا ثبت شده است";
                }
            if($job == 'دانشجو'and !strlen($studentId)){
                $studentIdError = "برای دانشجو باید شماره دانشجویی ثبت شود";
            }


            if (strlen($emailError) == 0 and strlen($personIdError) == 0 and strlen($studentIdError) == 0) {


                if ($user->save()) {

                    return view('home.profile', ['successEdit' => 'ویرایش اطلاعات با موفقیت انجام شد', 'user' => $user]);
                } else {


                    return view('home.success', ['faildEdit' => 'ویرایش اطلاعات با موفقیت انجام نشد لطفا مجدد تلاش کنید',]);
                }
            }
            else {

                return view('home.edit-profile', ['emailError' => $emailError, 'personIdError' => $personIdError, 'studentIdError' => $studentIdError, 'user' => $user]);
            }


         }
         else{

            return redirect()->route('home');
         }
    }//end of edit method

    public function activeUser(Request $request , $token){

        $user =User::where('token','=',$token)->get();
        $user[0]->active = true;
        $user[0]->save();
        return view('home.success',['successLogin'=>'حساب کاربری شما فعال شد']);

    }

    public function showAll(){
        if (Session::has('userRole')) {
            $users = User::all();
            return view('show-user', ['users' => $users]);
        }
        else{
            return redirect()->route('home');
        }
    }
    public function delete($id)
    {

        if (Session::has('userRole') and Session::get('userRole')=='admin') {
            $users = new User();
            $user =$users->find($id);
            $user->delete();
            return redirect()->action('UserController@showAll');
        }
        else{
            return redirect()->route('home');
        }
    }//end of show method

    public function showUser(Request $request){

        if(Session::has('userRole')) {

            $personId=$request->input('personId');
            $user = User::where('personId',$personId)->get()->first();

            if($user!=null){
                return view('search-user',['user'=>$user]);
            }
            else{
                return view('search-user',['searchError'=>'موردی یافت نشد']);
            }

        }
        else{

            return redirect()->route('home');

        }

    }//end of showUserBuys

    public function changePassword(Request $request)
    {
        if(Session::has('userRole')) {

            if($request->isMethod('get')){

                return view('home.change-password');
            }
            else{

                $newPassword = $request->input('newPassword');
                $newPasswordRepeat=$request->input('newPasswordRepeat');

                if ($newPassword == $newPasswordRepeat){

                    $user = User::find(Session::get('userId'));
                    $user->password = $newPassword;
                    $user->save();
                    return view('home.success',['success'=>'رمز عبور شما با موفقیت تغییر یافت']);
                }

                else{
                    return view('home.change-password',['message'=>'رمز عبور و تکرار ان با هم برابر نیستند']);
                }

            }
        }
        else{

            return redirect()->route('home');

        }
    }//end of changePassword

    public function createAdmin(Request $request){

        if(Session::has('userRole')) {

            if($request->isMethod('post')) {
                $firstName = str_random(6);
                $lastName = str_random(6);
                $email = $request->input('email');
                $personId = $request->input('personId');
                $password = $request->input('password');
                $studentId = str_random(5);
                $phone = str_random(9);
                $mobile = str_random(9);
                $address = str_random(5);
                $term = 1;
                $job = str_random(5);
                $token = str_random(30);


                $emailError = "";
                $personIdError = "";

                if (User::where('email', '=', $email)->count()) {

                    $emailError = "این ایمیل قبلا ثبت شده است";
                }
                if (User::where('personId', '=', $personId)->count()) {

                    $personIdError = "این کدملی قبلا ثبت شده است";
                }

                if (strlen($emailError) == 0 and strlen($personIdError) == 0 ) {

                    $user = new User();

                    $user->firstName = $firstName;
                    $user->lastName = $lastName;
                    $user->email = $email;
                    $user->personId = $personId;
                    $user->studentId = $studentId;
                    $user->phone = $phone;
                    $user->mobile = $mobile;
                    $user->address = $address;
                    $user->term = $term;
                    $user->active = true;
                    $user->password = $password;
                    $user->token = $token;
                    $user->role = 'admin';
                    $user->job = $job;

                    if ($user->save()) {
                        return view('admin-dashboard', ['$success' => 'اطلاعات شما با موفقیت ثبت گردید']);

                    } else {

                        return view('add-admin', ['faildLogin' => 'عملیات ثبت نام ناموفق بود لطفا دوباره تلاش کنید']);

                    }
                }
                else{
                    return view('add-admin', ['emailError' => $emailError, 'personIdError' => $personIdError]);
                }

            }
            else{
                return view('add-admin');
            }
        }
        else{

            return redirect()->route('home');

        }
    }
}
