<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index() {
        
        // $featuredProperties = PropertyListing::where(['feature'=>'1','approval'=>'1'])->get();
        return view('frontend.index');
    }
    public function contactUs(){
        return view('frontend.contact');
    }
    public function propertyDetial(){
        return view('frontend.property-details');
    }
    public function activitiesAttractions(){
        return view('frontend.activities-attractions');
    }
    public function propertyListing(){
        return view('frontend.property-listing');
    }
}
