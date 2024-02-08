<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function galleryus(){
        return view('backend.dinemic.galleryus');
    }
    public function galleryus_save(Request $request){
        $data=$request->all();
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }
        $form=Gallery::create($data);
        return redirect('gallery-table');
    }
    public function g_table(){
        $data=Gallery::all();
        return view('backend.dinemic.gallerytable',compact('data'));
    }
    public function status_gallery($id){
        $data=Gallery::find($id);
        if ($data->status==1) {
            $data->status=0;
        }else {
            $data->status=1;
        }
        $data->update();
        return redirect('gallery-table');
    }
    public function delete_gallery($id){
        $data=Gallery::find($id);
        unlink(public_path("uploades/".$data->image));
        $data->delete();
        session()->flash('success','your image will be delected');
        return redirect('gallery-table');
    }
    public function gallery_edit($id){
        $data=Gallery::find($id);
        return view('backend.dinemic.galleryedit',compact('data'));
    }
    public function edit_update(Request $request,$id){
        $data=Gallery::find($id);
        if ($request->file('image')) {
            $file=$request->file('image');
            $file_name=date('YmdHi').$file-> getClientOriginalName();
            $file->move(public_path('uploades'),$file_name);
            $data['image']=$file_name;
        }else {
            $data['image']=$request->img;
        }
        $data->status=$request->status;
        $data->type=$request->type;
        $data->update();
        return redirect('gallery-table');
    }
}