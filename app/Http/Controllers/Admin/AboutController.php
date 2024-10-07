<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AboutDetails;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{
    public function list($id=null){
    $data="";
    if(!is_null($propert_id)){
        $data = AboutDetails::where("id",decrypt($propert_id))->first();
        return view("admin.about_us.index",compact('data'));
       }
       return view("admin.about_us.index");
    }
    public function create(Request $request){
        $data= AboutDetails::first();
        if(!empty($data)){
         return view("admin.about_us.create",compact('data'));
        }
            return view("admin.about_us.create");
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
            $status= AboutDetails::first();
            if($request->hasfile('image')):
                $image = $request->file('image');
                $ext = "webp";
                $thumbnail = Image::make($image->getRealPath())->resize(1000, 700, function ($constraint) {
                    $constraint->aspectRatio();
                     $constraint->upsize();
                 })->encode($ext,100);
                $originalImageName = uniqid().'.'.$ext;
                $thumbnailPath = public_path('storage/uploads/about/');
                $thumbnail->save($thumbnailPath . "" . $originalImageName);
                $thumbnail->destroy();
            endif;
            if($status ==null):
                $aboutUs=new AboutDetails();
                $aboutUs->admin_id= Auth::user()->id;
                $aboutUs->profile_img= $originalImageName;
                $aboutUs->heading=$request->input('ownerName');
                $aboutUs->content= $request->input('Content');
                $aboutUs->save();
            endif;
                $aboutUs = AboutDetails::where('id',$request->input('id'))->update([
                    'admin_id' =>Auth::user()->id,
                    'profile_img' =>empty($originalImageName)?$status->about_profile_img:$originalImageName,
                    'heading' => $request->input('ownerName'),
                    'content'=> $request->input('Content')
                ]);

            if($status==null){
                  return response()->json([
                    'status'=>200,
                    'msg' =>'About us Created Successfully !'
                 ]);
            }elseif($status==!null){
                 return response()->json([
                     'status'=>200,
                    'msg' =>'About us Updated Successfully !'
                ]);
           
            }else{
                return response()->json([
                    'status'=>500,
                    'msg' =>'About us  Not created successfully !'
                ]);

            }
    }
    public function edit($id) {
        $countries = Country::get();
        $states = State::get();
        $data = Carousel::findOrFail(decrypt($id));
        return view ('admin.about_us.edit',compact('countries','states','data'));
    }

    public function Update(Request $request) {
        $rule = [
            'country_id'=>'required',
            'state_id' => 'required',
            'tax'=>'required'
        ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) :
            return redirect()->back()->withErrors($validator)->withInput();
        else:
            $tax = AboutDetails::where('id',decrypt($request->input('id')))->update([
                'country_id' =>$request->input('country_id'),
                'state_id' =>$request->input('state_id'),
                'tax'=>$request->input('tax')
            ]);
            if($tax):
                return to_route('admin.about_us.list')->with('success','About us Updated Successfully !');
            else:
                return redirect()->back()->with('error','About us Not Updated successfully');
            endif;
        endif;
    }

    public function destroy(Request $request){
        $result = AboutDetails::where('id',$request->input('id'))->delete();
        if($result):
            return response()->json([
                'status'=>200,
                'message'=>'About us  Delete Successfully'
            ]);
        else:
            return response()->json([
                'status'=>500,
                'message'=>'About us Not Delete, Please Try again',
            ]);
        endif;

    }
}
