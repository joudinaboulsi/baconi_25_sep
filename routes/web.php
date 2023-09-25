<?php
use Illuminate\Support\Facades\Route;
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
/** Start Cms Pages*/
Route::get('/home', 'seoPageController@index')->name('home');

/** Start  Home Page */
Route::get('/homePage','HomePageController@index')->name('homeCms');
Route::post('/home-store','HomePageController@store')->name('homeStore');
Route::get('/company-logo','HomePageController@addlogo')->name('companyLogo');
Route::post('/home-logo-save','HomePageController@save')->name('companyLogoAdd');

/** End  Home Page */

/** Start  Home Slider */

Route::get('/slider-home','HomeSliderController@index')->name('sliderCms');
Route::get('/slider-home-create','HomeSliderController@create')->name('sliderCreateCms');
Route::post('/slider-home-store','HomeSliderController@store')->name('sliderStoreCms');
Route::get('/slider-home-edit-{id}','HomeSliderController@edit')->name('sliderEditCms');
Route::post('/slider-home-update-{id}','HomeSliderController@update')->name('sliderUpdateCms');
Route::delete('/slider-home-delete-{id}','HomeSliderController@delete')->name('sliderDelete');

/** Start About  Page*/
Route::get('/about','AboutController@index')->name('aboutCms');
Route::post('/about-store','AboutController@store')->name('aboutStoreCms');
/** End About  Page*/

/** Start Team Section  */

Route::get('/team','TeamController@index')->name('teamCms');
Route::get('/team-create','TeamController@create')->name('teamCreateCms');
Route::post('/team-store','TeamController@store')->name('teamStoreCms');
Route::get('/team-edit-{id}','TeamController@edit')->name('teamEditCms');
Route::post('/team-update-{id}','TeamController@update')->name('teamUpdateCms');
Route::delete('/team-home-delete-{id}','TeamController@delete')->name('teamDelete');


/** End  Team Section  */

/** Start About slider Section  */
Route::get('/about-slider','AboutSliderController@index')->name('AboutSlider');
Route::get('/about-slider-create','AboutSliderController@create')->name('AboutSliderCreate');
Route::post('/about-slider-save','AboutSliderController@store')->name('AboutSliderStore');
Route::get('/about-slider-edit-{id}','AboutSliderController@edit')->name('AboutSliderEdit');
Route::post('/about-slider-update-{id}','AboutSliderController@update')->name('AboutSliderUpdate');
Route::delete('/about-delete-{id}','AboutSliderController@delete')->name('aboutDelete');


/** Start About slider Section  */

/** Start Principles Section  */
    Route::get('/principles','PrincipleSliderController@index')->name('principles');
    Route::get('/principles-create','PrincipleSliderController@create')->name('principlesCreate');
    Route::post('/principles-save','PrincipleSliderController@store')->name('principlesStore');
    Route::get('/principles-edit-{id}','PrincipleSliderController@edit')->name('principlesEdit');
    Route::post('/principles-update-{id}','PrincipleSliderController@update')->name('principlesUpdate');
    Route::delete('/principles-delete-{id}','PrincipleSliderController@delete')->name('principlesDelete');

/** End Principles Section  */

/** Start Membership Section  */
    Route::get('/slider','MembershipSliderController@index')->name('membership');
    Route::get('/membership-create','MembershipSliderController@create')->name('membershipCreate');
    Route::post('/membership-save','MembershipSliderController@store')->name('membershipStore');
    Route::get('/membership-edit-{id}','MembershipSliderController@edit')->name('membershipEdit');
    Route::post('/membership-update-{id}','MembershipSliderController@update')->name('membershipUpdate');
    Route::delete('/membership-delete-{id}','MembershipSliderController@delete')->name('membershipDelete');

 /** end Membership Section  */

 /** Service Tab one Section  */
    Route::get('/tabeOne','ServiceTabOneController@index')->name('tabOne');
    Route::get('/tabeOne-create','ServiceTabOneController@create')->name('tabOneCreate');
    Route::post('/tabeOne-store','ServiceTabOneController@store')->name('tabOneStore');
    Route::get('/tabeOne-edit-{id}','ServiceTabOneController@edit')->name('tabOneEdit');
    Route::post('/tabeOne-update-{id}','ServiceTabOneController@update')->name('tabOneUpdate');
    Route::delete('/tabeOne-delete-{id}','ServiceTabOneController@delete')->name('tabOneDelete');
 /** end Service Tab one Section  */
 /** start  Service Content */
 Route::get('/service','ServiceController@index')->name('serviceCms');
 Route::post('/service-store','ServiceController@store')->name('serviceCmsStore');
 /** endService Content */



/** Start BLog Page  */
Route::get('/blog','BlogController@index')->name('blogCms');
Route::get('/blog-create','BlogController@create')->name('blogCreateCms');
Route::post('/blog-store','BlogController@store')->name('blogStoreCms');
Route::get('/blog-edit-{id}','BlogController@edit')->name('blogEditCms');
Route::post('/blog-eupdatedit-{id}','BlogController@update')->name('blogUpdateCms');
Route::delete('/blog-delete-{id}','BlogController@delete')->name('blogDelete');
/** End BLog Page */

/** Start Contact  Page*/
Route::get('/contact','contactController@index')->name('contactCms');
Route::post('/contact-save','contactController@store')->name('contactStoreCms');
/** End Contact  Page*/

/** Start Company  Page*/
Route::get('/Companies','CompanyController@index')->name('companyCms');
Route::post('/Companies-save','CompanyController@store')->name('companyStoreCms');
/** End Company  Page*/


/** Start Company  Slider Section*/

Route::get('/slider-company','SliderCompanyController@index')->name('sliderCompany');
Route::get('/slider-company-create','SliderCompanyController@create')->name('sliderCompanyCreate');
Route::post('/slider-company-save','SliderCompanyController@store')->name('sliderCompanyStore');
Route::get('/slider-company-edit-{id}','SliderCompanyController@edit')->name('sliderCompanyEdit');
Route::post('/slider-company-update-{id}','SliderCompanyController@update')->name('sliderCompanyUpdate');
Route::delete('/slider-company-delete-{id}','SliderCompanyController@delete')->name('sliderCompanyDelete');

/** Start Company  Slider Section*/



/** Start Settings section */
Route::get('/settings','SettingsController@index')->name('settingsCms');
Route::post('/settings-store','SettingsController@store')->name('settingsStore');
/** End Settings section */

/** Start Seo Pages */
Route::get('/seo','SeoPageController@index')->name('seoCms');
Route::get('/seo-edit-{id}','SeoPageController@edit')->name('seoEdit');
Route::post('/seo-update-{id}','SeoPageController@update')->name('seoUpdate');
/** End Seo Pages */





// start Frontend Pages

Route::get('/','PagesController@home')->name('homePage');
Route::get('/about-us','PagesController@about')->name('aboutPage');
Route::get('/services','PagesController@services')->name('servicePage');

Route::get('/blogs','PagesController@blog')->name('blogPage');
Route::get('/blog-details-{id}','PagesController@blogDetail')->name('blogDetailPage');
Route::get('/blogs-search', 'PagesController@search')->name('seacrhBlog');
Route::get('/companies','PagesController@companies')->name('companiesPage');

Route::get('/contact-us','PagesController@contact')->name('contactPage');
Route::post('/send-data','PagesController@send_mail')->name('sendData');
Route::post('/send-career','PagesController@send_career')->name('sendDataCareer');



Auth::routes();


