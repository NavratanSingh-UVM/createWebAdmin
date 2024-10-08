<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/* 
Admin Auth Route start

 */
Route::controller(AuthController::class)->middleware(['back-prevent-history','guest'])->group(function () {
    Route::get('/','index')->name('login');
    Route::post('login','doLogin')->name('check.creditials');
    Route::get('/forget-password','forgetPassword')->name('forget.password');
    Route::post('/forget-password-send-link','sendForgetPasswordLink')->name('send.forget.password.link');
    Route::get('reset-password/{token}','resetPassword')->name('reset.password.get');
    Route::post('/password-reset','passwordReset')->name('password.reset');
});

/* 
Admin Auth Route end
 */
/* 
 Admin Before Login Rote Start 
 */
Route::middleware(['back-prevent-history','auth'])->group(function () {

    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard','index')->name('dashboard');
        Route::get('edit-profile','editProfile')->name('edit.profile');
        Route::post('store-profile','updateProfile')->name('store.profile');
        Route::get('logout','logout')->name('logout');
    });
      //About-us
    Route::controller(AboutController::class)->prefix('about_us')->name('about_us.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create/{id?}','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
       //Property listing
    Route::controller(PropertyListingController::class)->prefix('property')->name('property.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create/{id?}','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
      
        Route::post('store-step2','stepTwoStore')->name('step.two.store');
        Route::post('property-rates-store','propertyRateStore')->name('property.rates.store');
        Route::get('get-property-rates','getPropertyRates');
        Route::post('store-rental-rates','rentalRatesStore');
        Route::post('store-rental-rates','rentalRatesStore');
        Route::post('store-gallery-image','galleryImageStore');
        Route::post("location-info-store",'locationInfoStore');
        Route::post("store-rental-policies",'rentalPolicyStore');
        Route::post("calender-synchronization",'calenderSynchronization');
        Route::get('get-reviews-rating','getReviewsRating');
        Route::post('store-reviews-rating','storeReviewsRating');
        Route::post('store-owner_information','storeOwnerInformation');
        Route::post('get-rental-rates','getRentalRates');
        Route::post('update-rental-rates','UpdateRentalRates');
        Route::post('delete-rental-rates','deleteRentalRates');
        Route::post('delete-property','deleteProperty')->name("delete.propert");
        Route::post('property-approval','propertyApproval')->name("approval.property");
        Route::post('property-feature','propertyFeature')->name("feature.property");
        Route::post('reviews-rates-get-by-id','reviewsRatesGet');
        Route::post('reviews-rating-update','reviewsRatingUpdate');
        Route::post('reviews-rating-delete','reviewsRatingDelete');
        Route::post('get-property-event','getPropertyEvent')->name('get.property.event');
        Route::post('delete-property-image','deletePropertyImage');
        Route::post('get-property-gallery-image','getPropertyGalleryImaage');
        Route::post('update-gallery-image-order','updateGalleryImageOrder');
        Route::post('block-manual-booking','blockManualBooking')->name('block.manual.booking');
        Route::post('rate-manual-booking','rateManualBooking')->name('rate.manual.booking');
        Route::post('un-block-manual-booking','unBlockManualBooking')->name('unblock.manual.booking');
     });
     Route::controller(LocationController::class)->prefix('location')->name('location.')->group(function () {
         Route::post('get-state-by-country-id','getStateByCountryId');
         Route::post('get-region-by-state-id','getRegionByStateId');
         Route::post('get-city-by-region-id','getCityByRegionId');
         Route::post('get-sub-city-by-city-id','getSubCityByCityId');
     });
      //IcalLink
      Route::controller(IcalLinkController::class)->prefix('icalLink')->name('icalLink.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
      //Attraction
    Route::controller(AttractionController::class)->prefix('attraction')->name('attraction.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create/{id?}','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
     //Aminities
     Route::controller(AminitiesController::class)->prefix('amenities')->name('amenities.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
      //Review
      Route::controller(ReviewController::class)->prefix('review')->name('review.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
      //Blog
      Route::controller(BlogController::class)->prefix('blog')->name('blog.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
      
      //contact us
      Route::controller(ContactUsController::class)->prefix('contact_us')->name('contact_us.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
      //social link
      Route::controller(SocialMediaController::class)->prefix('social_link')->name('social_link.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
     //Additional features
     Route::controller(AdditionalFeaturesController::class)->prefix('additional_features')->name('additional_features.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
     //BookingDetails
     Route::controller(BookingController::class)->prefix('booking')->name('booking.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
    //Tax Route
      Route::controller(TaxController::class)->prefix('tax')->name('tax.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
     // user
     Route::controller(UserManagementController::class)->group(function(){
         Route::get('user-management','userMangement')->name('user.management');
        Route::post('change-user-status','changeUserStatus')->name('change.user.status');
    });
     
});


    Route::get('/ip',function (){
        dd(Request::ip(),$_SERVER);
    });

/* 
 Admin Before Login Rote end 
 */