<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
class categoryController extends Controller
{
    //======================read ke la======================================================
   public function index(){
    $data=category::all();//database se data lana
    return view('admin.category')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('admin.addcategory');
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'categoryname'=>'required',    
        
    ]);
    $crud=new category ;//class name
    $crud->categoryname=$request->categoryname;
    $crud->save();
    return redirect('/category')->withSuccess('Data inserted.');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=category::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.categoryupdate')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=category::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->categoryname=$request->categoryname;
      
      $crud->save();
      return redirect('/category');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=category::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/category');//locatio delete ke bad read page pa jana ko or table
   } 



}
