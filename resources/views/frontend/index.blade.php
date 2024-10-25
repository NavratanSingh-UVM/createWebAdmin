@extends('frontend.layouts.master')
@push('title')
    Home 
@endpush
@section('content')
    <!--====== BANNER PART START ======-->
    <section class="banner-area banner-style-two" id="bannerSlider">
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">The ultimate luxury
                                experience</span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The Perfect Base For You
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner bg -->
            <div class="banner-bg" style="background-image: url({{url('frontend-assets/img/slider1.jpg')}})"></div>
            <div class="banner-overly"></div>
        </div>
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">The ultimate luxury
                                experience</span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">The Perfect Base For You
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner bg -->
            <div class="banner-bg" style="background-image: url({{url('frontend-assets/img/slider2.jpg')}})"></div>
            <div class="banner-overly"></div>
        </div>
    </section>
    <!--====== BANNER PART ENDS ======-->


    <!--====== ABOUT SECTION START ======-->
    
    <section class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="row about-features-boxes fetaure-masonary">
                        @foreach ( $aboutUs->aboutUs_gallery_image->slice(1, 5) as $photo )
                        <div class="col-sm-6">
                            <div class="single-feature-box only-bg mt-30"
                                style="background-image: url({{ url('storage/uploads/about/' .$photo->image_name) }})">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".3s">
                    <div class="abour-text pl-50 pr-50">
                        <div class="section-title mb-30">
                            <span class="title-tag">about us</span>
                            <h2>{{$aboutUs->heading}}</h2>
                        </div>
                        <p>{!!$aboutUs->content!!}</p>
                        <a href="#" class="main-btn btn-filled mt-40"> Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-right-bottom">
            <div class="about-bottom-img">
              @foreach (  $aboutUs->aboutUs_gallery_image->slice(0, 1) as $photo)
               <img src="{{ url('storage/uploads/about/' . $photo->image_name) }}" alt="">
              @endforeach
            </div>
        </div>
    </section>
    <!--====== ABOUT SECTION END ======-->


    <!--====== FEATURE ROOM START ======-->
    <section class="feature-room-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title">
                        <span class="title-tag">Cottage & Home</span>
                        <h2>Our Properties</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                    <div class="feature-room-arrow arrow-style text-right">
                    </div>
                </div>
            </div>
            <!-- Room Looop -->
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
                            <h4 class="title"><a href="#">{{$propertyList->property_name}}</a></h4>
                            <p>{!!$propertyList->description!!}</p>
                            <span class="price">${{$propertyList->avg_night_rates}}/{{$propertyList->avg_rate_unit}}</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
             @endforeach
                {{-- <div class="col-lg-6">
                    <div class="room-box">
                        <div class="room-img-wrap">
                        
                            <div class="room-img" style="background-image: url({{url('frontend-assets/img/property2.jpg')}})"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li>15 Guests</li>
                                <li>5 Bedrooms</li>
                                <li>4.5 Baths</li>
                                <li>2 Acres</li>
                            </ul>
                            <h4 class="title"><a href="#">Muskoka Lakefront Retreat</a></h4>
                            <p>Make great memories at our new Muskoka lakefront retreat on beautiful Doe lake! short drive from Huntsville. Enjoy 2 acres of exclusive paradise with virgin forest on one side and lake on the other.</p>
                            <span class="price">$345/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--====== FEATURE ROOM END ======-->



    <!--====== VIDEO WRAP START ======-->
    <section class="video-wrap full-section" style="background-image: url({{url('frontend-assets/img/bg/05.jpg')}})">
        <a href="https://www.youtube.com/watch?v=T2tHzbaFh4Q" class="popup-video wow fadeInDown" data-wow-delay=".3s">
            <img src="{{('frontend-assets/img/07.png')}}" alt="Icon">
        </a>
    </section>
    <!--====== VIDEO WRAP END ======-->

    <!--====== LATEST NEWS START ======-->
    <section class="latest-news pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title">
                        <span class="title-tag">Thing To Do</span>
                        <h2>Area Attractions</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                    <div class="latest-post-arrow arrow-style text-right">

                    </div>
                </div>
            </div>
            <!-- Latest post loop -->
            <div class="row latest-post-slider mt-80">
            @foreach ($attractionArea as $attractions )
                 <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image:url({{url('storage/uploads/attraction/'.$attractions->image)}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">{{$attractions->heading}}</a></h4>
                            <p>{!!$attractions->content!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach 
             </div>  
        </div>
    </section>
    <!--====== LATEST NEWS END ======-->
    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
@endsection

    