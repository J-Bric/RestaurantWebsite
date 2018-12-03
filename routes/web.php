<?php
Route::get('/', "PagesController@home");
Route::get('/menu', "PagesController@menu");
Route::get('/menu/{category}/category', "PagesController@menu_category");
Route::get('/menu/{category}', "PagesController@menu_single");
Route::get('/about_us', "PagesController@about_us");
Route::get('/schedules', "PagesController@locations");

Route::resource("/dish", "DishesController");
Route::put("/dish/{dish}/featured", "DishesController@featured");
Route::put("/dish/{dish}/unfeatured", "DishesController@unfeatured");
Route::resource("/dish/category", "CategoriesController")->middleware("auth");

Route::get("/user/{user}", "UsersController@profile");
Route::get("/user/{user}/settings", "UsersController@settings")->middleware("auth_me");
Route::post("/user/{user}/update", "UsersController@updateSettings")->middleware("auth_me")->name("update_user_settings");
Auth::routes();