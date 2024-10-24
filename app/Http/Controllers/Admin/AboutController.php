<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AboutDetails;
use App\Models\Gallery;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{

    public function list($id=null){
      $data="";
       if(!is_null($id)){
         $data = AboutDetails::where("id",decrypt($id))->with('aboutUs_gallery_image')->first();
         return view("admin.about_us.index",compact('data'));
        }
        return view("admin.about_us.index");
    }

    public function create(Request $request){
        $data= AboutDetails::with('aboutUs_gallery_image')->first();
        if(!empty($data)){
         return view("admin.about_us.create",compact('data'));
        }
            return view("admin.about_us.create");
    }
    
    public function store(Request $request){
        $rules = ['heading' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors(),'msg'=>'heading is required !'],422);
        }
            $status= AboutDetails::where('id',$request->input('about_id'))->first();
         
            if($status ==null):
                $aboutUs=new AboutDetails();
                $aboutUs->slider1=$request->input('slider1');
                $aboutUs->slider2=$request->input('slider2');
                $aboutUs->heading=$request->input('heading');
                $aboutUs->content= $request->input('Content');
                $aboutUs->save();
            endif;
                $aboutUs = AboutDetails::where('id',$request->input('about_id'))->update([
                    'slider1'=>$request->input('slider1'),
                    'slider2'=>$request->input('slider2'),
                    'heading' => $request->input('heading'),
                    'content'=> $request->input('Content')
                ]);
                for ($i = 0; $i < 5; $i++) {
                    if($request->hasfile('about_image'.$i)):
                        $path = storage_path('public/uploads/about_us/');
                        if(file_exists($path.$request->input('about_old_image'.$i))):
                            unlink($path.$request->input('about_old_image'.$i));
                         endif;
                        $image = $request->file('about_image'.$i);
                        $ext = "webp";
                        $thumbnail = Image::make($image->getRealPath())->resize(1000, 700, function ($constraint) {
                            $constraint->aspectRatio();
                             $constraint->upsize();
                         })->encode($ext,100);
                        $originalImageName= uniqid().'.'.$ext;
                        $thumbnailPath = public_path('storage/uploads/about/');
                        $thumbnail->save($thumbnailPath . "" .$originalImageName);
                        $thumbnail->destroy();
                        if(empty($request->input("about_id"))):
                        endif; 
                        $aboutData= AboutDetails::first();  
                        Gallery::where('about_id',$aboutData->id)->where('image_order',$i)->delete();
                        $propertyListing = Gallery::create([
                            "about_id"=>$aboutData->id,
                            "image_name"=>$originalImageName,
                            "image_order"=>$i
                        ]);
                    endif;
                   }
        //   }
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
