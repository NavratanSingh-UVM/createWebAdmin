<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\AboutDetails;
use DataTables;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller
{
    public function list(Request $request){
       $data= AboutDetails::get();
       if(!empty($data)){
        return view("admin.about_us.index",compact('data'));
       }
       return view("admin.about_us.index");
    }
    public function create(Request $request){
            return view("admin.about_us.create");
    }
    public function store(Request $request){
        $rule = [
            'ownerName'=>'required',
            'content'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) :
            return redirect()->back()->withErrors($validator)->withInput();
        else:
          
            $aboutUs = new AboutDetails();
            $aboutUs->admin_id =Auth::user()->id;
            $aboutUs->about_heading=$request->ownerName;
            $aboutUs->about_content=$request->content;

            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('storage/uploads/about/', $filename);
                $aboutUs->about_profile_img = $filename;
            }
            $aboutUs->save();
            if($aboutUs):
                return to_route('admin.about_us.list')->with('success','About us Created Successfully !');
            else:
                return redirect()->back()->with('error','About us  Not created successfully');
            endif;
        endif;
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
