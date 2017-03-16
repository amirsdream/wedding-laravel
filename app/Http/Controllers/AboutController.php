<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function create(Request $request){


        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            if($request->isMethod('post')){

                $title = $request->input('title');
                $body = $request->input('body');
                $file = $request->file('image');
                $dir = "public/image";

                if(!is_null($file) ) {

                    $AboutFirst = About::first();

                    if ($AboutFirst != null) {

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        Storage::delete($AboutFirst->imageName);

                        $AboutFirst->title = $title;
                        $AboutFirst->body = $body;
                        $AboutFirst->imageName = $fileName;
                        $AboutFirst->save();

                    } else {

                        $About = new About();
                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        $About->title = $title;
                        $About->body = $body;
                        $About->imageName = $fileName;
                        $About->save();

                    }

                    return view('add-aboute', ['success' => 'عمل شما با موفقیت انجام شد', 'aboute' => About::first()]);
                }

                else{

                    return view('add-aboute',['state'=>'لطفا فایل خود را آپلود نمایید']);
                }
            }
            else{

                $About=About::first();

                return view('add-aboute', ['aboute' => $About]);
            }
        }
        else{

            return redirect()->route('home');
        }

    }
}
