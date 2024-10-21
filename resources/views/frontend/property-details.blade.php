@extends('frontend.layouts.master')
@push('title')
    Property details
@endpush
@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{url('frontend-assets/img/bg/03.jpg')}})">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">Muskoka Cottage On Baylake</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active">Muskoka Cottage On Baylake</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->


    <!--====== ROOM-DETAILS START ======-->
    <section class="room-details pt-120 pb-90">
        <div class="container">
            <div class="row">
                <!-- details -->
                <div class="col-lg-8">
                    <div class="deatils-box">
                        <div class="title-wrap">
                            <div class="title">
                                <h2>Muskoka Cottage On Baylake</h2>
                                <p>15 guests | 4 bedrooms | 9 beds | 3 baths</p>
                            </div>
                            <div class="price">
                                $345<span>/Night</span>
                            </div>
                        </div>
                        <div class="thumb">
                          <div class="room-details-slider">
                            <img src="{{url('frontend-assets/img/gallery/01.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/02.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/03.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/04.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/05.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/06.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/07.jpg')}}" alt="images">
                          </div>
                          <div class="room-details-slider-nav">
                            <img src="{{url('frontend-assets/img/gallery/01.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/02.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/03.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/04.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/05.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/06.jpg')}}" alt="images">
                            <img src="{{url('frontend-assets/img/gallery/07.jpg')}}" alt="images">
                          </div>
                        </div>


                    </div>
                </div>
                <!-- form -->
                <div class="col-lg-4">
                    <div class="room-booking-form">
                        <h5 class="title">Check Availability</h5>
                        <form action="#">
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="arrival-date">Check In</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="20-6-2020" name="arrival-date" id="arrival-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Check Out</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="30-6-2020" name="departure-date" id="departure-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="room">Rooms</label>
                                <select name="room" id="room">
                                    <option value="1">1 Room</option>
                                    <option value="2" selected>2 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="8">8 Room</option>
                                </select>
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Guest</label>
                                <select name="guest" id="guest">
                                    <option value="8">8 Guest</option>
                                    <option value="10" selected>10 Guest</option>
                                    <option value="12">12 Guest</option>
                                    <option value="15">15 Guest</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <button class="main-btn btn-filled">check availability</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="room-details">
                <div class="deatils-box col-lg-12">
                        <p>Amazing waterfront retreat! Relax with the whole family at our Hot Tub/Spa (opens April 7th) and whole  day sun exposure. Cottage right on lakefront with crystal clear water( or frozen lake)  for swimming, kayaking, boating, with fishing right off the docks and exclusive private shallow entry beach on the property. Canoe and kayaks are available for guests use.Places to dine and explore Huntsville, Burks falls, Arrowhead provincial park, Algonquin park, Kearney, lions lookout, screaming heads</p>
                        
                        <div class="room-fearures clearfix mt-60 mb-60">
                            <h3 class="subtitle">Amenities</h3>
                            <ul class="room-fearures-list">
                                <li><i class="fal fa-bath"></i> Air conditioner</li>
                                <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                <li><i class="fal fa-key"></i>Strong Locker</li>
                                <li><i class="fal fa-cut"></i>Breakfast</li>
                                <li><i class="fal fa-guitar"></i>Kitchen</li>
                                <li><i class="fal fa-lock"></i>Smart Security</li>
                                <li><i class="fal fa-broom"></i>Cleaning</li>
                                <li><i class="fal fa-shower"></i>Shower</li>
                                <li><i class="fal fa-headphones-alt"></i>24/7 Online Support</li>
                                <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                <li><i class="fal fa-bed"></i>Single bed</li>
                                <li><i class="fal fa-users"></i>Expert Team</li>
                                <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                <li><i class="fal fa-bus"></i>Towels</li>
                            </ul>

                            <div class="showbuttomn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Show all 22 amenities</a>
                            </div>
                        </div>

                        <div class="room-rules">
                             <h2>Rates</h2>
                             <table class="responsive-table" cellspacing="0" cellpadding="0">
                                 <thead>
                                     <tr>
                                         <th scope="col">Season</th>
                                         <th scope="col">Nightly</th>
                                         <th scope="col">Weekly</th>
                                         <th scope="col">Weekend</th>
                                         <th scope="col">Monthly</th>
                                         <th scope="col">Min Stay</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td data-title="Season"><span style="font-size:14px;font-weight: bold;">Standard</span> <br>
                                         - -</td>
                                         <td data-title="Nightly">$000</td>
                                         <td data-title="Weekly">-</td>
                                         <td data-title="Weekend">-</td>
                                         <td data-title="Monthly">-</td>
                                         <td data-title="Min Stay">-</td>
                                     </tr>
                                 </tbody>
                             </table>


                             <br><br>
                             <h2>Availability</h2>
                             <div style="font-size:50px; margin-top: 20px;font-weight: 800;">Property Calendar</div>
                        </div>


                        <div class="room-rules clearfix mt-5">
                            <h3 class="subtitle">House Rules</h3>
                            <ul class="room-rules-list">
                                <li>No smoking, parties or events.</li>
                                <li>Check-in time from 2 PM, check-out by 10 AM.</li>
                                <li>Time to time car parking</li>
                                <li>Download Our minimal app</li>
                                <li>Browse regular our website</li>
                            </ul>
                        </div>
                </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== ROOM-DETAILS END ======-->



    <!--====== Back to Top ======-->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fal fa-angle-double-up"></i>
    </a>
