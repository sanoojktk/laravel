<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
   public function AddContact()
   {

   return view('add_contact');
}

   public function AllContact()
   {
  $contacts = DB::table('products')
   ->get();
   return view('all_contact')->with('all_contacts',$contacts);
}

   public function InsertContact(Request $request)
   {

   $data =  array();
   $data['name']= $request->name;
   $data['email']= $request->email;
   $data['phone']= $request->phone;

      $st = DB::table('products')
      ->insert($data);
      if ($st) {
      	$notification = array(
      		'message' => 'Contact Added Succssfully', 
      		'alert-type'=>'success');

      	return Redirect()->back()->with($notification);
      }else{
      	echo "error";
      }
}

public function DeleteContact($id){

	$dlt=DB::table('products')
	->where('id',$id)
    ->delete();

if ($dlt) {
      	$notification = array(
      		'message' => 'Contact Delete Succssfully', 
      		'alert-type'=>'success');

      	return Redirect()->back()->with($notification);
      }else{
      	echo "error";
      }

}


public function ShowContact($id){

$con=DB::table('products')
->where('id',$id)
->first();

return view('show_data')->with('sngl_con',$con);

}

public function EditContact($id){
	$des=DB::table('products')->where('id',$id)->first();
	return view('edit_contact')->with('sngl_view',$des);

}

public function UpdateContact(Request $request,$id){


$data= array();

$data['name']=$request->name;
$data['email']=$request->email;
$data['phone']=$request->phone;
      
      $contactupdate=DB::table('products')
              ->where('id',$id)
              ->update($data);

              if ($contactupdate) {
         $notification = array(
            'message' => 'Contact Update Succssfully', 
            'alert-type'=>'success');

         return Redirect()->route('all.contact')->with($notification);
      }else{
         echo "error";
      }
}





}
