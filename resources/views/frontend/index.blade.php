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
            <div class="banner-bg" style="background-image: {{url('assets/img/slider2.jpg')}}"></div>
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
                        <div class="col-sm-6">
                            <div class="single-feature-box">
                                <div class="icon">
                                    <i class="flaticon-team"></i>
                                </div>
                                <h4><a href="#">Cottage</a></h4>
                                <p>Canoe and kayaks are available for guests use.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box only-bg mt-30"
                                style="background-image: url({{url('frontend-assets/img/homeabout1.jpg')}})">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box only-bg mt-30"
                                style="background-image: url({{url('frontend-assets/img/homeabout2.jpg')}})">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box dark mt-30">
                                <div class="icon">
                                    <i class="flaticon-hotel"></i>
                                </div>
                                <h4><a href="#">Lakefront</a></h4>
                                <p>Make great memories at our new Muskoka lakefront retreat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".3s">
                    <div class="abour-text pl-50 pr-50">
                        <div class="section-title mb-30">
                            <span class="title-tag">about us</span>
                            <h2>Discover Our Muskoka.</h2>
                        </div>
                        <p>Make great memories at our new Muskoka lakefront retreat on beautiful Doe lake! short drive from Huntsville. Enjoy 2 acres of exclusive paradise with virgin forest on one side and lake on the other. As a bonus, guests can explore over 30 acres of Northwood beach Estate wilderness that guests have access to.</p>
                        <a href="#" class="main-btn btn-filled mt-40"> Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-right-bottom">
            <div class="about-bottom-img">
                <img src="{{('frontend-assets/img/bg/03.jpg')}}" alt="">
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
                <div class="col-lg-6">
                    <div class="room-box">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url({{url('frontend-assets/img/property1.jpg')}})"></div>
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
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
                </div>
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
                <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a1.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Niagara-on-the-Lake, Ontario</a></h4>
                            <p>This picturesque lakefront town near Niagara Falls is especially popular with oenophiles. Sample wines from a few local makers, then spend time strolling in Historic Old Town, which is lined with charming mom-and-pop shops, boutiques, bakeries, and eateries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a2.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Tofino, British Columbia</a></h4>
                            <p>A quick 45-minute flight from Vancouver, Tofino is an outdoor lover’s oasis. Thompson says that, no matter your experience level, you can enjoy hiking, year-round surfing, kayaking, and paddle boarding here. You’ll also find several stunning stretches of sand, including the nearly 10-mile-long Long Beach.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a3.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Gros Morne National Park, Newfoundland</a></h4>
                            <p>Renshaw calls this national park and UNESCO World Heritage Site “stunning for the outdoor lover.” Park visitors can explore awe-inspiring fjords on foot or mountain bike, or via boat or kayak, and wildlife spotting opportunities abound. The park is also a Dark Sky Preserve, making it an excellent stargazing spot.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a4.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Annapolis Valley, Nova Scotia</a></h4>
                            <p>Annapolis Valley, situated in Nova Scotia’s countryside, is surrounded by rolling fields and vineyards, quaint towns, and scenic hiking trails. Per Renshaw, it’s also “becoming a well-known wine destination.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-post-box">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a5.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">South Shore, Nova Scotia</a></h4>
                            <p>According to Renshaw, Nova Scotia’s South Shore is “host to beautiful towns like Lunenburg and Mahone Bay.” In Lunenberg, stroll though Old Town, a UNESCO World Heritage Site, to take in its colorful historic buildings, waterfront views, and eclectic shops. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="latest-post-box">
                    

                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a6.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Quebec City, Quebec</a></h4>
                            <p>For a taste of France in North America, head to Quebec City, an urban center that's more than "400 years old, which is older than Canada itself,” says Renshaw. The picturesque city is known for its cobblestone streets, eye-catching European architecture, and an enchanting Old Town ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== LATEST NEWS END ======-->


    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
    

    