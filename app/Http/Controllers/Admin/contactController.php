<?php

namespace App\Http\Controllers\Admin;
use App\Models\crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    
//======================read ke la======================================================
public function index(){
    $data=crud::all();//database se data lana
    return view('admin.contactindex')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('travelproject.contact');//
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'message'=>'message',
    ]);
    $crud=new crud;//class name
    $crud->name=$request->name;
    $crud->email=$request->email;
    $crud->phone=$request->phone;
    $crud->message=$request->message;
    $crud->save();
    return redirect('/contactindex')->withSuccess('Data inserted');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=crud::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.updatecontactform')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=crud::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->name=$request->name;
      $crud->email=$request->email;
      $crud->phone=$request->phone;
      $crud->message=$request->message;
      $crud->save();
      return redirect('/contactindex');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=crud::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/contactindex');//locatio delete ke bad read page pa jana ko or table
   }

}


