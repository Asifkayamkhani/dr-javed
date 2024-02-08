<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;

class TestimonialController extends Controller
{
   public function googleus(){
    return view('backend.testimonial.googleus');
   }
   public function save_google(Request $request){
    $data=$request->all();
    if ($request->file('image')) {
        $file=$request->file('image');
        $file_name=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploades'),$file_name);
        $data['image']=$file_name;
    }
    $form=Testimonial::create($data);
    return redirect('google-table');
   }

   public function g_table(){
    $data=Testimonial::all();
    return view('backend.testimonial.google_table',compact('data'));
   }

   public function g_status($id){
    $data=Testimonial::find($id);
    if ($data->status==1) {
        $data->status=0;
    }else {
        $data->status=1;
    }
    $data->update();
    return redirect('google-table');
   }

   public function g_delete($id){
    $data=Testimonial::find($id);
    $data->delete();
    return redirect('google-table');
   }

   public function g_edit($id){
    $data=Testimonial::find($id);
    return view('backend.testimonial.google_edit',compact('data'));
   }

   public function g_save(Request $request,$id){
    $data=Testimonial::find($id);
    $data->name=$request->name;
    $data->desc=$request->desc;
    $data->status=$request->status;
    $data->update();
    return redirect('google-table');
}


}