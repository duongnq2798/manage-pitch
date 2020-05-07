<?php

$group  = "admin";
$prefix = "Admin";

// login
Route::get("login","$prefix\LoginController@index")
	->name("$group.login")->middleware('logged.auth');
Route::post("login","$prefix\LoginController@login")
	->name("$group.process_login")->middleware('logged.auth');

// register
Route::get("register","$prefix\RegisterController@index")
	->name("$group.register")->middleware('logged.auth');
Route::post("register","$prefix\RegisterController@register")
	->name("$group.process_register")->middleware('logged.auth');

// forgot password
Route::get("forgot-password","$prefix\ForgotPassword@index")
	->name("$group.forgot.password")->middleware('logged.auth');



Route::group(["prefix" => "", "middleware" => ["checkAuthenticate"]], function() {
	// tách ra nhiều controller
	$group      = "admin";
	$HomeController           = "Admin\HomeController";
	$ProfileController        = "Admin\Profile\ProfileController";
	$BillController           = "Admin\Bill\BillController";
	$PitchController          = "Admin\Pitch\PitchController";
	$CustomerController       = "Admin\Customer\CustomerController";
	$DateController           = "Admin\Date\DateController";
	$TimeController           = "Admin\Time\TimeController";
	$ChangePasswordController = "Admin\Profile\ChangePasswordController";
	$MenuController           = "Admin\Menu\MenuController";
	$GroupMenuController      = "Admin\Menu\GroupMenuController";

	// home
	Route::get("","$HomeController@home")
		->name("$group.home");
	Route::get("home","$HomeController@home")
		->name("$group.home");

	// menu
	Route::get("menu","$MenuController@index")
		->name("$group.menu");
	Route::get("menu/add","$MenuController@add")
		->name("$group.menu.add");
	Route::post("menu/add","$MenuController@store")
		->name("$group.menu.store");

	// profile
	Route::get("profile","$ProfileController@index")
		->name("$group.profile");
	Route::post("profile/update","$ProfileController@update")
		->name("$group.profile.update");
	Route::get("change-password","$ChangePasswordController@changePassword")
		->name("$group.change.password");

	// logout
	Route::get("logout","$ProfileController@logout")
		->name("$group.logout");

	//bill
	Route::get("bill","$BillController@index")
		->name("$group.bill");

	//pitch
	Route::get("pitch","$PitchController@index")
		->name("$group.pitch");


	//customer
	Route::get("customer","$CustomerController@index")
		->name("$group.customer");

	//date
	Route::get("date","$DateController@index")
		->name("$group.date");

	//time
	Route::get("time","$TimeController@index")
		->name("$group.time");

});


