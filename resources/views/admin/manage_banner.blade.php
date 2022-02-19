@extends('admin/layout')
@section('title')
Banner
@endsection
@section('header')
Banner
@endsection
@section('banner_select','active')
@section('main')
@php
if(!empty($data)){
foreach($data as $item){
   $banner_id = $item->id;
   $title=$item->title;
   $title_size=$item->title_size;
   $title_color=$item->title_color;
   $title_anim=$item->title_anim;
   $title_style=$item->title_style;
   $sub_title=$item->sub_title;
   $sub_title_size=$item->sub_title_size;
   $sub_title_color=$item->sub_title_color;
   $sub_title_anim=$item->sub_title_anim;
   $sub_title_style=$item->sub_title_style;
   $description=$item->description;
   $description_size=$item->description_size;
   $description_color=$item->description_color;
   $description_anim=$item->description_anim;
   $description_style=$item->description_style;
   $position=$item->position;
   $status=$item->status;
   $title=$item->title;
   $btn_text=$item->btn_text;
   $btn_link=$item->btn_link;
   $type=$item->type;
   $banner_image=$item->image;
}            
}            
else{
$banner_id =0;
$banner_name = $banner_slug='';
$title=$item->title;
   $title_size='';
   $title_color='';
   $title_anim='';
   $title_style='';
   $sub_title='';
   $sub_title_size='';
   $sub_title_color='';
   $sub_title_anim='';
   $sub_title_style='';
   $description='';
   $description_size='';
   $description_color='';
   $description_anim='';
   $description_style='';
   $position='';
   $status='';
   $title='';
   $btn_text='';
   $btn_link='';
   $type='';
$banner_image='image_preview.png';
}
@endphp
<div class="text-left">
   <a href="{{url('admin/Banner/Manage')}}"><button type="button" class="btn bg-navy btn-flat margin">Back</button>
   </a>
