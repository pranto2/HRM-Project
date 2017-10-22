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

/**============================
        Backend Routes
===========================**/
//Route::get('/accounts',"AccountController@allAccount" );
Route::get('/accounts',"AccountController@index" )->name('account.index');
Route::post('/accounts-income-post', 'AccountController@incomeStore')->name('account.income');
Route::post('/accounts-expense-post', 'AccountController@expenseStore')->name('account.expense');
Route::get('/accounts/transaction', 'TransactionController@index')->name('trans.index');
Route::post('/accounts/income-post', 'TransactionController@incomeStore')->name('income.post');
Route::post('/accounts/expense-post', 'TransactionController@expenseStore')->name('expense.post');

Route::get('/department',"DepartmentController@index" )->name('admin.department');
Route::post('/department-post', 'DepartmentController@store')->name('department.post');
Route::get('/department/delete/{id}', 'DepartmentController@destroy')->name('department.delete');

Route::get('/employee','EmployeeController@index' )->name('employee.list');
Route::get('/employee/add-employee','EmployeeController@create' )->name('employee.add');
Route::get('/employee/edit-employee','EmployeeController@edit' )->name('employee.edit');

Route::get('/award',"AwardController@index" )->name('award.index');
Route::get('/award/create',"AwardController@create" )->name('award.create');
Route::get('/award/edit/{id}',"AwardController@edit" )->name('award.edit');
Route::put('/award/update/{id}',"AwardController@update" )->name('award.update');
Route::get('/award/delete/{id}',"AwardController@destroy" )->name('award.delete');
Route::post('/award-post',"AwardController@store" )->name('award.post');






Route::get('/dashboard',"AdminController@index" )->name('admin.dashboard');
Route::Resource('/site-management',"SiteManagementController");
Route::Resource('/category',"CategoryController");
Route::Resource('/sub-category',"SubCategoryController");
Route::Resource('/features-management',"FeaturesManageController");
Route::Resource('/plan-management',"PlanController");
Route::Resource('/location',"LocationController");
Route::Resource('/currency',"CurrencyController");
Route::Resource('/page-management',"PageManagementController");
Route::Resource('/social-management',"SocialController");
Route::post('/social-management/delete',"SocialController@destroy_method")->name('social.delete');
Route::post('/page-management/delete',"PageManagementController@delete_page")->name('page.delete');
Route::post('/page-management/manual/store',"PageManagementController@manual_store")->name('page-management.create.manual');
Route::post('/page-management/manual/update/{id}',"PageManagementController@manual_update")->name('page-management.update.manual');
Route::post('/page-management/template',"PageManagementController@template_store")->name('page-management.template');
Route::get('/deposit',"DepositController@index")->name('deposit.index');
Route::get('/section-management',"SectionmanagementController@index")->name('section.management.index');
Route::get('/section-management/home',"SectionmanagementController@index")->name('section.management.home');
Route::post('/section-management/home',"SectionmanagementController@home_section");
Route::post('/section-management/sidebar-widget',"SectionmanagementController@sidebar_widget")->name('sidebar.management');
Route::post('/section-management',"SectionmanagementController@index");
Route::get('/site-info',"SiteInfoController@index")->name('site.info.index');
Route::post('/site-info/store',"SiteInfoController@store")->name('site.info.store');

Route::post('/site-info/supportbar/store',"SiteInfoController@support_store")->name('site.info.supportbar.store');
Route::post('/site-info/color-changer/store',"SiteInfoController@Color_changer")->name('site.info.color.changer');
Route::get('/advertisement',"AdvertisementController@index")->name('advertisement.index');
Route::post('/advertisement/one',"AdvertisementController@store_one")->name('advertisement.store.one');
Route::post('/advertisement/two',"AdvertisementController@store_two")->name('advertisement.store.two');
Route::post('/paypal',"PaypalController@store")->name('paypal.store');
Route::post('/perfect-money',"PerfectMoneyController@store")->name('perfect.money.store');
Route::post('/btc-payment',"BtcController@store")->name('btc.store');
Route::post('/stripe',"StripeController@store")->name('stripe.store');
Route::get('/menu-management',"MenuController@index")->name('menu.management');
Route::post('/menu-management',"MenuController@store");
Route::get('/footer-management',"FooterManagement@index")->name('footer.management');
Route::post('/about-widget',"FooterManagement@about_widget")->name('about.widget');
Route::post('/useful-links-widget',"FooterManagement@useful_links_widget")->name('useful.links.widget');
Route::post('/useful-links-widget/update',"FooterManagement@useful_links_update")->name('useful.links.update.edit');
Route::post('/useful-links-widget/delete',"FooterManagement@useful_links_delete")->name('useful.links.delete');
Route::post('/recent-post-widget',"FooterManagement@recent_post_widget")->name('recent.post.widget');
Route::post('/feedback-widget',"FooterManagement@feedback_widget")->name('feedback.widget');

/**============================
        Frontend Routes
 ===========================**/

Route::get('/',"BaseController@index")->name('home.page');
Route::get('/about',"BaseController@about_page")->name('about.page');
Route::get('/contact',"BaseController@contact_page")->name('contact.page');
Route::get('/faq',"BaseController@faq_page")->name('faq.page');
Route::get('/pages/{id}',"BaseController@page_show_frontend")->name('page.show.frontend');