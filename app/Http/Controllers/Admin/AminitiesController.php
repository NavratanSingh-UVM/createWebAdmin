<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\MainAminity;
use App\Models\Amenity;
use DataTables;
use App\Models\SubAminities;
use Illuminate\Support\Facades\Auth;

class AminitiesController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
            $amenity = MainAminity::get();
            // $attraction = Attraction::latest();
            return Datatables::of($amenity)
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
                ->editColumn('status',function($row){
                    return $row->status==1 ?"Active":"InActive";
                })
                ->editColumn('created_at',function($row){
                    return $row->created_at !=null ?date('M-d-Y',strtotime($row->created_at)):"NA";
                })
               
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.amenities.create',['id'=>$row->id]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="amenitesDelete('.$row->id.')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
           endif;
        return view("admin.amenites.index");
    }
    public function create($amenity_id=null){
        // dd($amenity_id);
        if(!is_null($amenity_id)){
            $data = MainAminity::where("id",$amenity_id)->first();
         return view("admin.amenites.create",compact('data'));
        }
        return view("admin.amenites.create");
        
    }
    public function store(Request $request){
          $rule = [ 
            'Amenities_Name'=>'required',
            'status'=>'required'
          ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()) :
            return redirect()->back()->withErrors($validator)->withInput();
        endif ;

        if($request->input('Amenites_id') ==null):
            $data=new MainAminity();	
            $data->aminity_name= $request->input('Amenities_Name');
            $data->status= $request->input('status');
            $data->save();
        endif;
            $data = MainAminity::where('id',$request->input('Amenites_id'))->update([
                'aminity_name' =>$request->input('Amenities_Name'),
                'status' =>$request->input('status'),
            ]);
            
            if($data==null){
                  return response()->json([
                    'status'=>200,
                    'msg' =>'Aminity  Created Successfully !'
                 ]);
            }elseif($data==!null){
                 return response()->json([
                     'status'=>200,
                    'msg' =>'Aminity  Updated Successfully !'
                ]);
            }else{
                return response()->json([
                    'status'=>500,
                    'msg' =>'Aminity  Not created successfully !'
                ]);
            }
    }
    public function destroy(Request $request){
        $result = MainAminity::where('id',$request->input('id'))->delete();
        if($result):
            return response()->json([
                'status'=>200,
                'message'=>'Aminity  Delete Successfully'
            ]);
        else:
            return response()->json([
                'status'=>500,
                'message'=>'Aminity  Not Delete, Please Try again',
            ]);
        endif;

    }
}
