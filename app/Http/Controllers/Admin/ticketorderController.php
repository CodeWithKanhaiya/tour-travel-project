<?php

namespace App\Http\Controllers\Admin;
use App\Models\ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ticketorderController extends Controller
{
  //======================read ke la======================================================
public function index(){
    $data=ticket::all();//database se data lana
    return view('admin.ticket')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('admin.ticketorder');//
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required|email',
        'address'=>'required',
        'money'=>'required',
        'guest'=>'required',
    ]);
    $crud=new ticket;//class name
    $crud->name=$request->name;
    $crud->phone=$request->phone;
    $crud->email=$request->email;
    $crud->address=$request->address;
    $crud->money=$request->money;
    $crud->guest=$request->guest;
   
    $crud->save();
    return redirect('/ticketindex')->withSuccess('Data inserted');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=ticket::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.ticketupdate')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=ticket::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->name=$request->name;
      $crud->phone=$request->phone;
      $crud->email=$request->email;
      $crud->address=$request->address;
      $crud->money=$request->money;
      $crud->guest=$request->guest;
      $crud->save();
      return redirect('/ticketindex');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=ticket::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/ticketindex');//locatio delete ke bad read page pa jana ko or table
   }
  
}
