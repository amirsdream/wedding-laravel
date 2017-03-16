<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function create(Request $request){

        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            if($request->isMethod('post')){

                $contactFirst = Contact::first();

                if($contactFirst != null) {

                    $contactFirst->dateOfWork = $request->input('dateOfWork');
                    $contactFirst->address = $request->input('address');
                    $contactFirst->email = $request->input('email');
                    $contactFirst->phone = $request->input('phone');
                    //$contactFirst->telegramLink = $request->input('telegramLink');
                    $contactFirst->save();
                }
                else{
                    $contact = new Contact();
                    $contact->dateOfWork = $request->input('dateOfWork');
                    $contact->address = $request->input('address');
                    $contact->email = $request->input('email');
                    $contact->phone = $request->input('phone');
                    //$contact->telegramLink = $request->input('telegramLink');
                    $contact->save();

                }

                return view('add-contact',['success'=>'عمل شما با موفقیت انجام شد','contact'=>Contact::first()]);
            }
            else{

                $contact=Contact::first();

                return view('add-contact', ['contact' => $contact]);
            }
        }
        else{

            return redirect()->route('home');
        }
    }

}
