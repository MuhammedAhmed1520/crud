<?php

namespace App\Http\Controllers;

use App\Service;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ServiceController extends Controller
{
    public function index(){

        $services = Service::all();

        return view('admin.service.service',['services'=>$services]);    }
    public function serviceAdd(){

        $sliders = Slider::all();
        return view('admin.service.add',['sliders'=>$sliders]);
    }
    public function addNewService(Request $request){

        $this->validate($request,[
            'name' => 'required|min:5|unique:services',
            'desc'  => 'required|min:5',
            'photo' => 'required',

        ]);

        $service = new Service();
        $service->name = $request['name'];

        if(Input::hasfile('photo')){
            $file = Input::file('photo');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $service->photo = $file->getClientOriginalName();
//            $slider->size = $file->getClientsize();

        }
        $service->desc = $request['desc'];
        $service->cat_id = $request['cat_id'];
        $service->save();

        return redirect()->route('service');
    }
    public function deleteService($service_id){
        $service = Service::where('id',$service_id)->delete();
        return redirect()->route('service');
    }
    public function serviceEdit($service_id){

        $service = Service::find($service_id);
        $sliders = Slider::all();
        return view('admin.service.edit',['service'=>$service,'sliders'=>$sliders]);
    }
    public function editService(Request $request ,$service_id){

        $this->validate($request,[
//            'name' => 'required|unique:services',
//            'desc'  => 'required|min:5',

        ]);

        $service = Service::find($service_id);
        $service->name = $request['title'];
        if(Input::hasfile('photo')){

            $file = Input::file('photo');
            $file->move(public_path().'/',$file->getClientOriginalName());
            $service->photo = $file->getClientOriginalName();
        }
        $service->desc = $request['desc'];
        $service->cat_id = $request['cat_id'];

        $service->update();

        return redirect()->route('service');
    }
}
