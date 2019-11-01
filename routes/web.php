<?php

/*
    | PUBLIC / EXTERNAL ROUTE
    | Created and updated by : Nur Amalina binti Azren
    | =========================================================================================================
*/

Route::get('/','PublicController@index');

Route::get('/merchant', function () {
    return view('auth.mrc');
});

Route::get('/listvendor','PublicController@listVendor');

Route::get('/vendor/{company_name}/{company_id}','PublicController@viewVendor');
Route::post('/staffinfo','PublicController@staffInfo'); // staff info modal popups
Route::get('/vendor/{company_name}/gallery/{company_id}','PublicController@viewVendorGallery');
Route::get('/vendor/{company_name}/packages/{company_id}','PublicController@viewVendorPackages');
Route::get('/vendor/{company_name}/contactus/{company_id}','PublicController@contactVendors');
Route::post('/submitcontactus','InboxController@contactUs');
Route::get('/vendor/{company_name}/review/{company_id}','ReviewController@index');
Route::post('review','ReviewController@redirect')->middleware('auth');
Route::post('/leavereview','ReviewController@newreview');

Route::get('/packages','PublicController@allVendorPackages');
Route::get('/packages/{package_name}/{package_id}','PublicController@detailVendorPackages');
Route::get('/booking/{package_id}','EventController@bookingForm')->middleware('auth');
Route::post('/newbooking','EventController@newBooking');
Route::post('/actiononbooking','EventController@actionBooking');
Route::post('/clearcart','EventController@clearCart'); // after booking rejected, this link will clear the cart before book new

Route::get('/events',function(){
    return view('external.promo');
});
Route::get('/iaffair',function(){
    return view('external.iaffair');
});

// ---------------------------------------  FOOTER ROUTE

Route::get('/aboutSTD',function(){
    return view('external.about');
});
Route::get('/features',function(){
    return view('external.features');
});
Route::get('/vendorfeatures',function(){
    return view('external.features_vendor');
});
Route::get('/members',function(){
    return view('external.members');
});
Route::get('/terms',function(){
    return view('external.terms');
});

Route::get('/testdulu', function(){
    return view('internal.cprofile');
});

// ---------------------------------------  VENDOR REGISTRATION


Route::get('/form','PublicController@form');
Route::post('/submit','PublicController@newVendor');
// Route::post('/register/87eef723','PublicController@checkUsernamePassword');

// ---------------------------------------  FORGOR PASSWORD

Route::get('/forgot',function(){
    return view('auth.forgot');
});

Route::post('/forgotreset','PublicController@reset');
Route::get('/reset/{key}','PublicController@resetStep2');
Route::post('/updatepw','PublicController@resetStep3');

/*
    | DASHBOARD/ INTERNAL ROUTE
    | Created and updated by : Nur Amalina binti Azren
    | =========================================================================================================
*/

Auth::routes();

// ---------------------------------------  UTILITIES

Route::post('/globalnotification','UtilitiesController@globalNotification');
Route::post('/quickaccess','UtilitiesController@quickAccessData');
Route::get('company/{id}/{filename}', function ($id,$filename){
    return Storage::get('gallery/company/'.$id.'/'.$filename); // photo retrieve link (rarely used)
});

// ---------------------------------------  DASHBOARD (WITH CALENDAR)

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/load_t','UtilitiesController@dashboardController'); // main calendar data
Route::post('/regEvent','EventController@newEvent'); // to create new event
Route::post('/accept','EventController@acceptInvitation');
Route::post('/decline','EventController@declineInvitation');
Route::post('/_accept','EventController@acceptInvitationCompany');
Route::post('/_decline','EventController@declineInvitationCompany');
Route::post('/_ack','EventController@ackDeclineInvitationCompany');

// ---------------------------------------  PROFILE (INTERNAL PROFILE)

Route::get('/profile', 'HomeController@profile');
Route::post('/profile/update', 'HomeController@updateProfile');
Route::get('/profile/gallery','GalleryController@index');
Route::post('/uploading','GalleryController@uploadPhoto'); // vendor upload photo unto gallery
Route::post('/newlogo','GalleryController@newLogo'); // upload new company logo
Route::post('/newdp','GalleryController@newDP'); // upload new profile picture
Route::post('/listphoto', 'GalleryController@listPhotoJSON'); // data for unifiedgallery plugin in JSON
Route::get('/profile/package','PackageController@index');
Route::post('/profile/package/new','PackageController@create');
Route::post('/profile/package/edit','PackageController@edit');
Route::post('/profile/package/update','PackageController@update');
Route::post('/deletepackage','PackageController@delete');
Route::get('/profile/marketing','MarketingController@index');

// ---------------------------------------  MAILBOX

Route::get('/mailbox','InboxController@index')->middleware('auth');
Route::post('/viewmail','InboxController@viewMail')->middleware('auth');
Route::post('/markread','InboxController@markRead')->middleware('auth');
Route::post('/markunread','InboxController@markUnread')->middleware('auth');
Route::post('/markdelete','InboxController@markDeleted')->middleware('auth');

// ---------------------------------------  TIMELINE (MAIN MODULE)

Route::get('/timeline','TimelineController@index');
Route::post('/load_u','TimelineController@timelineEvently'); // data for AlbeTImeline plugin
Route::post('/tdetail','TimelineController@singleTimeline');
Route::get('/printt','TimelineController@printTimeline');
Route::post('/tpdata', 'TimelineController@printAPI'); // printing data

Route::post('send_t','TimelineController@createTimeline');
Route::post('/approvet','TimelineController@approveTimeline');
Route::post('/disapprovet','TimelineController@disapproveTimeline');
Route::post('/updatetimeline','TimelineController@updateTimeline');
Route::post('/deletetimeline','TimelineController@deleteTimeline');

Route::post('/listeventvendor','UtilitiesController@listEventVendors');
Route::post('/invite','EventController@invite'); // invite vendor into event
Route::post('/approveinvitation','EventController@approveinvite');
Route::post('/addcontact','ContactController@addContact'); // add vendor as contact

Route::post('/updateevent','EventController@updateEvent');

Route::post('/eeinfo','AgreementController@read');
Route::post('/end','AgreementController@end');

Route::get('/all','EventController@index');

// ---------------------------------------  CONTACT

Route::get('/contact','ContactController@index')->middleware('auth');

// ---------------------------------------  INSIDER

Route::get('/insider','InsiderController@index')->middleware('auth');
Route::post('/activation','InsiderController@activationStaff');

// ---------------------------------------  ADMIN SECTION

Route::get('/controlcenter',function(){
    return view('admin.auth.login');
});

Route::post('/cardsdata','AdminControllerHome@dashboardData');