@extends('frontend.layouts.master')
@push('title')
    Property details
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('calender-assets/style.css') }}">
@endpush
@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{url('frontend-assets/img/bg/03.jpg')}})">
        <div class="container">
            <div class="breadcrumb-text">
                <h2 class="page-title">{{$PropertyData->property_name}}</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="/">Home</a></li>
                    <li class="active">{{$PropertyData->property_name}}</li>
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
                                <h2>{{$PropertyData->property_name}}</h2>
                                <p>{{$PropertyData->after_guest}} guests |{{$PropertyData->bedrooms}}  | {{$PropertyData->sleeps}} beds | {{$PropertyData->baths}} baths</p>
                            </div>
                            <div class="price">
                                ${{$PropertyData->avg_night_rates}}<span>/{{$PropertyData->avg_rate_unit}}</span>
                            </div>
                        </div>
                        <div class="thumb">
                          <div class="room-details-slider">
                            @foreach ( $PropertyData->property_gallery_image as $image )
                               <img src="{{url('storage/uploads/property_image/gallery_image/'. $image->image_name)}}" alt="images">
                            @endforeach
                          </div>
                          <div class="room-details-slider-nav">
                            @foreach ( $PropertyData->property_gallery_image as $image )
                              <img src="{{url('storage/uploads/property_image/gallery_image/'. $image->image_name)}}" alt="images">
                           @endforeach
                          </div>
                        </div>
                    </div>
                </div>
                <!-- form -->
                <div class="col-lg-4">
                    <div class="room-booking-form">
                        <h5 class="title">Check Availability</h5>
                            <form id='bookingInformation'>
                              @csrf
                               <input type="hidden" name="property_id" value="{{$PropertyData->id}}">
                               <div class="input-group input-group-two left-icon mb-20">
                                   <label for="arrival-date">Check In</label>
                                   <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                   <input type="text" placeholder="Check-In" name="check_in" id="check_in"  autocomplete="off">
                                   <span class="text-danger check_in"></span>
                                   {{-- <input type="text" placeholder="20-9-2024" name="arrival-date" id="arrival-date">
                               </div>
                               <div class="input-group input-group-two left-icon mb-20">
                                   <label for="departure-date">Check Out</label>
                                   <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                   {{-- <input type="text" placeholder="20-9-2024" name="departure-date" id="departure-date"> --}}
                                   <input type="text" placeholder="Check-Out" name="check_out" id="check_out" autocomplete="off" onchange="calcuateRate()"><span class="text-danger check_out"></span>
                               </div>
                               <div class="input-group input-group-two left-icon mb-20">
                                   <label for="room">Rooms</label>
                                   <select  title="rooms" data-style="bg-white" id="rooms" name="rooms">
                                   <option value="">Select Rooms</option>
                                       @for ($i=1;$i<=15;$i++) 
                                           @if($i==15) 
                                               <option  value="{{ $i }}+">{{ $i }} + Rooms</option>
                                           @else
                                               <option value="{{ $i }}">{{ $i }} Rooms</option>
                                           @endif
                                       @endfor
                                   </select>
                                   <span class="text-danger guests"></span>
                               </div>
                               <div class="input-group input-group-two left-icon mb-20">
                                   <label for="departure-date">Guest</label>
                                   <select  title="guests" data-style="bg-white" id="guests" name="guests" onchange="calcuateRate()">
                                   <option value="">Select Guests</option>
                                       @for ($i=1;$i<=25;$i++) 
                                           @if($i==25) 
                                               <option  value="{{ $i }}+">{{ $i }} + Guests</option>
                                           @else
                                               <option value="{{ $i }}">{{ $i }} Guests</option>
                                           @endif
                                       @endfor
                                   </select>
                                   <span class="text-danger guests"></span>
                               </div>
                               <div class="input-group">
                                   <button  type="submit" class="main-btn btn-filled  rounded">check availability</button>
                               </div>
                            </form>
                    </div>
                </div>
                <div class="room-details">
                <div class="deatils-box col-lg-12">
                        <p>{!!$PropertyData->description!!}</p>
                        <div class="room-fearures clearfix mt-60 mb-60">
                         <h3 class="subtitle">Amenities</h3>
                         @if (!empty($PropertyData->property_aminities))
                           @foreach ($PropertyData->property_aminities as $mainAmminites)
                           <strong>{{ucfirst($mainAmminites->mainAmenities->aminity_name)}}</strong>
                             <ul class="list-unstyled mb-0 row no-gutters">
                                 @foreach(App\Http\Helper\Helper::getSubAmenites($mainAmminites->aminities_id,$mainAmminites->property_id) as $subAminity )
                                 <li class="col-sm-3 col-6 mb-2"> <i class="far fa-check mr-2 text-primary"></i>
                                     {{$subAminity->subAminites->name}}
                                 </li>
                                 @endforeach
                             </ul>
                           @endforeach
                         @endif

                            {{-- <ul class="room-fearures-list">
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
                            </ul> --}}

                            <div class="showbuttomn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Show all 22 amenities</a>
                            </div>
                        </div>
                         
                         <div class="room-rules">
                            <h2 class="sub-title">Notes:</h2>
                            <p>{!! $PropertyData->rates_notes !!}</p>
                         </div>
                         <div class="room-rules">
                            <h2 class="sub-title">Cancellation policy:</h2>
                            <p>{!! $PropertyData->cancellation_policies!!}</p>
                         </div>
                        {{-- <div class="room-rules">
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
                                           </td>
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
                                <div class="container">
                                    <div class="row">
                                       <div id="Calendars">
                                        </div>
                                    </div>
                                 </div>
                        </div> --}}
                        <section class="pt-5">
                         <div class="card border-0 mb-4">
                            <div class="card-body p-0">
                                <h3
                                    class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">
                                    {{ $PropertyData->reviews_rating->count() }} Reviews</h3>
                                @foreach ($PropertyData->reviews_rating as $reviews)
                                <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                                    <div
                                        class="w-82px h-82 mr-2 bg-gray-01 rounded-circle fs-25 font-weight-500 text-muted d-flex align-items-center justify-content-center text-uppercase mr-sm-8 mb-4 mb-sm-0 mx-auto my-text">
                                        {{ $reviews->guest_name }}</div>
                                    <div class="media-body">
                                        <div class="row mb-1 align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">{{ $reviews->guest_name }}</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    @for ($i = 1; $i <=5; $i++) @if ($reviews->rating >=$i)
                                                        <li class="list-inline-item mr-1"><span
                                                                class="text-warning fs-12 lh-2"><i
                                                                    class="fas fa-star"></i></span></li>
                                                        @else
                                                        <li class="list-inline-item mr-1"><span
                                                                class="text-border fs-12 lh-2"><i
                                                                    class="fas fa-star"></i></span></li>
                                                        @endif

                                                        @endfor

                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-3 pr-xl-17">{{ $reviews->reviews }}</p>
                                        <div class="d-flex justify-content-sm-start justify-content-center">
                                            <p class="mb-0 text-muted fs-13 lh-1">{{ date('d M
                                                y',strtotime($reviews->created_at)) }} at {{ date('h:i
                                                a',strtotime($reviews->created_at)) }}</p><a href="#"
                                                class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                         </div>
                        </section>
                        <section>
                         <div class="card border-0">
                            <div class="card-body p-0">
                                <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                                <form id="reviews">
                                    <div class="form-group mb-4 d-flex justify-content-start">
                                        @csrf
                                        <input type="hidden" name="property_id" value="{{ $PropertyData->id }}">
                                        <div class="rate-input">
                                            <input type="radio" id="star5" name="rate" value="5">
                                            <label for="star5" title="text" class="mb-0 mr-1 lh-1"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star4" name="rate" value="4">
                                            <label for="star4" title="text" class="mb-0 mr-1 lh-1"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star3" name="rate" value="3">
                                            <label for="star3" title="text" class="mb-0 mr-1 lh-1"><i  class="fas fa-star"></i></label>
                                            <input type="radio" id="star2" name="rate" value="2">
                                            <label for="star2" title="text" class="mb-0 mr-1 lh-1"><i  class="fas fa-star"></i></label>
                                            <input type="radio" id="star1" name="rate" value="1">
                                            <label for="star1" title="text" class="mb-0 mr-1 lh-1"><i class="fas fa-star"></i></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input placeholder="Your Name"
                                                    class="form-control form-control-lg border-0" name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input type="email" placeholder="Email" name="email"
                                                    class="form-control form-control-lg border-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <textarea class="form-control form-control-lg border-0"
                                            placeholder="Your Review" name="message" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary px-10 mb-2">Submit</button>
                                </form>
                            </div>
                         </div>
                        </section>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">What this place offers</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="amenitieslist">
            <strong>Bathroom</strong>
            <ul>
                <li>Bathtub</li>
                <li>Cleaning products</li>
                <li>Shampoo</li>
                <li>Conditioner</li>
                <li>Body soap</li>
                <li>Hot water</li>
            </ul>
            <hr>
            <strong>Heating and cooling</strong>
            <ul>
                <li>Air conditioning</li>
                <li>Indoor fireplace: gas</li>
                <li>Central heating</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('frontend-assets/js/custom/calender-avaliblity.js')}}"></script>
<script src="{{ asset('frontend-assets/js/custom/custom.js') }}"></script>
<script>
    $(document).ready(function(){
        disableddates = {!!App\Http\Helper\Helper::getPropertyBookingDate($PropertyData->id)!!};
        ratesIsAvailable = {!!App\Http\Helper\Helper::getPropertyRatesWhichDate($PropertyData->id)!!};  
        calenderAvailability("","{{$PropertyData->id}}");
    })
</script>

@endsection