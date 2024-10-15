<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\ContactDetail;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class ContactUsController extends Controller
{
    public function list(Request $request){
        $data = ContactDetail::first();
          return view("admin.contact_us.create",compact('data'));
      }
  
      public function create(Request $request){
          $data= ContactDetail::first();
          if(!empty($data)){
           return view("admin.contact_us.create",compact('data'));
          }
              return view("admin.contact_us.create");
      }
      
      public function store(Request $request){
              $status= ContactDetail::where('id',$request->input('contactId'))->first();
              if(empty($status)):
                 $data=new ContactDetail();
                 $data->contact_name=$request->input('contactName');
                 $data->contact_email= $request->input('contactEmail');
                 $data->contact_email1=$request->input('contactEmail1');
                 $data->contact_phone= $request->input('phoneNo');
                 $data->contact_addr=$request->input('contactAddress');
                 $data->contact_mobile_number= $request->input('mobileNo');
                 $data->save();
              endif;
                  $aboutUs = ContactDetail::where('id',$request->input('contactId'))->update([
                      'contact_name'=>$request->input('contactName'),
                      'contact_email'=> $request->input('contactEmail'),
                      'contact_email1'=>$request->input('contactEmail1'),
                      'contact_phone'=> $request->input('phoneNo'),
                      'contact_addr'=>$request->input('contactAddress'),
                      'contact_mobile_number'=> $request->input('mobileNo'),
                  ]);
  
              if($status==null){
                    return response()->json([
                      'status'=>200,
                      'msg' =>'Contact us Created Successfully !'
                   ]);
              }elseif($status==!null){
                   return response()->json([
                       'status'=>200,
                      'msg' =>'Contact us Updated Successfully !'
                  ]);
             
              }else{
                  return response()->json([
                      'status'=>500,
                      'msg' =>'Contact us  Not created successfully !'
                  ]);
  
              }
      }
     
}