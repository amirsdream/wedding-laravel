<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
        public function create(Request $request){

            if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

                if($request->isMethod('post')){

                    $sliderFirst = Slider::first();
                   

                    if($sliderFirst != null) {

                        $file = $request->file('image');
                        $dir = "public/image";

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);
                        Storage::delete($sliderFirst->image_name);

                        $sliderFirst->image_name = $fileName;
                        $sliderFirst->titleOne = $request->input('titleOne');
                        $sliderFirst->titleTwo = $request->input('titleTwo');

                        $sliderFirst->save();
                    }
                    else{

                        $slider = new Slider();
                        $file = $request->file('image');
                        $dir = "public/image";

                        $fileName = substr(Storage::disk('local')->put($dir, $file), 13);

                        $slider->image_name = $fileName;
                        $slider->titleOne = $request->input('titleOne');
                        $slider->titleTwo = $request->input('titleTwo');
                        $slider->save();

                    }

                    return view('add-slider-image',['success'=>'عمل شما با موفقیت انجام شد','slider'=>Slider::first()]);
                }
                else{

                    $slider=Slider::first();

                    return view('add-slider-image', ['slider' => $slider]);
                }
            }
            else{

                return redirect()->route('home');
            }
        }//end of create method

    public function show(){

        if (Session::has('userRole') and Session::get('userRole')=='admin' ) {

            $sliders = Slider::all();
            return view('delete-slider', ['sliders' => $sliders]);
        }
        else{

            return redirect()->route('home');
        }
    }//end of show method

    public  function delete($id){

        $slider = Slider::find($id);
        $name = $slider->name;
        $fileName = "public/image/".$name;
        try{
            Storage::delete($fileName);
            $slider->delete();
            return redirect()->action('SliderController@show');
        }
        catch (\Exception $ex){
            return view('delete-slider', ['deleteError' => 'دوباره تلاش کنید']);
        }
    }//end of delete method



}
