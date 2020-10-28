<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class SettingController extends Controller
{
     public function edit(Request $r)
    {
        $settingData = DB::SELECT('SELECT * FROM setting');
        $singleData = DB::SELECT('select * from setting where id=?',[1]);
        return view('admin.setting-edit',
            [
                'settingData'=>$settingData,
                'singleData' => $singleData
            ]    
        );
    }

    public function update(Request $r, $id)
    {
        $setting = [];

        $setting['logo_text'] = $r->input('logo_text');
        $setting['moto'] = $r->input('moto');
        $setting['address'] = $r->input('address');
        $setting['google_map'] = $r->input('google_map');
        $setting['mail'] = $r->input('mail');
        $setting['phone'] = $r->input('phone');
        $setting['fb'] = $r->input('fb');
        $setting['tw'] = $r->input('tw');
        $setting['ln'] = $r->input('ln');
        $setting['call_dev'] = $r->input('call_dev');
        $setting['call_train'] = $r->input('call_train');
        $setting['call_services'] = $r->input('call_services');
        $setting['call_center'] = $r->input('call_center');
        $setting['copy_left'] = $r->input('copy_left');
        $setting['copy_left_link'] = $r->input('copy_left_link');
        $setting['copy_right'] = $r->input('copy_right');
        $setting['copy_right_link'] = $r->input('copy_right_link');
        $setting['event_title'] = $r->input('event_title');
        $setting['event_link'] = $r->input('event_link');
        $setting['status']= $r->input('status');
        $event_image = $r->file('event_img');
        $image = $r->file('image');

        if($image != NULL){
            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $setting['logo'] = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $setting['logo'] = $r->input('prev-img');
        }
        if($event_image != NULL){
            // image 
            $event_image_name =  time() . '.' . $event_image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $event_image->move($path,$event_image_name); //file store 
            $setting['event_img'] = 'assets/app-images/'.$event_image_name; //save on DB
        }else{
            $setting['event_img'] = $r->input('prev-event');
        }

        DB::table('setting')
            ->where('id',$id)
            ->update($setting);

        Session::flash('msg','setting updated successfully !');
        
        return redirect('/admin/setting');
    }

    
    public function destroy($id)
    {
        
        DB::update('update setting set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','setting archrived successfully !');
        
        return redirect('/admin/setting');
    }
}
