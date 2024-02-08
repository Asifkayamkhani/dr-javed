<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Backend;
use App\Models\Service;
use App\Models\Banner;
use App\Models\testimonial;

class FrontedController extends Controller
{
   public function home(){
      $banner=Banner::where('status',1)->get();
      $testimonial=testimonial::where('status',1)->get();
      $services=Service::where('status',1)->get();
      $data=Gallery::where('status',1)->get();
    return view('fronted.index',compact('data','services','banner','testimonial'));
   }
   public function about(){
    return view('fronted.about');
   }
   public function services(){
      $data=Service::where('status',1)->get();
    return view('fronted.service',compact('data'));
   }
   public function gallery(){
      $data=Gallery::where('status',1)->get();
    return view('fronted.gallery',compact('data'));
   }
   public function appointment(){
    return view('fronted.appointment');
   }
   public function contact(){
    return view('fronted.contact');
   }
   public function confirmation(){
      return view('fronted.confirmation');
     }
     public function profile(){
      $clientIP = \Request::getClientIp(true);
      $data=Backend::where('user_ip',$clientIP)->select('name','date','time','status')->orderBy('id','desc')->get();
      return view('fronted.profile',compact('data'));
     }
}