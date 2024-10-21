<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\AboutDetails;
use App\Models\Attraction;
use App\Models\PropertyListing;
use App\Models\ContactDetail;
use App\Models\SocialLink;

class frontendController extends Controller
{
    public function index() {
        $aboutUs         = AboutDetails::first();
        $attractionArea  = Attraction::get();
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view("frontend.index",compact('aboutUs','attractionArea','PropertyListing','ContactUs','socialMedia'));
    }
    public function contactUs(){
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.contact',compact('ContactUs','socialMedia'));
    }
    public function propertyDetial(){
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.property-details',compact('ContactUs','socialMedia'));
    }
    public function activitiesAttractions(){
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.activities-attractions',compact('ContactUs','socialMedia'));
    }
    public function propertyListing(){
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.property-listing',compact('ContactUs','socialMedia'));
    }
}
