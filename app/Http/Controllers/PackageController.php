<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order2;
use App\Order3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function addOrder(Request $request){


        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            if($request->isMethod('post')){

                $titleOne = $request->input('titleOne');
                $titleTwo = $request->input('titleTwo');
                $body = $request->input('body');
                $file = $request->file('image');
                $dir = "public/image";

                if(!is_null($file) ) {

                    $AboutFirst = Order::first();

                    if ($AboutFirst != null) {

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        Storage::delete($AboutFirst->imageName);

                        $AboutFirst->titleOne = $titleOne;
                        $AboutFirst->titleTwo = $titleTwo;
                        $AboutFirst->imageName = $fileName;
                        $AboutFirst->save();

                    } else {

                        $About = new Order();
                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        $About->titleOne = $titleOne;
                        $About->titleTwo = $titleTwo;
                        $About->body = $body;
                        $About->imageName = $fileName;
                        $About->save();

                    }

                    return view('add-order', ['success' => 'عمل شما با موفقیت انجام شد', 'aboute' => Order::first()]);
                }

                else{

                    return view('add-order',['state'=>'لطفا فایل خود را آپلود نمایید']);
                }
            }
            else{

                $About=Order::first();

                return view('add-order', ['aboute' => $About]);
            }
        }
        else{

            return redirect()->route('home');
        }

    }//addOrder end

    public function addOrderTwo(Request $request){


        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            if($request->isMethod('post')){

                $titleOne = $request->input('titleOne');
                $titleTwo = $request->input('titleTwo');
                $body = $request->input('body');
                $file = $request->file('image');
                $dir = "public/image";

                if(!is_null($file) ) {

                    $AboutFirst = Order2::first();

                    if ($AboutFirst != null) {

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        Storage::delete($AboutFirst->imageName);

                        $AboutFirst->titleOne = $titleOne;
                        $AboutFirst->titleTwo = $titleTwo;
                        $AboutFirst->imageName = $fileName;
                        $AboutFirst->save();

                    } else {

                        $About = new Order2();
                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        $About->titleOne = $titleOne;
                        $About->titleTwo = $titleTwo;
                        $About->body = $body;
                        $About->imageName = $fileName;
                        $About->save();

                    }

                    return view('add-order-two', ['success' => 'عمل شما با موفقیت انجام شد', 'aboute' => Order2::first()]);
                }

                else{

                    return view('add-order-two',['state'=>'لطفا فایل خود را آپلود نمایید']);
                }
            }
            else{

                $About=Order2::first();

                return view('add-order-two', ['aboute' => $About]);
            }
        }
        else{

            return redirect()->route('home');
        }

    }//addOrderTwo end

    public function addOrderThree(Request $request){


        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            if($request->isMethod('post')){

                $titleOne = $request->input('titleOne');
                $titleTwo = $request->input('titleTwo');
                $body = $request->input('body');
                $file = $request->file('image');
                $dir = "public/image";

                if(!is_null($file) ) {

                    $AboutFirst = Order3::first();

                    if ($AboutFirst != null) {

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        Storage::delete($AboutFirst->imageName);

                        $AboutFirst->titleOne = $titleOne;
                        $AboutFirst->titleTwo = $titleTwo;
                        $AboutFirst->imageName = $fileName;
                        $AboutFirst->save();

                    } else {

                        $About = new Order3();
                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        $About->titleOne = $titleOne;
                        $About->titleTwo = $titleTwo;
                        $About->body = $body;
                        $About->imageName = $fileName;
                        $About->save();

                    }

                    return view('add-order-three', ['success' => 'عمل شما با موفقیت انجام شد', 'aboute' => Order3::first()]);
                }

                else{

                    return view('add-order-three',['state'=>'لطفا فایل خود را آپلود نمایید']);
                }
            }
            else{

                $About=Order3::first();

                return view('add-order-three', ['aboute' => $About]);
            }
        }
        else{

            return redirect()->route('home');
        }

    }//addOrderThree end

}
