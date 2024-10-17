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
            $status= AboutDetails::where('id',$request->input('about_id'))->first();
            if($request->hasfile('image')):
                $path = storage_path('public/upload/about_us/');
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
                $thumbnailPath = public_path('storage/uploads/about/');
                $thumbnail->save($thumbnailPath . "" . $originalImageName);
                $thumbnail->destroy();
            endif;
            if($status ==null):
                $aboutUs=new AboutDetails();
                $aboutUs->img= $originalImageName;
                $aboutUs->heading=$request->input('heading');
                $aboutUs->content= $request->input('Content');
                $aboutUs->save();
            endif;
                $aboutUs = AboutDetails::where('id',$request->input('about_id'))->update([
                    'img' => empty($originalImageName)?$request->input('old_image'):$originalImageName,
                    'heading' => $request->input('heading'),
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
   
}
