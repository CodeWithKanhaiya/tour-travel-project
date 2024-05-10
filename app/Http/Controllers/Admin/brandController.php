<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\brand;
class brandController extends Controller
{
       //======================read ke la======================================================
   public function index(){
    $data=brand::all();//database se data lana
    return view('admin.brand')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('admin.addbrand');
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'brandname'=>'required',    
        
    ]);
    $crud=new brand;//class name
    $crud->brandname=$request->brandname;
    $crud->save();
    return redirect('/brand')->withSuccess('Data inserted.');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=brand::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.brandupdate')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=brand::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->brandname=$request->brandname;
      
      $crud->save();
      return redirect('/brand');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=brand::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/brand');//locatio delete ke bad read page pa jana ko or table
   } 

}
