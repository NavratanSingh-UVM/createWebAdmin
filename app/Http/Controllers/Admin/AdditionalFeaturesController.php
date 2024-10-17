<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdditionalFeaturesController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
            $data = User::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.additional_features.create',['id'=>encrypt($row->id)]).'" class="edit btn btn-success btn-sm">Edit</a>';
                    return $actionBtn;
                })
                ->addColumn('image',function($row) {
                    return '<img src="'.url('storage/uploads/profile_image/'.$row->image).'" class=" rounded-circle mr-3" height="50" width="50">';
                })
                ->rawColumns(['action','image'])
                ->make(true);
        endif;
       return view("admin.additional_features.index");
    }
    public function create(Request $request){
            return view("admin.additional_features.create");
    }
    public function store(Request $request){
        $rules = ['email' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors(),'msg'=>'Email is required !'],422);
        }
        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|string|min:8',
            'confirmNewPassword' => 'required|string|same:newPassword',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'msg'=>'password and confirm password is not match !'
            ], 422); // Unprocessable Entity
        }
            if($request->hasfile('image')):
                $path = storage_path('public/upload/profile_image/');
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
                $thumbnailPath = public_path('storage/uploads/profile_image/');
                $thumbnail->save($thumbnailPath . "" . $originalImageName);
                $thumbnail->destroy();
            endif;
            $data = User::where('id',$request->input('user_id'))->update([
                'name' =>$request->input('ProfileName'),
                'email' =>$request->input('email'),
                'phone'=>$request->input('phone'),
                'image'=>empty($originalImageName)?$request->input('old_image'):$originalImageName,
                'password'=>$request->input('newPassword')!=null?Hash::make($request->input('newPassword')):auth()->user()->password,
                'show_password'=>$request->input('newPassword')!=null?$request->input('newPassword'):auth()->user()->show_password,
            ]);
            if($data):
                return response()->json([
                    'status'=>200,
                    'msg' =>'Updated Successfully !'
                 ]);
            else:
                return response()->json([
                    'status'=>500,
                    'msg' =>'Profile Not Updated successfully !'
                ]);
            endif;
    }
}
