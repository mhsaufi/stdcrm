<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front');
// });

Route::get('/','PublicController@index');

Route::get('/merchant', function () {
    return view('auth.mrc');
});

// -------------------------------------- EXTERNAL ROUTES

Route::get('/listvendor','PublicController@listVendor');

Route::get('/vendorProfile', function () {
    return view('external.vendorProfile');
});

Route::get('/vendorProfile2', function () {
    return view('external.vendorProfile2');
});

Route::get('/packages','PublicController@allVendorPackages');
Route::get('/packages/{package_name}/{package_id}','PublicController@detailVendorPackages');

Route::get('/events',function(){
    return view('external.promo');
});

Route::get('/islamic_center',function(){
    return view('external.iaffair');
});

Route::get('/testdulu', function(){
    return view('internal.cprofile');
});
// ---------------------------------------  FOOTER ROUTE

Route::get('/aboutSTD',function(){
    return view('external.about');
});
Route::get('/features',function(){
    return view('external.features');
});
Route::get('/members',function(){
    return view('external.members');
});
Route::get('/terms',function(){
    return view('external.terms');
});
Route::get('/forgot',function(){
    return view('auth.forgot');
});

Route::post('/forgotreset','PublicController@reset');
Route::get('/reset/{key}','PublicController@resetStep2');
Route::post('/updatepw','PublicController@resetStep3');

Route::post('/staffinfo','PublicController@staffInfo');
Route::get('/form','PublicController@form');
Route::post('/submit','PublicController@newVendor');
Route::post('/register/87eef723','PublicController@checkUsernamePassword');
Route::get('/vendor/{company_name}/{company_id}','PublicController@viewVendor');
Route::get('/vendor/{company_name}/gallery/{company_id}','PublicController@viewVendorGallery');
Route::get('/vendor/{company_name}/packages/{company_id}','PublicController@viewVendorPackages');
Route::get('/vendor/{company_name}/contactus/{company_id}','PublicController@contactVendors');
Route::get('/vendor/{company_name}/review/{company_id}','ReviewController@index');
Route::post('review','ReviewController@redirect')->middleware('auth');
Route::post('/leavereview','ReviewController@newreview');

Route::get('/booking/{package_id}','EventController@bookingForm')->middleware('auth');
Route::post('/newbooking','EventController@newBooking');
Route::post('/actiononbooking','EventController@actionBooking');
Route::post('/clearcart','EventController@clearCart');
Route::post('/submitcontactus','InboxController@contactUs');

Auth::routes();

Route::post('/globalnotification','UtilitiesController@globalNotification');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile');

Route::get('/timeline','TimelineController@index');

Route::get('/mailbox','InboxController@index')->middleware('auth');
Route::post('/viewmail','InboxController@viewMail')->middleware('auth');
Route::post('/markread','InboxController@markRead')->middleware('auth');
Route::post('/markunread','InboxController@markUnread')->middleware('auth');
Route::post('/markdelete','InboxController@markDeleted')->middleware('auth');

Route::get('/all','EventController@index');

// API [JSON]
Route::post('/quickaccess','UtilitiesController@quickAccessData');
Route::post('/listeventvendor','UtilitiesController@listEventVendors');
Route::post('/load_t','UtilitiesController@dashboardController');
Route::post('/load_u','TimelineController@timelineEvently');
Route::post('send_t','TimelineController@createTimeline');
Route::post('/regEvent','EventController@newEvent');
Route::post('/invite','EventController@invite');
Route::post('/accept','EventController@acceptInvitation');
Route::post('/decline','EventController@declineInvitation');
Route::post('/_accept','EventController@acceptInvitationCompany');
Route::post('/_decline','EventController@declineInvitationCompany');
Route::post('/_ack','EventController@ackDeclineInvitationCompany');
Route::post('/updateevent','EventController@updateEvent');
Route::post('/tdetail','TimelineController@singleTimeline');
Route::post('/approvet','TimelineController@approveTimeline');
Route::post('/disapprovet','TimelineController@disapproveTimeline');
Route::post('/updatetimeline','TimelineController@updateTimeline');
Route::post('/deletetimeline','TimelineController@deleteTimeline');

// ALL EVENTS ROUTES

Route::post('/eeinfo','AgreementController@read');
Route::post('/end','AgreementController@end');

Route::get('/profile/gallery','GalleryController@index');

Route::get('/profile/package','PackageController@index');
Route::post('/profile/package/new','PackageController@create');
Route::post('/profile/package/edit','PackageController@edit');
Route::post('/profile/package/update','PackageController@update');
Route::post('/deletepackage','PackageController@delete');
Route::get('/profile/marketing','MarketingController@index');

Route::post('/uploading','GalleryController@uploadPhoto');

Route::get('/printt','TimelineController@printTimeline');
Route::post('/tpdata', 'TimelineController@printAPI'); // printing data
Route::post('/listphoto', 'GalleryController@listPhotoJSON');
Route::post('/newlogo', 'GalleryController@newLogo');
Route::post('/newdp','GalleryController@newDP');

Route::get('/contact','ContactController@index')->middleware('auth');
Route::post('/addcontact','ContactController@addContact');

Route::get('/insider','InsiderController@index')->middleware('auth');

Route::get('company/{id}/{filename}', function ($id,$filename)
{
    return Storage::get('gallery/company/'.$id.'/'.$filename);
});



// Route::get('/testdb','TimelineController@test');
Route::get('/testdb','UtilitiesController@dashboardController');

