<?php

$group  = "admin";
$prefix = "Admin";

// login
Route::get("login","$prefix\LoginController@index")
	->name("$group.login");
Route::post("login","$prefix\LoginController@login")
	->name("$group.process_login");

// register
Route::get("register","$prefix\RegisterController@index")
	->name("$group.register");
Route::post("register","$prefix\RegisterController@register")
	->name("$group.process_register");

// forgot password
Route::get("forgot-password","$prefix\ForgotPassword@index")
	->name("$group.forgot.password");



Route::group(["prefix" => "", "middleware" => ["checkAuthenticate"]], function() {
	// tách ra nhiều controller
	$group = "admin";
	$HomeController            = "Admin\HomeController";
	$ProfileController         = "Admin\Profile\ProfileController";
	$BillController            = "Admin\Bill\BillController";
	$PitchController           = "Admin\Pitch\PitchController";
	$CustomerController        = "Admin\Customer\CustomerController";
	$DateController            = "Admin\Date\DateController";
	$TimeController            = "Admin\Time\TimeController";
	$SpecialDateTimeController = "Admin\SpecialDateTime\SpecialDateTimeController";
	$ChangePasswordController  = "Admin\Profile\ChangePasswordController";
	$MenuController            = "Admin\Menu\MenuController";
	$PermissionController      = "Admin\Permission\PermissionController";
	$RoleController            = "Admin\Role\RoleController";

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

	// permission
	Route::get("permission","$PermissionController@index")
		->name("$group.permission");
	Route::get("permission/add","$PermissionController@add")
		->name("$group.permission.add");
	Route::post("permission/add","$PermissionController@store")
		->name("$group.permission.store");

	// role
	Route::get("role","$RoleController@index")
		->name("$group.role");
	Route::get("role/add","$RoleController@add")
		->name("$group.role.add");
	Route::post("role/add","$RoleController@store")
		->name("$group.role.store");

	// profile
	Route::get("profile","$ProfileController@index")
		->name("$group.profile");
	Route::post("profile/update","$ProfileController@update")
		->name("$group.profile.update");
	Route::get("change-password","$ChangePasswordController@changePassword")
		->name("$group.change.password");

	//logout
	Route::get("logout","$ProfileController@logout")
		->name("$group.logout");

	//bill
	Route::get("bill","$BillController@index")
		->name("$group.bill");

	//pitch
	Route::get("pitch","$PitchController@index")
		->name("$group.pitch");
	Route::get("pitch/add","$PitchController@add")
		->name("$group.pitch.add");
	Route::post("pitch/add","$PitchController@store")
		->name("$group.pitch.store");


	//customer
	Route::get("customer","$CustomerController@index")
		->name("$group.customer");

	//date
	Route::get("date","$DateController@index")
		->name("$group.date");
	Route::get("date/add","$DateController@add")
		->name("$group.date.add");
	Route::post("date/add","$DateController@store")
		->name("$group.date.store");

	//time
	Route::get("time-slots","$TimeController@index")
		->name("$group.time");
	Route::get("time-slots/add","$TimeController@add")
		->name("$group.time.add");
	Route::post("time-slots/add","$TimeController@store")
		->name("$group.time.store");

	//special date time
	Route::get("special-datetime","$SpecialDateTimeController@index")
		->name("$group.specialdatetime");
	Route::get("special-datetime/add-time","$SpecialDateTimeController@addSpecialHour")
		->name("$group.specialdatetime.addtime");
	Route::post("special-datetime/add-time","$SpecialDateTimeController@storeSpecialHour")
		->name("$group.specialdatetime.storetime");
	Route::get("special-datetime/add-date","$SpecialDateTimeController@addSpecialDate")
		->name("$group.specialdatetime.adddate");
	Route::post("special-datetime/add-date","$SpecialDateTimeController@storeSpecialDate")
		->name("$group.specialdatetime.storedate");
	Route::get("special-datetime/add-date-time","$SpecialDateTimeController@addSelectSpecialDateTime")
		->name("$group.specialdatetime.adddatetime");
	Route::post("special-datetime/add-date-time","$SpecialDateTimeController@storeSpecialDateTime")
		->name("$group.specialdatetime.storedatetime");

});


