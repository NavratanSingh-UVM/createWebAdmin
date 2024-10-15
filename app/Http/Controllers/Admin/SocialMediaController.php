<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\SocialLink;
use DataTables;

class SocialMediaController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
             $social = SocialLink::get();
            return Datatables::of($social)
                ->addIndexColumn()
                // ->filter(function ($instance) use ($request) {
                //     if($request->get('property_id') != ''):
                //         $instance->where('id', $request->get('property_id'));
                //     elseif($request->get('email') != ''):
                //         $user = User::where('email',$request->get('email'))->first();
                //         $instance->where('user_id', $user->id);
                //     elseif($request->get('name') != ''):
                //         $user = User::where('name',$request->get('name'))->first();
                //         $instance->where('user_id', $user->id);
                //     endif;
                // })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.social_link.create',['id'=>encrypt($row->id)]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="social_linkDelete('.$row->id.')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        endif;
       return view("admin.social_media.index");
    }
    public function create($id=null){
        $data = "";
        if(!is_null($id)){
            $data = SocialLink::where("id",decrypt($id))->first();
         return view("admin.social_media.create",compact('data'));
        }
        return view("admin.social_media.create",compact('data'));
    }
    public function store(Request $request){
       
        $status=SocialLink::where('id',$request->input('SocialId'))->first();
      
        if($status==null):
            $Social_Link=new SocialLink();
            $Social_Link->facebook =$request->input('facebook');
            $Social_Link->twitter =$request->input('twitter');
            $Social_Link->linkdin=$request->input('linkdin');
            $Social_Link->pinterest=$request->input('pinterest');
            $Social_Link->youtube=$request->input('youtube');
            $Social_Link->social_status='1';
            $Social_Link->save();
        else:
            $Social_Link = SocialLink::where('id',$request->input('social_id'))->update([
                'facebook' =>$request->input('facebook'),
                'twitter' =>$request->input('twitter'),
                'linkdin'=>$request->input('linkdin'),
                'pinterest'=>$request->input('pinterest'),
                'youtube'=>$request->input('youtube'),
                'social_status'=>'1'
            ]);
        endif;  
        if($status==null){
                return response()->json([
                  'status'=>200,
                  'msg' =>'Social Media link Created Successfully !'
               ]);
        }elseif($status==!null){
               return response()->json([
                   'status'=>200,
                  'msg' =>'Social Media link  Updated Successfully !'
              ]);
         
        }else{
              return response()->json([
                  'status'=>500,
                  'msg' =>'Social Media link Not created successfully !'
              ]);
          }
        
    }
   

    public function destroy(Request $request){
        $result = SocialLink::where('id',$request->input('id'))->delete();
        if($result):
            return response()->json([
                'status'=>200,
                'message'=>'Social media link Delete Successfully'
            ]);
        else:
            return response()->json([
                'status'=>500,
                'message'=>'Social media link Not Delete, Please Try again',
            ]);
        endif;

    }
}