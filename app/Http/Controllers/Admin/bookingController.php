<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
class bookingController extends Controller
{
//======================read ke la======================================================
public function index(){
    $data=booking::all();//database se data lana
    return view('admin.booking')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('admin.addbooking');//
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'date'=>'required',
        'name'=>'required',
        'package'=>'required',
        
    ]);
    $crud=new booking;//class name
    $crud->date=$request->date;
    $crud->name=$request->name;
    $crud->package=$request->package;
    $crud->save();
    return redirect('/booking')->withSuccess('Data inserted');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=booking::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.bookingupdate')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=crud::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->date=$request->date;
      $crud->name=$request->name;
      $crud->package=$request->package;
      
      $crud->save();
      return redirect('/booking');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=booking::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/booking');//locatio delete ke bad read page pa jana ko or table
   }


}
