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
    // protected $ContactUs='about_details';
    // protected $socialMedia='about_details';
    public function index() {
        $aboutUs         = AboutDetails::with('aboutUs_gallery_image')->first();
        $attractionArea  = Attraction::get();
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view("frontend.index",compact('aboutUs','attractionArea','PropertyListing','ContactUs','socialMedia'));
    }
    public function contactUs(){
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.contact',compact('PropertyListing','ContactUs','socialMedia'));
    }
    public function propertyDetial(){
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.property-details',compact('PropertyListing','ContactUs','socialMedia'));
    }
    public function activitiesAttractions(){
        $attractionArea  = Attraction::get();
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.activities-attractions',compact('PropertyListing','ContactUs','socialMedia','attractionArea'));
    }
    public function propertyListing(){
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        return view('frontend.property-listing',compact('PropertyListing','ContactUs','socialMedia'));
    }
    public function aboutUs(){
        $PropertyListing = PropertyListing::where('status','1')->get();
        $ContactUs       = ContactDetail::first();
        $socialMedia     = SocialLink::first();
        $data         = AboutDetails::with('aboutUs_gallery_image')->first(); 
        return view("frontend.about-owner",compact('PropertyListing','ContactUs','socialMedia','data'));
    }
}
