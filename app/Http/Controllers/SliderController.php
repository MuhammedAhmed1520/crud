<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function index(){

        $sliders = Slider::all();

        return view('admin.slider.slider',['sliders'=>$sliders]);
    }

    public function sliderAdd(){
        return view('admin.slider.add');
    }
    public function addNewSlider(Request $request){

        $this->validate($request,[
            'title' => 'required|min:5|unique:sliders',
            'desc'  => 'required|min:5',
//            'photo' => 'required',
            'other' => 'required',

        ]);

        $slider = new Slider();
        $slider->title = $request['title'];

        if(Input::hasfile('photo')){
            $file = Input::file('photo');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $slider->photo = $file->getClientOriginalName();
//            $slider->size = $file->getClientsize();

        }
        $slider->desc = $request['desc'];
        $slider->other = $request['other'];
        $slider->save();

        return redirect()->route('slider');
    }
    public function deleteSlider($slider_id){
        $slider = Slider::where('id',$slider_id)->delete();
        return redirect()->route('slider');
    }
    public function sliderEdit($slider_id){

        $slider = Slider::find($slider_id);
        return view('admin.slider.edit',['slider'=>$slider]);
    }
    public function editSlider(Request $request ,$slider_id){

        $this->validate($request,[
//          'title' => 'required|unique:sliders',
//            'desc'  => 'required|min:5',
//            'other' => 'required',

        ]);

        $slider = Slider::find($slider_id);


        if(Input::hasfile('photo')){
            $file = Input::file('photo');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $slider->photo = $file->getClientOriginalName();

        }

            $slider->title = $request['title'];
            $slider->desc = $request['desc'];
            $slider->other = $request['other'];

        $slider->update();

        return redirect()->route('slider');
    }
}
