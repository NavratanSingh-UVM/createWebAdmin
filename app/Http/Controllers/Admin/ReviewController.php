<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\ReviewDetail;
use App\Models\PropertyListing;
use DataTables;
use Illuminate\Support\Str;


class ReviewController extends Controller
{
    public function list(Request $request){
        if($request->ajax()):
         $review = ReviewDetail::with('reviews_rating')->get();
           return Datatables::of($review)
               ->addIndexColumn()
               ->filter(function ($instance) use ($request) {
                if($request->get('property_id') != ''):
                    $instance->where('id', $request->get('property_id'));
                endif;
            })
               ->addColumn('action', function($row){
                   $actionBtn = '<a href="'.route('admin.review.create',['id'=>encrypt($row->id)]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="reviewDelete('.$row->id.')">Delete</a>';
                   return $actionBtn;
               })
               ->addColumn('propertyName',function($row){
                return $row->reviews_rating->property_name;
               })
               ->editColumn('cust_review',function($row){
                $wrappedText = Str::wordWrap($row->cust_review,50, "<br>\n", false);
                return $wrappedText;
               })
               ->addColumn('status',function($row){
                return (($row->status==1)?'Active':'InActive');
               })
               ->rawColumns(['action','propertyName','cust_review'])
               ->make(true);
       endif;
       return view("admin.review.index");
    }

    public function create($id=null){
        $propertylist = PropertyListing::get();
        $data = "";
        if(!is_null($id)){
            $data = ReviewDetail::where("id",decrypt($id))->with('reviews_rating')->first();
         return view("admin.review.create",compact('data','propertylist'));
        }
        return view("admin.review.create",compact('data','propertylist'));
    }

    public function store(Request $request){
        $rules = ['review' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors(),'msg'=>'Customer Review is required !'],422);
        }
        $status=ReviewDetail::where('id',$request->input('ReviewlId'))->first();
        if($status==null):
            $review=new ReviewDetail();
            $review->property_id =$request->input('propertyId');
            $review->cust_name =$request->input('customerName');
            $review->heading=$request->input('heading');
            $review->cust_review=$request->input('review');
            $review->cust_place=$request->input('customerPlace');
            $review->rating=$request->input('rating');
            $review->status=$request->input('status');
            $review->save();
        else:
            $review = ReviewDetail::where('id',$request->input('ReviewlId'))->update([
                'property_id' =>$request->input('propertyId'),
                'cust_name' =>$request->input('customerName'),
                'heading'=>$request->input('heading'),
                'cust_review'=>$request->input('review'),
                'cust_place'=>$request->input('customerPlace'),
                'rating'=>$request->input('rating'),
                'status'=>$request->input('status'),
            ]);
        endif;  
        if($status==null){
                return response()->json([
                  'status'=>200,
                  'msg' =>'Review Created Successfully !'
               ]);
        }elseif($status==!null){
               return response()->json([
                   'status'=>200,
                  'msg' =>'Review  Updated Successfully !'
              ]);
         
        }else{
              return response()->json([
                  'status'=>500,
                  'msg' =>'Review Not created successfully !'
              ]);
          }
    }

    public function destroy(Request $request){
        $result = ReviewDetail::where('id',$request->input('id'))->delete();
        if($result):
            return response()->json([
                'status'=>200,
                'message'=>'Review Delete Successfully'
            ]);
        else:
            return response()->json([
                'status'=>500,
                'message'=>'Review Not Delete, Please Try again',
            ]);
        endif;

    }
}