</div>
<div class="box box-info">
   <div class="box-header">
      <h3 class="box-title">Banner</h3>
      @if(session('success'))
      <x-alert type="success" :msg="session('success')"/>
      @endif
   </div>
   <form method="post" action="{{route('banner.insert')}}" enctype="multipart/form-data">
      @csrf
      <div class="box-body">
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Title</label>
            <div class="col-lg-6">
               <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title Text" value="{{$title}}">           
            </div>
            <label  class="col-lg-2 col-form-label text-center">Color *</label>
            <div class="col-lg-1">
               <input type="color" name="title_color"  class="form-control " value="{{$title_color}}">        
            </div>
         </div>
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Size *<span> (px)</span></label>
            <div class="col-lg-2">
               <input type="number" name="title_size"  class="form-control " value="{{$title_size}}">        
            </div>
            <label  class="col-lg-2 col-form-label text-center">Style *</label>
            <div class="col-lg-2">
               <select class="form-control" id="title_style" name="title_style">
                  <option style="font-family: arial" @if($title_style =='arial'){{"selected=selected"}} @endif>Arial</option>
                  <option style="font-family: 'Times New Roman'"@if($title_style =='Times New Roman'){{"selected=selected"}} @endif>Times New Roman</option>
                  <option style="font-family: Verdana"@if($title_style =='Verdana'){{"selected=selected"}} @endif>Verdana</option>
                  <option style="font-family: 'Comic Sans Serif'"@if($title_style =='Comic Sans Serif'){{"selected=selected"}} @endif>Comic Sans Serif</option>
                  <option style="font-family: 'Trebuchet MS'"@if($title_style =='Trebuchet MS'){{"selected=selected"}} @endif>Trebuchet MS</option>
               </select>
            </div>
            <label  class="col-lg-2 col-form-label text-center">Animation *</label>
            <div class="col-lg-2">
               <select class="form-control" id="title_anim" name="title_anim">
                  <option value="fadeIn" @if($title_style =='fadeIn'){{"selected=selected"}} @endif>fadeIn</option>
                  <option value="fadeInDown" @if($title_style =='fadeInDown'){{"selected=selected"}} @endif>fadeInDown</option>
                  <option value="fadeInLeft" @if($title_style =='fadeInLeft'){{"selected=selected"}} @endif>fadeInLeft</option>
                  <option value="fadeInRight" @if($title_style =='fadeInRight'){{"selected=selected"}} @endif>fadeInRight</option>
                  <option value="fadeInUp" @if($title_style =='fadeInUp'){{"selected=selected"}} @endif>fadeInUp</option>
                  <option value="flip" @if($title_style =='flip'){{"selected=selected"}} @endif>flip</option>
                  <option value="flipInX" @if($title_style =='flipInX'){{"selected=selected"}} @endif>flipInX</option>
                  <option value="flipInY" @if($title_style =='flipInY'){{"selected=selected"}} @endif>flipInY</option>
                  <option value="slideInUp" @if($title_style =='slideInUp'){{"selected=selected"}} @endif>slideInUp</option>
                  <option value="slideInDown" @if($title_style =='slideInDown'){{"selected=selected"}} @endif>slideInDown</option>
                  <option value="slideInLeft" @if($title_style =='slideInLeft'){{"selected=selected"}} @endif>slideInLeft</option>
                  <option value="slideInRight" @if($title_style =='slideInRight'){{"selected=selected"}} @endif>slideInRight</option>
                  <option value="rollIn" @if($title_style =='rollIn'){{"selected=selected"}} @endif>rollIn</option>
               </select>
            </div>
         </div>
         <hr>
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Sub Title</label>
            <div class="col-lg-6">
               <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Enter Sub Title Text" value="{{$sub_title}}">           
            </div>
            <label  class="col-lg-2 col-form-label text-center">Color *</label>
            <div class="col-lg-1">
               <input type="color" name="sub_title_color"  class="form-control " value="{{$sub_title_color}}">        
            </div>
         </div>
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Size *<span> (px)</span></label>
            <div class="col-lg-2">
               <input type="number" name="sub_title_size"  class="form-control " value="{{$sub_title_size}}">        
            </div>
            <label  class="col-lg-2 col-form-label text-center">Style *</label>
            <div class="col-lg-2">
               <select class="form-control" id="sub_title_style" name="sub_title_style">
                  <option style="font-family: arial" @if($sub_title_style =='arial'){{"selected=selected"}} @endif>Arial</option>
                  <option style="font-family: 'Times New Roman'"@if($sub_title_style =='Times New Roman'){{"selected=selected"}} @endif>Times New Roman</option>
                  <option style="font-family: Verdana"@if($sub_title_style =='Verdana'){{"selected=selected"}} @endif>Verdana</option>
                  <option style="font-family: 'Comic Sans Serif'"@if($sub_title_style =='Comic Sans Serif'){{"selected=selected"}} @endif>Comic Sans Serif</option>
                  <option style="font-family: 'Trebuchet MS'"@if($sub_title_style =='Trebuchet MS'){{"selected=selected"}} @endif>Trebuchet MS</option>
               </select>
            </div>
            <label  class="col-lg-2 col-form-label text-center">Animation *</label>
            <div class="col-lg-2">
               <select class="form-control" id="sub_title_anim" name="sub_title_anim">
                  <option value="fadeIn" @if($sub_title_style =='fadeIn'){{"selected=selected"}} @endif>fadeIn</option>
                  <option value="fadeInDown" @if($sub_title_style =='fadeInDown'){{"selected=selected"}} @endif>fadeInDown</option>
                  <option value="fadeInLeft" @if($sub_title_style =='fadeInLeft'){{"selected=selected"}} @endif>fadeInLeft</option>
                  <option value="fadeInRight" @if($sub_title_style =='fadeInRight'){{"selected=selected"}} @endif>fadeInRight</option>
                  <option value="fadeInUp" @if($sub_title_style =='fadeInUp'){{"selected=selected"}} @endif>fadeInUp</option>
                  <option value="flip" @if($sub_title_style =='flip'){{"selected=selected"}} @endif>flip</option>
                  <option value="flipInX" @if($sub_title_style =='flipInX'){{"selected=selected"}} @endif>flipInX</option>
                  <option value="flipInY" @if($sub_title_style =='flipInY'){{"selected=selected"}} @endif>flipInY</option>
                  <option value="slideInUp" @if($sub_title_style =='slideInUp'){{"selected=selected"}} @endif>slideInUp</option>
                  <option value="slideInDown" @if($sub_title_style =='slideInDown'){{"selected=selected"}} @endif>slideInDown</option>
                  <option value="slideInLeft" @if($sub_title_style =='slideInLeft'){{"selected=selected"}} @endif>slideInLeft</option>
                  <option value="slideInRight" @if($sub_title_style =='slideInRight'){{"selected=selected"}} @endif>slideInRight</option>
                  <option value="rollIn" @if($sub_title_style =='rollIn'){{"selected=selected"}} @endif>rollIn</option>
               </select>
            </div>
         </div>
         <hr>
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Description</label>
            <div class="col-lg-6">
               <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description Text" value="{{$description}}">           
            </div>
            <label  class="col-lg-2 col-form-label text-center">Color *</label>
            <div class="col-lg-1">
               <input type="color" name="description_color"  class="form-control " value="{{$description_color}}">        
            </div>
         </div>
         <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Size *<span> (px)</span></label>
            <div class="col-lg-2">
               <input type="number" name="description_size"  class="form-control " value="{{$description_size}}">        
            </div>
            <label  class="col-lg-2 col-form-label text-center">Style *</label>
            <div class="col-lg-2">
               <select class="form-control" id="description_style" name="description_style">
                  <option style="font-family: arial" @if($description_style =='arial'){{"selected=selected"}} @endif>Arial</option>
                  <option style="font-family: 'Times New Roman'"@if($description_style =='Times New Roman'){{"selected=selected"}} @endif>Times New Roman</option>
                  <option style="font-family: Verdana"@if($description_style =='Verdana'){{"selected=selected"}} @endif>Verdana</option>
                  <option style="font-family: 'Comic Sans Serif'"@if($description_style =='Comic Sans Serif'){{"selected=selected"}} @endif>Comic Sans Serif</option>
                  <option style="font-family: 'Trebuchet MS'"@if($description_style =='Trebuchet MS'){{"selected=selected"}} @endif>Trebuchet MS</option>
               </select>
            </div>
            <label  class="col-lg-2 col-form-label text-center">Animation *</label>
            <div class="col-lg-2">
               <select class="form-control" id="description_anim" name="description_anim">
                  <option value="fadeIn" @if($description_style =='fadeIn'){{"selected=selected"}} @endif>fadeIn</option>
                  <option value="fadeInDown" @if($description_style =='fadeInDown'){{"selected=selected"}} @endif>fadeInDown</option>
                  <option value="fadeInLeft" @if($description_style =='fadeInLeft'){{"selected=selected"}} @endif>fadeInLeft</option>
                  <option value="fadeInRight" @if($description_style =='fadeInRight'){{"selected=selected"}} @endif>fadeInRight</option>
                  <option value="fadeInUp" @if($description_style =='fadeInUp'){{"selected=selected"}} @endif>fadeInUp</option>
                  <option value="flip" @if($description_style =='flip'){{"selected=selected"}} @endif>flip</option>
                  <option value="flipInX" @if($description_style =='flipInX'){{"selected=selected"}} @endif>flipInX</option>
                  <option value="flipInY" @if($description_style =='flipInY'){{"selected=selected"}} @endif>flipInY</option>
                  <option value="slideInUp" @if($description_style =='slideInUp'){{"selected=selected"}} @endif>slideInUp</option>
                  <option value="slideInDown" @if($description_style =='slideInDown'){{"selected=selected"}} @endif>slideInDown</option>
                  <option value="slideInLeft" @if($description_style =='slideInLeft'){{"selected=selected"}} @endif>slideInLeft</option>
                  <option value="slideInRight" @if($description_style =='slideInRight'){{"selected=selected"}} @endif>slideInRight</option>
                  <option value="rollIn" @if($description_style =='rollIn'){{"selected=selected"}} @endif>rollIn</option>
               </select>
            </div>
         </div>

         <hr>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-center">Button Text</label>
            <div class="col-lg-4">
               <input type="text" class="form-control" name="btn_text" id="btn_text" placeholder="Enter Button Text" value="{{$btn_text}}">
            </div>
            <label class="col-lg-2 col-form-label text-center">Button Link *</label>
            <div class="col-lg-4">
               <input type="text" name="btn_link" placeholder="Enter Button Link" class="form-control " value="{{$btn_link}}">
            </div>
         </div>

          <div class="form-group row">
            <label  class="col-lg-2 col-form-label text-center">Position*</label>
            <div class="col-lg-2">
               <select class="form-control" id="position" name="position">
                  <option value="left" @if($position =='left'){{"selected=selected"}} @endif>Left</option>
                  <option value="center" @if($position =='center'){{"selected=selected"}} @endif>Center</option>
                  <option value="right" @if($position =='right'){{"selected=selected"}} @endif>Right</option>
               </select>
            </div>
            
         
            <input type="hidden" name="banner_id" value="{{$banner_id}}">
            <label  class="col-lg-2 col-form-label text-center">Slider Image*</label>
            <div class="col-lg-6">
               <input type="file" class="form-control" name="image" onchange="document.getElementById('para4').src = window.URL.createObjectURL(this.files[0])">
               <span class="error_msg">
                @error('image')
                {{$message}}
                @enderror
                </span><br>
               <div class="col-lg-12">
                  <img id="para4" src="{{asset('storage/media/banner/'.$banner_image)}}" alt="" width="100%" height="250px" style="border: 1px solid #e3e6f0;padding: 2px;">
               </div>
            </div>
         </div>
        
      </div>
      <div class="box-footer">
         <center><a href="{{url('admin/Banner')}}" class="btn bg-orange btn-flat margin" >Close</a><input name="banner_add" value="Save" type="submit" class="btn bg-maroon btn-flat margin" id="Save"></center>
      </div>
   </form>
   <!-- /.box-body -->
</div>
@endsection