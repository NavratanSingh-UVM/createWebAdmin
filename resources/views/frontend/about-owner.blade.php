@extends('frontend.layouts.master')
@push('title')
    About us
@endpush
@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url(assets/img/bg/03.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">About Owner</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Owner</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ABOUT SECTION START ======-->
    <section class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay=".3s">
                 @foreach (  $data->aboutUs_gallery_image->slice(0, 1) as $photo)
                   <img src="{{ url('storage/uploads/about/' . $photo->image_name) }}" style="width:100%" alt="">
                  @endforeach
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".3s">
                    <div class="abour-text pl-50 pr-50">
                        <div class="section-title mb-30">
                            <span class="title-tag">about owner</span>
                            <h2>Alok Paliwal.</h2>
                        </div>
                        <p>Make great memories at our new Muskoka lakefront retreat on beautiful Doe lake! short drive from Huntsville. Enjoy 2 acres of exclusive paradise with virgin forest on one side and lake on the other. As a bonus, guests can explore over 30 acres of Northwood beach Estate wilderness that guests have access to.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="about-right-bottom">
            <div class="about-bottom-img">
            
                <img src="assets/img/bg/03.jpg" alt="">
            </div>
        </div>
    </section>
    <!--====== ABOUT SECTION END ======-->



    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>