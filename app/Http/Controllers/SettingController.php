<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){

        $setting= new Setting();

        if(Setting::all()->first() != null){
            $setting = Setting::all()->first();
        }else{
            $setting->id = 1;
            $setting->save();
        }
        return view('admin.setting.setting',['setting' => $setting]);
    }
    public function updateSetting(Request $request){
        $setting = Setting::find(1);

        $setting->name = $request['name'];
        $setting->fb_link = $request['fb-link'];
        $setting->google_link = $request['google-link'];
        $setting->phone = $request['phone'];
        $setting->address = $request['address'];
        $setting->update();

        return redirect()->route('setting');
    }
}
