<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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


//   Route::get('/pharmacyProduct', "ProductController@index");
//   Route::get('/pharmacyProduct/create', "PharmacyProductController@create");
//   Route::post('/pharmacyProduct', "PharmacyProductController@store");
//   Route::get('/pharmacyProduct/{pharmacyProduct}', 'PharmacyProductController@show');
//   Route::get('/quarantineCenterInhabitant/{pharmacyProduct}/edit', 'PharmacyProductController@edit');
//   Route::patch('/pharmacyProduct/{pharmacyProduct}', 'PharmacyProductController@update');
//   Route::delete('/pharmacyProduct/{pharmacyProduct}', 'PharmacyProductController@destroy');



Route::group(['prefix' => 'AEE_Dark'], function () {
    Route::view('/', 'AEE_Dark.index');
    Route::view('/about', 'AEE_Dark.about');
    Route::view('/contact', 'AEE_Dark.contact');
    Route::view('/home_02', 'AEE_Dark.index-2');
    Route::view('/home_03', 'AEE_Dark.index-3');
    Route::view('/elements', 'AEE_Dark.elements');
    Route::view('/services', 'AEE_Dark.services');
    Route::view('/services_details', 'AEE_Dark.services_details');
    Route::view('/project_details', 'AEE_Dark.project_details');
    Route::view('/single-project', 'AEE_Dark.single-project');
    Route::view('/blog', 'AEE_Dark.blog');
    Route::view('/single-blog', 'AEE_Dark.single-blog');
    Route::view('/blog-two-column', 'AEE_Dark.blog-two-column');
    Route::view('/blog-details', 'AEE_Dark.blog-details');
    Route::view('/login-register', 'AEE_Dark.login-register');
});



Route::group(['prefix' => 'AEE_Slider'], function () {
    Route::view('/', 'AEE_Slider.index');
    Route::view('/about', 'AEE_Slider.about');
    Route::view('/blog-single', 'AEE_Slider.single-blog');
    Route::view('/blog', 'AEE_Slider.blog');
    Route::view('/contact', 'AEE_Slider.contact');
    Route::view('/portfolio', 'AEE_Slider.portfolio');
    Route::view('/pricing', 'AEE_Slider.pricing');
    Route::view('/services', 'AEE_Slider.services');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'HomePageController@index');
    Route::get('/our_team', 'OurTeamController@index');
    Route::get('/projects', 'ProjectsPageController@index');
    Route::get('/about', 'AboutUsPageController@index');
    Route::get('/featuredProjects', 'FeaturedProjectsPageController@index');
    Route::get('/processes', 'ProcessesPageController@index');
    Route::get('/single_project_view/{project}', 'ProjectsPageController@single_view');
    Route::get('/singleCategoryView/{projectCategory}', 'FeaturedProjectsPageController@single_view');

    Route::view('/slider', 'AEE_Real.slider');
    Route::view('/blog-single', 'AEE_Real.single-blog');
    Route::view('/blog', 'AEE_Real.blog');
    Route::view('/contact', 'AEE_Real.contact');
    Route::view('/portfolio', 'AEE_Real.portfolio');
    Route::view('/pricing', 'AEE_Real.pricing');
    Route::view('/services', 'AEE_Real.services');
});

Route::group(['prefix' => 'AEE_ForDboard'], function () {
    Route::get('/', 'HomePageController@indexForDashboard');
    Route::get('/our_team', 'OurTeamController@indexForDashboard');
    Route::view('/slider', 'AEE_ForDboard.slider');
    Route::view('/about', 'AEE_ForDboard.about');
    Route::view('/processes', 'AEE_ForDboard.processes');
    Route::view('/projects', 'AEE_ForDboard.projects');
    Route::view('/blog-single', 'AEE_ForDboard.single-blog');
    Route::view('/blog', 'AEE_ForDboard.blog');
    Route::view('/contact', 'AEE_ForDboard.contact');
    Route::view('/portfolio', 'AEE_ForDboard.portfolio');
    Route::view('/pricing', 'AEE_ForDboard.pricing');
    Route::view('/services', 'AEE_ForDboard.services');
});



Route::group(['prefix' => 'AEE_Dashboard'], function () {
    Route::resource('/employee', 'EmployeeController');
    Route::resource('/project', 'ProjectController');
    Route::resource('/projectCategory', 'ProjectCategoryController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/registeredMembership', 'RegisteredMembershipController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/images', 'ImageController');
    Route::get('/featuredProjects', 'FeaturedProjectsController@index');
    Route::post('/featuredProjects/{project}/remove', 'FeaturedProjectsController@remove');
    Route::post('/featuredProjects/{project}/add', 'FeaturedProjectsController@add');
    Route::get('/footer', 'FooterController@index');
    Route::post('/footer/followUs', 'FooterController@storeAccounts');
    Route::post('/footer/location', 'FooterController@storeLocationInfo');
    Route::post('/footer/logo', 'ImageController@storeLogo');
    Route::get('/who_we_are', 'WhoWeAreController@index');
    Route::post('/project/images', 'ImageController@storeProjectImages');
    Route::post('/who_we_are', 'WebTextController@store');
    Route::post('/who_we_are/storeCertificates', 'ImageController@storeCertificates');
    Route::post('/who_we_are/groupPic', 'ImageController@storeGroupImage');
    Route::post('/who_we_are/fileUpload', 'FileController@storeFile');
    Route::post('/who_we_are/storeHistory', 'HistoryController@storeHistory');
    Route::post('/who_we_are/timeline', 'TimelineController@storeTimeline');
    Route::patch('/who_we_are/{webText}/update', 'WebTextController@update');
    Route::patch('/who_we_are/{timeline}/updateTimeline', 'TimelineController@updateTimeline');
    Route::patch('/who_we_are/{webLink}/updateHistory', 'HistoryController@updateHistory');
    Route::delete('/who_we_are/{webText}/delete', 'WebTextController@destroy');
    Route::delete('/who_we_are/{timeline}/deleteTimeline', 'TimelineController@destroyTimeline');
    Route::delete('/who_we_are/{image}', 'WebTextController@destroyGroupImage');
    Route::get('/who_we_are/{webText}/edit', 'WebTextController@edit');
    Route::get('/who_we_are/{timeline}/editTimeline', 'TimelineController@editTimeline');
    Route::view('/', 'AEE_Dashboard.index');
    Route::view('/about', 'AEE_Dashboard.about');
    Route::view('/employee_registration', 'AEE_Dashboard.forms.employee_registration');
    Route::view('/project_registration', 'AEE_Dashboard.forms.project_registration');
    Route::view('/projectCategory_registration', 'AEE_Dashboard.forms.projectCategory_registration');
    Route::view('/elements', 'AEE_Dashboard.elements');
    Route::view('/blog', 'AEE_Dashboard.blog');
    Route::view('/contact', 'AEE_Dashboard.contact');
    Route::view('/single-project', 'AEE_Dashboard.single-project');
    Route::view('/single-blog', 'AEE_Dashboard.single-blog');
    Route::view('/blog-single', 'AEE_Dashboard.single-blog');
    Route::view('/portfolio', 'AEE_Dashboard.portfolio');
    Route::view('/pricing', 'AEE_Dashboard.pricing');
    Route::group(['prefix' => '/web_pages'], function () {
        Route::view('/home', 'AEE_Dashboard.web_pages.home');
    });
});



