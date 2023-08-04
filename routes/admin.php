<?php

use Illuminate\Support\Facades\Route;



Route::group(['namespace'=>'Admin', 'middleware' => ['auth:admin']], function() {



    Route::get('/', 'DashboardController@index')->name('home');
    Route::get('/logout', 'DashboardController@logout')->name('logout');


    // Edit My Profile
    Route::get('/edit-my-profile', 'DashboardController@editProfile')->name('edit.profile');
    Route::post('/post-edit-my-profile', 'DashboardController@postEditProfile')->name('post.edit.profile');


    // Meta Desc
    Route::get('/meta-description', 'MetaDescController@index')->name('meta');
    Route::post('/meta-description', 'MetaDescController@editMeta')->name('edit.meta');

    // Mail Subscriptions
    Route::get('/mail-subscriptions', 'MailSubscriptions@index')->name('mail.sub');
    Route::post('/mail-subscriptions/delete', 'MailSubscriptions@delete')->name('delete.email');
    Route::get('/mail-subscriptions/export', 'MailSubscriptions@export')->name('mail.sub.export');

    // Social Media
    Route::get('/social', 'SocialController@index')->name('social');
    Route::post('/social/update', 'SocialController@update')->name('update.social');

    // Pages
    Route::get('/terms-of-service', 'PagesController@indexTerms')->name('terms');
    Route::post('/terms-of-service/update', 'PagesController@updateTerms')->name('update.terms');
    Route::get('/privacy-policy', 'PagesController@indexPrivacy')->name('privacy');
    Route::post('/privacy-policy/update', 'PagesController@updatePrivacy')->name('update.privacy');
    Route::get('/about-us', 'AboutController@index')->name('about');
    Route::post('/about-us/update', 'AboutController@update')->name('update.about');
    Route::post('/about-us/delete', 'AboutController@delete')->name('delete.about');


    // Contacts
    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::get('/contacts/show/{id}', 'ContactController@show')->name('show.contact');
    Route::get('/contacts/show-message/{id}', 'ContactController@postShow')->name('post.show.contact');
    Route::get('/contacts/delete/{id}', 'ContactController@delete')->name('delete.contact');





});




Route::group(['namespace'=>'Admin', 'middleware' => 'guest:admin'], function() {


    Route::get('/login', 'LoginController@getLogin')->name('admin.login');
    Route::post('/login-admin', 'LoginController@login')->name('post.login');

    Route::get('reset-password', 'AccountsController@emailView')->name('reset.email');
    Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest')->name('post.reset');
    Route::get('password/reset/{token}', 'AccountsController@changePassword')->name('change.password');
    Route::post('password/change/{id}', 'AccountsController@PostChangePassword')->name('post.change.password');

});
