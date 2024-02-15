<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function servicesus(){
        return view('backend.dinemic.serviceus');
    }
    public function services_save(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }
        if ($request->file('video')) {
            $file=$request->file('video');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['video']=$file_name;
        }
        $form=Service::create($data);
        return redirect('services-table');
    }
    public function s_table(){
        $data=Service::all();
        return view('backend.dinemic.servicetable',compact('data'));
    }
    public function status_services($id){
        $data=Service::find($id);
        if ($data->status==1) {
            $data->status=0;
        }else {
            $data->status=1;
        }
        $data->update();
        return redirect('services-table');
    }
    public function delete_services($id){
        $data=Service::find($id);
        unlink(public_path("uploades/".$data->image));
        $data->delete();
        session()->flash('success','your image will be delected');
        return redirect('services-table');
    }
    public function services_edit($id){
        $data=Service::find($id);
        return view('backend.dinemic.serviceedit',compact('data'));
    }
    public function edit_update(Request $request,$id){
        $data=Service::find($id);
        $data->name=$request->name;
        $data->describtion=$request->describtion;
        $data->details=$request->details;

        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }else {
            $data['image']=$request->img;
        }

        if ($request->file('video')) {
            $file=$request->file('video');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['video']=$file_name;
        }else {
            $data['video']=$request->img;
        }
        $data->status=$request->status;
        $data->update();
        return redirect('services-table');
    }
}