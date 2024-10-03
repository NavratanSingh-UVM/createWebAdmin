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
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
     });
       //Property listing
    Route::controller(PropertyListingController::class)->prefix('property')->name('property.')->group(function(){
        Route::get('list','list')->name('list');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update','update')->name('update');
        Route::post('delete','destroy')->name('delete');
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
        Route::get('create','create')->name('create');
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