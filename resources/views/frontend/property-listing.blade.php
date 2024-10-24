@extends('frontend.layouts.master')
@push('title')
    Property listing
@endpush
@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image:  url({{url('frontend-assets/img/bg/03.jpg')}});">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">Our Properties</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active">Our Properties</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== FEATURE ROOM START ======-->
    <section class="feature-room-section pt-50 pb-50">
        <div class="container">

            <div class="row room-gird-loop mt-80 feature-room-slider">
             @foreach ($PropertyListing as $propertyList)
                <div class="col-lg-6">
                    <div class="room-box">
                        <div class="room-img-wrap">
                         <div class="room-img" style="background-image: url({{url('storage/uploads/property_image/main_image/'. $propertyList->property_main_photos)}})"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li>{{$propertyList->after_guest}} Guests</li>
                                <li>{{$propertyList->bedrooms}}</li>
                                <li>{{$propertyList->sleeps}} Beds</li>
                                <li>{{$propertyList->baths}} Baths</li>
                            </ul>
                            <h4 class="title"><a href="{{route('property.listing.details',$propertyList->id)}}">{{$propertyList->property_name}}</a></h4>
                            <p>{!!$propertyList->description!!}</p>
                            <span class="price">${{$propertyList->avg_night_rates}}/{{$propertyList->avg_rate_unit}}</span>
                            <a href="{{route('property.listing.details',$propertyList->id)}}" class="book-btn">View Property Details</a>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
        </div>
    </section>
    <!--====== FEATURE ROOM END ======-->
    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
@endsection