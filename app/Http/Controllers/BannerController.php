<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
   public function bannerus(){
    return view('backend.banner.bannerus');
   }
   public function save_banner(Request $request){
    $data=$request->all();
    if ($request->file('image')) {
        $file=$request->file('image');
        $file_name=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploades'),$file_name);
        $data['image']=$file_name;
    }
    $form=Banner::create($data);
    return redirect('banner-table');
   }

   public function b_table(){
    $data=Banner::all();
    return view('backend.banner.banner_table',compact('data'));
   }

   public function b_status($id){
    $data=Banner::find($id);
    if ($data->status==1) {
        $data->status=0;
    }else {
        $data->status=1;
    }
    $data->update();
    return redirect('banner-table');
   }

   public function b_delete($id){
    $data=Banner::find($id);
    $data->delete();
    return redirect('banner-table');
   }

   public function b_edit($id){
    $data=Banner::find($id);
    return view('backend.banner.banner_edit',compact('data'));
   }

   public function b_save(Request $request,$id){
    $data=banner::find($id);
    if ($request->file('image')) {
        $file=$request->file('image');
        $file_name=date('YmdHi').$file-> getClientOriginalName();
        $file->move(public_path('uploades'),$file_name);
        $data['image']=$file_name;
    }else {
        $data['image']=$request->img;
    }
    $data->status=$request->status;
    $data->update();
    return redirect('banner-table');
}


}
