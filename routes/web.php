<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/////////login/////////////
Route::any('Login', 'Login@index');
Route::any('login/login_check', 'Login@login_check');

////////logout//////
Route::get('logout', 'Auth\AuthController@logout');

/////home panel///////////////
Route::get('/','Home_index@home');
Route::get('home','Home_index@home');
Route::get('service','Home_index@services');
Route::get('treatment','Home_index@treatments');
Route::get('resort','Home_index@resorts');
Route::get('gallery','Home_index@gallery');
Route::get('get-gallary-pics','Home_index@get_gallery_pic');///10-01
Route::get('get_gallary_pics','Home_index@get_gallery_pics');///10-01


Route::get('get-resort-pics','Home_index@get_resort_pic');
Route::get('get_resort_pics','Home_index@get_resort_pics');

Route::get('get-vip-resort-pics','Home_index@get_vip_resort_pic');
Route::get('get_vip_resort_pics','Home_index@get_vip_resort_pics');

Route::get('get-other-resort-pics','Home_index@get_other_resort_pic');
Route::get('get_other_resort_pics','Home_index@get_other_resort_pics');


Route::get('contact','Home_index@contacts');
Route::post('message/send','Home_index@message_post');

///////user nd doctor panel////
Route::get('myAccount/show','MyAccount@show');
Route::get('myAccount/profile','MyAccount@profile');
Route::post('myAccount/edit_post','Employees@edit_post_client');
Route::post('message/post','MyAccount@msg_post');
Route::get('Enroll','Employees@add_client');
Route::post('client/add_post','Employees@add_post_client');
Route::any('check_emails','Employees@check_email');

Route::get('my_account/show','MyAccount@show_doc');
Route::get('my_account/profile','MyAccount@profile_doc');
Route::post('message_post','MyAccount@msg_post_doc');
Route::post('my_account/edit_post','Employees@edit_post_doc');



////////backend/////////
Route::get('home/index','Dashboard@show');
Route::get('home/dashboard', 'Dashboard@show');
//Route::get('home/dashboard','Packages@show');

Route::get('package/show','Packages@show');
Route::get('package/add','Packages@add');
Route::post('package/add_post','Packages@add_post');
Route::any('package/edit/{id}','Packages@edit');
Route::post('package/edit_post','Packages@edit_post');
Route::any('package/delete/{id}','Packages@delete');

///////2016-12-21///start////
Route::get('service/show','Services@show');
Route::get('service/add','Services@add');
Route::post('service/add_post','Services@add_post');
Route::any('service/edit/{id}','Services@edit');
Route::post('service/edit_post','Services@edit_post');
Route::any('service/delete/{id}','Services@delete');

Route::get('treatment/show','Treatment@show');
Route::get('treatment/add','Treatment@add');
Route::post('treatment/add_post','Treatment@add_post');
Route::any('treatment/edit/{id}','Treatment@edit');
Route::post('treatment/edit_post','Treatment@edit_post');
Route::any('treatment/delete/{id}','Treatment@delete');

Route::get('testimonial/show','Testimonial@show');
Route::post('testimonial/add_post','Testimonial@add_post');
Route::any('testimonial/delete/{id}','Testimonial@delete');
Route::post('testimonial/edit_post','Testimonial@edit_post');

///////2016-12-21///end////
///////2016-12-22///start////
Route::get('team/show','Teams@show');///////2016-12-21//////
Route::any('team/delete/{id}','Teams@delete');///////2016-12-21///
Route::get('team/add','Teams@add');/////////2016-12-24/////
Route::post('team/add_post','Teams@add_post');/////////2016-12-24/////
Route::any('team/edit/{id}','Teams@edit');/////////2016-12-24/////
Route::post('team/edit_post','Teams@edit_post');/////////2016-12-24/////


/////////2016-12-24/////
Route::get('doctor/show','Employees@show');
Route::get('doctor/add','Employees@add');
Route::post('doctor/add_post','Employees@add_post');
Route::any('doctor/edit/{id}','Employees@edit');
Route::post('doctor/edit_post','Employees@edit_post');
Route::any('doctor/delete/{id}','Employees@delete');

Route::get('resort/show','Resort@show');
Route::get('resort/resort_category','Resort@resort_category');
Route::post('resort/add_cat','Resort@add_cat');
Route::get('resort/edit_category/{id}','Resort@edit_category');
Route::post('resort/update_cat','Resort@update_cat');
Route::get('resort/delete_resort_cat/{id}','Resort@delete_resort_cat');
Route::get('vip_resort/show','Resort@vip_show');
Route::get('other/show','Resort@other_show');

Route::post('resort/get_category','Resort@get_category');

///////common /////
Route::any('updateShortNote','Resort@updateShortNote');
Route::any('updateDetails','Resort@updateDetails');
Route::any('pic/delete/{id}','Resort@picDelete');
Route::any('pic/add_post','Resort@picAdd');
Route::any('pic/edit_post','Resort@picEdit');


Route::get('company/edit','Companies@edit');
Route::post('company/edit_post','Companies@edit_post');

Route::get('about_us/edit','Companies@about_us_edit');/////26////
Route::post('about_us/edit_post','Companies@about_us_edit_post');/////26////

Route::get('support/show','Support@show');
Route::get('support/add','Support@add');
Route::post('support/add_post','Support@add_post');
Route::any('support/edit/{id}','Support@edit');
Route::post('support/edit_post','Support@edit_post');
Route::any('support/delete/{id}','Support@delete');

Route::get('gallery/show','Gallery@show');
Route::post('gallery/add_cat','Gallery@add_cat');
Route::post('gallery/add_sub_cat','Gallery@add_sub_cat');
Route::post('gallery/get_sub_category','Gallery@get_sub_category');
Route::post('gallery/add_post','Gallery@add_post');
Route::post('gallery/edit_post','Gallery@edit_post');
Route::any('gallery/delete/{id}','Gallery@delete');

Route::get('client/show','Employees@show_client');
Route::get('client/status_change/{val}/{id}','Employees@status_change');

Route::get('new_message/{flag}','Message@new_message');
Route::post('send_message','Message@send_message');

Route::get('message/list','Message@show');
Route::any('get_message/{id}','Message@get_message');
Route::post('admin/update_password','Employees@update_pass');
Route::post('user/update_password','Employees@update_pass');
Route::post('doctor/update_password','Employees@update_pass');
Route::get('admin/reply/{flag}','Message@new_message');





