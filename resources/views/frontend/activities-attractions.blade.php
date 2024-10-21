@extends('frontend.layouts.master')
@push('title')
    Activites attractions
@endpush
@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{url('frontend-assets/img/bg/03.jpg')}})">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">Activities & Attractions</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active">Activities & Attractions</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->




    <section class="latest-news">
        <div class="container">

            <!-- Latest post loop -->
            <div class="row mt-80">
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a1.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Niagara-on-the-Lake, Ontario</a></h4>
                            <p>This picturesque lakefront town near Niagara Falls is especially popular with oenophiles. Sample wines from a few local makers, then spend time strolling in Historic Old Town, which is lined with charming mom-and-pop shops, boutiques, bakeries, and eateries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image:url({{url('frontend-assets/img/a2.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Tofino, British Columbia</a></h4>
                            <p>A quick 45-minute flight from Vancouver, Tofino is an outdoor lover’s oasis. Thompson says that, no matter your experience level, you can enjoy hiking, year-round surfing, kayaking, and paddle boarding here. You’ll also find several stunning stretches of sand, including the nearly 10-mile-long Long Beach.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a3.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Gros Morne National Park, Newfoundland</a></h4>
                            <p>Renshaw calls this national park and UNESCO World Heritage Site “stunning for the outdoor lover.” Park visitors can explore awe-inspiring fjords on foot or mountain bike, or via boat or kayak, and wildlife spotting opportunities abound. The park is also a Dark Sky Preserve, making it an excellent stargazing spot.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a4.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Annapolis Valley, Nova Scotia</a></h4>
                            <p>Annapolis Valley, situated in Nova Scotia’s countryside, is surrounded by rolling fields and vineyards, quaint towns, and scenic hiking trails. Per Renshaw, it’s also “becoming a well-known wine destination.”</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image: url({{url('frontend-assets/img/a5.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">South Shore, Nova Scotia</a></h4>
                            <p>According to Renshaw, Nova Scotia’s South Shore is “host to beautiful towns like Lunenburg and Mahone Bay.” In Lunenberg, stroll though Old Town, a UNESCO World Heritage Site, to take in its colorful historic buildings, waterfront views, and eclectic shops. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image:  url({{url('frontend-assets/img/a6.jpg')}})"></div>
                        <div class="post-desc">
                            <h4><a href="#">Quebec City, Quebec</a></h4>
                            <p>For a taste of France in North America, head to Quebec City, an urban center that's more than "400 years old, which is older than Canada itself,” says Renshaw. The picturesque city is known for its cobblestone streets, eye-catching European architecture, and an enchanting Old Town ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
