@extends('frontend.layouts.master')
@push('title')
    Contact us
@endpush
@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: {{url('frontend-assets/img/bg/03.jpg')}}">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">Contact Us</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->


    <!--====== CONTACT PART START ======-->
    <section class="contact-part pt-115 pb-115">
        <div class="container">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="desc">
                                <h4>Office Address</h4>
                                <p>Emsdale, Canada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="desc">
                                <h4>Phone Number</h4>
                                <p>+1 6477783383</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-message"></i>
                            </div>
                            <div class="desc">
                                <h4>Email Address</h4>
                                <p>alokpaliwal@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" placeholder="Your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" placeholder="Enter email address">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-calendar"></i></span>
                                <input type="text" placeholder="Check In">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-calendar"></i></span>
                                <input type="text" placeholder="Check Out">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" placeholder="Add phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-book"></i></span>
                                <input type="text" placeholder="Select Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group textarea mb-30">
                                <span class="icon"><i class="far fa-pen"></i></span>
                                <textarea type="text" placeholder="Enter messages"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Get Free Quote</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== CONTACT PART END ======-->





    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>

    