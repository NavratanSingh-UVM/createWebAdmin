<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\State;
use App\Models\Attraction;
use DataTables;
use App\Models\SubAminities;
use App\Models\PropertyType;
use App\Models\PropertyListing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Helper\Helper;

class AttractionController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
            
            $attraction = Attraction::latest()->with('propertyName');
            return Datatables::of($attraction)
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
               
                ->editColumn('image',function($row) {
                    return '<img src="'.url('storage/uploads/attraction/' . $row->image).'" class=" rounded-circle mr-3" height="50" width="50">';
                })
                ->editColumn('property_type',function($row){
                    return $row->propertyName->property_name;
                })
                ->editColumn('content',function($row) {
                    return  $row->content;
                  
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.attraction.create',['id'=>encrypt($row->id)]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="attractionDelete('.$row->id.')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['image','property_type','content','action'])
                ->make(true);
        endif;
       return view("admin.attractions.index");
    }
    public function create($propert_id=null){
         $propertyList = PropertyListing::get();
        $data = "";
        if(!is_null($propert_id)){
            $data = Attraction::where("id",decrypt($propert_id))->first();
         return view("admin.attractions.create",compact('data','propertyList'));
        }
            return view("admin.attractions.create",compact('data','propertyList'));
        
    }
    public function store(Request $request){
          // $rule = [
        //     'ownerName'=>'required',
        //     'Content'=>'required',
        //     'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        // ];
        // $validator = Validator::make($request->all(),$rule);
        // if($validator->fails()) :
        //     return redirect()->back()->withErrors($validator)->withInput();
        // else:
            // $status= Attraction::first();
            if($request->hasfile('image')):
                $path = storage_path('public/upload/attraction/');
                if(file_exists($path.$request->input('old_image'))):
                   unlink($path.$request->input('old_image'));
                endif;
                $image = $request->file('image');
                $ext = "webp";
                $thumbnail = Image::make($image->getRealPath())->resize(1000, 700, function ($constraint) {
                    $constraint->aspectRatio();
                     $constraint->upsize();
                 })->encode($ext,100);
                $originalImageName = uniqid().'.'.$ext;
                $thumbnailPath = public_path('storage/uploads/attraction/');
                $thumbnail->save($thumbnailPath . "" . $originalImageName);
                $thumbnail->destroy();
            endif ;
            if($request->input('attr_id') ==null):
                $data=new Attraction();
                $data->property_id=$request->input('property_id');	
                $data->admin_id= Auth::user()->id;
                $data->image= $originalImageName;
                $data->heading=$request->input('Attrheading');
                $data->content= $request->input('AttrContent');
                $data->save();
            endif;
                $data = Attraction::where('id',$request->input('attr_id'))->update([
                    'admin_id' =>Auth::user()->id,
                    'image' => empty($originalImageName)?$request->input('old_image'):$originalImageName,
                    'heading' => $request->input('Attrheading'),
                    'content'=> $request->input('AttrContent')
                ]);

            if($data==null){
                  return response()->json([
                    'status'=>200,
                    'msg' =>'Attraction  Created Successfully !'
                 ]);
            }elseif($data==!null){
                 return response()->json([
                     'status'=>200,
                    'msg' =>'Attraction  Updated Successfully !'
                ]);
            }else{
                return response()->json([
                    'status'=>500,
                    'msg' =>'Attraction  Not created successfully !'
                ]);
            }
    }
    public function destroy(Request $request){
        $result = Attraction::where('id',$request->input('id'))->delete();
        if($result):
            return response()->json([
                'status'=>200,
                'message'=>'Attraction  Delete Successfully'
            ]);
        else:
            return response()->json([
                'status'=>500,
                'message'=>'Attraction  Not Delete, Please Try again',
            ]);
        endif;

    }
}
