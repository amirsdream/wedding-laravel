<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function create(Request $request){

        $message = new Message();
        $message->email = $request->input('email');
        $message->firstName = $request->input('firstName');
        $message->lastName = $request->input('lastName');
        $message->message = $request->input('message');
        $message->subject = $request->input('subject');

        $message->save();
        return view('home');


    }


    public function showAll(){

        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            $messages=Message::paginate(10);
            //dd($messages);
            return view('show-messages',['messages'=>$messages]);

        }
        else{

            return redirect()->route('home');
        }
    }

    public function delete($id){

        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {
            $message = Message::find($id);
            $message->delete();
            return redirect()->action('MessageController@showAll');
        }
        else{

            return redirect()->route('home');
        }
    }

    public function show($id){

        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {
            $message = Message::find($id);

            return view('show-message',['message'=>$message]);
        }
        else{

            return redirect()->route('home');
        }
    }
}
