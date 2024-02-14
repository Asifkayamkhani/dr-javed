<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend;
use Mail;
use App\Mail\DemoMail;
use App\Mail\ContactMail;
use App\Models\Contact;

class BackendController extends Controller
{
  // appointment submit in data base and email. form on appointment page
  public function form_save(Request $request){
    $clientIP = request()->ip();
    if (Backend::where('user_ip',$clientIP)->value('date')==$request->date) {
     session()->flash('error','appointment already booked');
     return back();
    }
    $currentdate=date('Y-m-d');
    // return $request->date;
    if ($currentdate  > $request->date ) {
      session()->flash('error','Date Is Invalid Please Enter Right date');
      return back();
    }
 
    $data=$request->all();
       
    $data['user_ip']=$clientIP;
    $data['status']=0;
    $form=Backend::create($data);
    $mailData = [
      'name' => $request->name,
      'number' => $request->number,
      'date' => $request->date,
      'time' => $request->time,
      'message' => $request->message
      
  ];
   
  Mail::to('Kmadvpain@gmail.com')->send(new DemoMail($mailData));
    return redirect('Confirmation');
  }
    // Contact Details submit on email 
      public function contact_mail(Request $request){
        $data=$request->all();
        $form=Contact::create($data);

      $mailData=[
      'name'=> $request->name,
      'email'=> $request->email,
      'address'=> $request->address,
      'number'=> $request->number,
      'message'=> $request->message
  ];
    Mail::to('Kmadvpain@gmail.com')->send(new ContactMail($mailData));
    session()->flash('success','Your Details Send Successfully');
    return back();
}



  // dashboard show 
  public function admin(){
    return view('backend.layout.admin');
  }


  // patient appointement get data in dashboard
  public function appointment_table(){
    $data=Backend::orderBy('id','desc')->get();
    return view('backend.appointment_table',compact('data'));
  }
  public function status_appointment($id){
    $data=Backend::find($id); 
    if ($data->status==1) {
      $data->status=0;
    }else {
      $data->status=1;
      
    }
    $data->update();
    return redirect('g-table');
  }
  public function delete_appointment($id){
    $data=Backend::find($id);
    $data->delete();
    session()->flash('success','Customer Appointment Delete');
    return redirect('g-table');
  }

   // patient contact get data in dashboard
   public function contact(){
    $contact=Contact::all();
    return view('backend.contact',compact('contact'));
   }

   public function delete_contact($id){
    $data=Contact::find($id);
    $data->delete();
    session()->flash('success','Customer Contact details Delete');
    return redirect('contact');
  }

  
}