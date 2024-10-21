<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ChatController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Admin Auth Route start

 */
Route::controller(AuthController::class)->middleware(['back-prevent-history','guest'])->group(function () {
    Route::get('/admin','index')->name('login');
    Route::post('login','doLogin')->name('check.creditials');

});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::namespace('Frontend')->group(function() {
    Route::controller('FrontendController')->name('frontend.')->group(function() {
        Route::get('/','index')->name('index');
        Route::get('/contact-us','contactUs')->name('contact.us');
        Route::get('/property-details','propertyDetial')->name('property.details');
        Route::get('/activities-attractions','activitiesAttractions')->name('activities.attractions');
        Route::get('/property-listing','propertyListing')->name('property.listing');
        Route::get('/about-us','aboutUs')->name('abouts');
        Route::get('/list-our-property','listOurProperty')->name('list.our.property');
        Route::post('/sugesstion-destination','destintaionSuggestion')->name('destination.suggestion');
        Route::get('/partner-listing','partnerListing')->name('partner.listing');
        Route::post('/calender','calender');
        Route::get('/property/ical-link/{id}','genratePropertIcalLink');
    });
    Route::controller('PropertyListingController')->group(function () {
        Route::get('/property-details/p{id}','propertyListingDetails')->name("property.listing.details");
        Route::get('/location-property','locationProperty')->name('location.property');
        Route::post('/property-enquiry-store','propertyEnquiryStore')->middleware('check-user-loggedin');
        Route::post('/store-reviews-rating','StoreReviewsRating');
        Route::post('/calculte-rate','calculateRate')->name('calculate.rate');
    });

    Route::controller('AuthController')->middleware(['back-prevent-history','guest'])->prefix('auth')->group(function() {
        Route::post('owner-register','OwnerRegistration')->name('owner.registration');
        Route::post('owner-login','ownerLogin');
    });

    // Booking Route

    Route::controller(BookingInformationController::class)->group(function () {
        Route::post('/store-booking-information','storeBookingInformation')->middleware('check-user-loggedin');
        Route::get('/booking-information','bookingInformation')->name('booking.information');
        Route::post('/make-payment','makePayment')->name('make.paymnet');
        Route::get('/payment-success', function () {
            return view('frontend.payment-success');
        })->name('payment.success');
        Route::get('/payment-failed', function () {
            return view('frontend.payment-error');
        })->name('payment.failed');
    });

    Route::controller(ChatController::class)->group(function(){
        Route::get('/chat','chat')->name('chat');
        Route::get('/get-user','getUser');
        Route::post('/insert-chat','InsertChat');
        Route::post('/get-chat','getChat');
        Route::get('/owner/chat/scheduled-message/{id}','scheduledMessage')->name('owner.chat.sheduled.message');
        Route::get('/owner/chat/edit-template','editTemplate')->name('owner.chat.edit.template');
        Route::get('/owner/chat/scheduled-message/listing/{id}','templateListing')->name('owner.chat.sheduled.message.listing');
        Route::get('/owner/chat/quick-replies','quickReplies')->name('owner.chat.quick-replies');
        Route::get('/owner/chat/create-template/{user_id}','createTemplate')->name('owner.chat.create.template');
        Route::POST('/owner/chat/delete-template','destroy')->name('owner.chat.delete.template');
        Route::post('/owner/chat/template-store','store')->name('owner.chat.template.stote');
    });

    Route::controller(CancelBookingController::class)->prefix('cancel-booking')->group(function(){
        Route::get('cancel/{cancel_id}','cancelBooking')->name('cancel.booking');
        Route::post('/store','cancelBookingStore')->name('cancel.booking.store');
        Route::get('/list','cancelBookingList')->name('cancel.bokking.list');
    });
});
/* 
Admin Auth Route end
 */
/* 
 Admin Before Login Rote Start 
 */
Route::middleware(['back-prevent-history','auth'])->group(function () {


});

    Route::get('/ip',function (){
        dd(Request::ip(),$_SERVER);
    });

/* 
 Admin Before Login Rote end 
 */
