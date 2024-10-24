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
              @foreach ($attractionArea as $attractions )
                <div class="col-lg-6">
                    <div class="latest-post-box mb-5">
                        <div class="post-img" style="background-image: url({{url('storage/uploads/attraction/'.$attractions->image)}})"></div>
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

    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
@endsection