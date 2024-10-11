<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;


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
    Route::get('/','index')->name('login');
    Route::post('login','doLogin')->name('check.creditials');
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

    // Admin Master Route 
    Route::controller(AminitiesController::class)->prefix('aminities')->name('master.')->group(function () {
        /* 
        Main Aminity Route start
        */
        Route::get('manage-main-aminity','manageMainAminity')->name('manage.main.aminity');
        Route::get("get-aminites-using-datatables","getAmenitesUsingDatatble")->name('get.aminites.using.datatables');
        Route::get('create-main-aminity','createMainAminty')->name('create.main.aminity');
        Route::post('store-main-aminity','storeMainAminity')->name('store.main.aminity');
        Route::post('delete-main-aminities','DeleteMAinAminity')->name('delete.main.aminities');
        Route::get("edit-main-aminities/{id}",'editMainAminity')->name('edit.main.aminities');
        Route::post('update-main-aminities','updateMainAminities')->name('update.main.aminities');
         /* 
        Main Aminity Route end
        */

        /* 
        Sub Aminity Route start
        */
        Route::get('manage-sub-aminity','manageSubAminity')->name('manage.sub.aminity');
        Route::get("get-sub-aminites-using-datatables","getSubAmenitesUsingDatatble")->name('get.sub.aminites.using.datatables');
        Route::get('create-sub-aminity','createsubAminty')->name('create.sub.aminity');
        Route::post('store-sub-aminities','storeSubAminity')->name('store.sub.aminities');
        Route::post('delete-sub-aminities','DeleteSubAminity')->name('delete.sub.aminities');
        Route::get("edit-sub-aminities/{id}",'editSubAminity')->name('edit.sub.aminities');
        Route::post('update-sub-aminities','updateSubAminities')->name('update.sub.aminities');
        /* 
        Sub Aminity Route end
        */
    });

    // Property Listing Route Start
    Route::controller(PropertyListingController::class)->prefix('property-listing')->name('property.listing.')->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create/{id?}','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::post('/store-step2','stepTwoStore')->name('step.two.store');
        Route::post('/property-rates-store','propertyRateStore')->name('property.rates.store');
        Route::get('/get-property-rates','getPropertyRates');
        Route::post('/store-rental-rates','rentalRatesStore');
        Route::post('/store-rental-rates','rentalRatesStore');
        Route::post('/store-gallery-image','galleryImageStore');
        Route::post("location-info-store",'locationInfoStore');
        Route::post("store-rental-policies",'rentalPolicyStore');
        Route::post("calender-synchronization",'calenderSynchronization');
        Route::get('get-reviews-rating','getReviewsRating');
        Route::post('/store-reviews-rating','storeReviewsRating');
        Route::post('/store-owner_information','storeOwnerInformation');
        Route::post('/get-rental-rates','getRentalRates');
        Route::post('/update-rental-rates','UpdateRentalRates');
        Route::post('/delete-rental-rates','deleteRentalRates');
        Route::post('/delete-property','deleteProperty')->name("delete.propert");
        Route::post('/property-approval','propertyApproval')->name("approval.property");
        Route::post('/property-feature','propertyFeature')->name("feature.property");
        Route::post('reviews-rates-get-by-id','reviewsRatesGet');
        Route::post('reviews-rating-update','reviewsRatingUpdate');
        Route::post('reviews-rating-delete','reviewsRatingDelete');
        Route::post('/get-property-event','getPropertyEvent')->name('get.property.event');
        Route::post('/delete-property-image','deletePropertyImage');
        Route::post('/get-property-gallery-image','getPropertyGalleryImaage');
        Route::post('/update-gallery-image-order','updateGalleryImageOrder');
        Route::post('/block-manual-booking','blockManualBooking')->name('block.manual.booking');
        Route::post('/rate-manual-booking','rateManualBooking')->name('rate.manual.booking');
        Route::post('/un-block-manual-booking','unBlockManualBooking')->name('unblock.manual.booking');
       
    });
    // Property Listing Route End
    Route::controller(UserManagementController::class)->group(function(){
        Route::get('user-management','userMangement')->name('user.management');
        Route::get('manage-owner-billing-detail','OwnerBillingAdress')->name('manage.owner.billing.detail');
        Route::post('change-user-status','changeUserStatus')->name('change.user.status');
    });

});

    Route::get('/ip',function (){
        dd(Request::ip(),$_SERVER);
    });

/* 
 Admin Before Login Rote end 
 */
