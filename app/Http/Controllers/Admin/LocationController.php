<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Models\Country;
use App\Models\State;
use App\Models\Region;
use App\Http\Requests\Region\RegionRequest;
use App\Http\Requests\Region\RegionUpdateRequest;
use  App\Http\Requests\City\CityCreateRequest;
use  App\Http\Requests\City\CityUpadteRequest;
use  App\Http\Requests\Cities\CitiesRequestCreate;
use  App\Http\Requests\Cities\CitiesUpdateRequest;
use App\Models\City;
use App\Models\Cities;

class LocationController extends Controller
{
    //
    public function getStateByCountryId(Request $request){
        $states = State::where('country_id',$request->input('id'))->get();
        if($states->count() > 0):
            return response()->json([
                'status'=>'1',
                'msg'=>'State Fetched Successfully !',
                'data'=>$states
            ]);
        else:
            return response()->json([
                'status'=>'0',
                'msg'=>'State Not Found !',
            ]);
        endif;
    }
    public function getRegionByStateId(Request $request) {
        $region = Region::where('state_id',$request->input('id'))->get();
        if($region->count() > 0):
            return response()->json([
                'status'=>'1',
                'msg'=>'Region Fetched Successfully !',
                'data'=>$region
            ]);
        else:
            return response()->json([
                'status'=>'0',
                'msg'=>'Region Not Found !',
            ]);
        endif;
    }
    public function getCityByRegionId (Request $request) {
        $cities = City::where('region_id',$request->input('id'))->get();
        if($cities->count() > 0):
            return response()->json([
                'status'=>'1',
                'msg'=>'City Fetched Successfully !',
                'data'=>$cities
            ]);
        else:
            return response()->json([
                'status'=>'0',
                'msg'=>'City Not Found !',
            ]);
        endif;
    }
    public function getSubCityByCityId(Request $request) {
        $sub_cities = Cities::where('city_id',$request->input('id'))->get();
        if($sub_cities->count() > 0):
            return response()->json([
                'status'=>'1',
                'msg'=>'City Fetched Successfully !',
                'data'=>$sub_cities
            ]);
        else:
            return response()->json([
                'status'=>'0',
                'msg'=>'City Not Found !',
            ]);
        endif;
    }
}
