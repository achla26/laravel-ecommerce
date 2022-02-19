<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 

use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller 
{
    public function index(){
        $model = Banner::all();
        return view('admin.banner',['data'=>$model]);
    }
    public function manage_banner($id=''){
       
        if($id > 0 && $id !=''){
            $model =Banner::find($id)->get();
        }
        else{
            $model ='';
        }
        return view('admin.manage_banner',['data'=>$model]);
    }
    public function insert(Request $request){
        
        if($request->input('banner_id') > 0){
            $image_validate="mimes:jpeg,jpg,png";
        }
        else{
            $image_validate="required|mimes:jpeg,jpg,png";
        }
        $request->validate([ 
            'image'=>$image_validate
        ]);
        $banner_id = $request->input('banner_id');
        
        if($banner_id > 0){
            $model=Banner::find($banner_id);
            $msg = 'Data Updated.';
        }
        else{
            $model = new Banner;
            $msg = 'Data Inserted.';
        }
        if($request->hasfile('image')){
            $image =$request->file('image');
            $ext = $image->extension();
            $image_name = date('YmdHis').'.'.$ext;
            $image->storeAs('/public/media/banner/',$image_name);
            $model->image = $image_name;
        }
            $model->title=$request->input('title');
            $model->title_size=$request->input('title_size');
            $model->title_color=$request->input('title_color');
            $model->title_anim=$request->input('title_anim');
            $model->title_style=$request->input('title_style');
            $model->sub_title=$request->input('sub_title');
            $model->sub_title_size=$request->input('sub_title_size');
            $model->sub_title_color=$request->input('sub_title_color');
            $model->sub_title_anim=$request->input('sub_title_anim');
            $model->sub_title_style=$request->input('sub_title_style');
            $model->description=$request->input('description');
            $model->description_size=$request->input('description_size');
            $model->description_color=$request->input('description_color');
            $model->description_anim=$request->input('description_anim');
            $model->description_style=$request->input('description_style');
            $model->position=$request->input('position');
            $model->status=$request->input('status');
            $model->title=$request->input('title');
            $model->btn_text=$request->input('btn_text');
            $model->btn_link=$request->input('btn_link');
            $model->type=1;//$request->input('type');
            $model->status=1;
        
        $model->save();
        
        $request->session()->flash('success',$msg);
        return redirect('admin/Banner');
        
    }
    public function delete(Request $request,$id){
        $model=Banner::find($id);
        $model->delete();
        $request->session()->flash('success','Data Removed.');
        return redirect('admin/Banner');

    }

    public function status(Request $request , $status ,$id){
        $model = Banner::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('success','Status Updated.');
        return redirect('admin/Banner');
    }
    
}
