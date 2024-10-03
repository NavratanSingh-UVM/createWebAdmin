<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Blog;
use DataTables;

class BlogController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
            $tax = Blog::with('country')->with('state')->latest();
            return Datatables::of($tax)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.blog.edit',['id'=>encrypt($row->id)]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="taxDelete('.$row->id.')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        endif;
       return view("admin.blog.index");
    }
    public function create(Request $request){
            return view("admin.blog.create");
    }
    public function store(Request $request){
        $rule = [
            'country_id'=>'required',
            'state_id'=>'required',
            'tax'=>'required'
        ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) :
            return redirect()->back()->withErrors($validator)->withInput();
        else:
            $tax = Blog::create([
                'admin_id' =>$request->input('country_id'),
                'about_video_url' =>$request->input('state_id'),
                'about_heading'=>$request->input('tax'),
                'about_content'=>$request->input('tax'),
                'about_short_content'=>$request->input('tax'),
                'about_inst_date'=>$request->input('tax'),
                'about_update_date'=>$request->input('tax'),
                'about_ip'=>$request->input('tax'),
            ]);
            if($tax):
                return to_route('admin.blog.list')->with('success','Carousel Created Successfully !');
            else:
                return redirect()->back()->with('error','Carousel Not created successfully');
            endif;
        endif;
    }
    public function edit($id) {
        $countries = Country::get();
        $states = State::get();
        $data = Carousel::findOrFail(decrypt($id));
        return view ('admin.blog.edit',compact('countries','states','data'));
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
            $tax = Blog::where('id',decrypt($request->input('id')))->update([
                'country_id' =>$request->input('country_id'),
                'state_id' =>$request->input('state_id'),
                'tax'=>$request->input('tax')
            ]);
            if($tax):
                return to_route('admin.blog.list')->with('success','About us Updated Successfully !');
            else:
                return redirect()->back()->with('error','About us Not Updated successfully');
            endif;
        endif;
    }

    public function destroy(Request $request){
        $result = Blog::where('id',$request->input('id'))->delete();
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

