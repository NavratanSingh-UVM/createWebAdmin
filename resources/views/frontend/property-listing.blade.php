@extends('frontend.layouts.master')
@push('title')
    Property listing
@endpush
@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url(assets/img/bg/03.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">Our Properties</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="index.php">Home</a></li>
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
                <div class="col-lg-6">
                    <div class="room-box">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/property1.jpg);"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li>15 Guests</li>
                                <li>4 Bedrooms</li>
                                <li>9 Beds</li>
                                <li>3 Baths</li>
                            </ul>
                            <h4 class="title"><a href="#">Muskoka Cottage On Baylake</a></h4>
                            <p>Amazing waterfront retreat! Relax with the whole family at our Hot Tub/Spa (opens April 7th) and whole  day sun exposure. Cottage right on lakefront with crystal clear water</p>
                            <span class="price">$345/Night</span>
                            <a href="property-details.php" class="book-btn">View Property Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-box">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url(assets/img/property2.jpg);"></div>
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
                            <a href="#" class="book-btn">View Property Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FEATURE ROOM END ======-->





    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
