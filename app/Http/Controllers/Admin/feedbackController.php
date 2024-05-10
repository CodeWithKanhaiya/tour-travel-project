<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;
class feedbackController extends Controller
{
//======================read ke la======================================================
public function index(){
    $data=feedback::all();//database se data lana
    return view('admin.feedback')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
   }
  //==========================form ke call ke la========================================================
   public function create(){
     return view('admin.addfeedback');//
   }
//==========================form validation ke la======================================================
   public function insert(Request $request){
    $request->validate([
        'date'=>'required',
        'details'=>'required',
        'rate'=>'required',
        'feedback'=>'required',
        
    ]);
    $crud=new feedback;//class name
    $crud->date=$request->date;
    $crud->details=$request->details;
    $crud->rate=$request->rate;
    $crud->feedback=$request->feedback;
    $crud->save();
    return redirect('/feedback')->withSuccess('Data inserted');//location read page pa jana ko or table
   }
//==========================form update ke la=======================================================
   public function updateData($id){
        $data=feedback::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
        return  view('admin.feedbackupdate')->withData($data);
   }
//=====================form update validation ke la==================================
   public function postData(Request $request){
      $crud=feedback::where('id',$request->id)->first();///crud class he model ke unde wala
      $crud->date=$request->date;
      $crud->details=$request->details;
      $crud->rate=$request->rate;
      $crud->feedback=$request->feedback;
      
      $crud->save();
      return redirect('/feedback');//location read page pa jana ko or table// url crud he
   }
//=====================delete ke la==================================================
   public function delete($id){
      $crud=feedback::where('id',$id)->delete();//crud class name model ke under wala he
      return redirect('/feedback');//locatio delete ke bad read page pa jana ko or table
   }



}
