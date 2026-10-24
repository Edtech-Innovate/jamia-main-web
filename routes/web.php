<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamiaFormsController;
use App\Http\Controllers\PaymentFormsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\LeadController;
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
    // return view('welcome');
// });
Route::redirect('/recognition-and-approvals','/approvals',301);
Route::redirect('/online-result','/student-login',301);
Route::redirect('/center_of_india','/india',301);
Route::redirect('/accredited-center','/authorized-centers',301);


Route::redirect('/index.html','/',301);
Route::redirect('/index','/',301);
Route::redirect('/index.php','/',301);
Route::redirect('/.index','/',301);
Route::redirect('/public/index.php','/',301);
Route::redirect('/www.jamiaurdualigarh.com','/',301);
Route::redirect('/public/index.html','/',301);
Route::redirect('/blog','/blogs',301);
Route::redirect('/blog.html','/blogs',301);
Route::redirect('/blog-details.html','/blogs',301);
Route::redirect('/blog/index.html','/blogs',301);
Route::redirect('/blog/index.php','/blogs',301);
Route::redirect('/blog/10th-adeeb-secondary','/10th-adeeb-secondary',301);
Route::redirect('/public/10th-adeeb-secondary','/10th-adeeb-secondary',301);
Route::redirect('/blog/jamia-millia-islamia-distance-education','/blogs',301);
Route::redirect('/blog/jamia-urdu-college-of-education','/blogs',301);
Route::redirect('/blog/jamia-urdu-aligarh','/blogs',301);



Route::view('/', 'web.content.index')->name('index');
Route::view('/10th-adeeb-secondary', 'web.content.10th-adeeb-secondary')->name('10th-adeeb-secondary');
Route::view('/12th-adeeb-e-mahir-secondary', 'web.content.12th-adeeb-e-mahir-secondary')->name('12th-adeeb-secondary');
Route::view('/about', 'web.content.about')->name('about');
Route::view('/authorized-centers', 'web.content.authorized-centers')->name('authorized-centers');
Route::view('/contact', 'web.content.contact')->name('contact');
Route::view('/feess', 'web.content.fee-structure')->name('fee-structure');
Route::view('/message-deputy-registrar', 'web.content.message-deputy-registrar')->name('message-deputy');
Route::view('/osd', 'web.content.osd')->name('message-osd');
Route::view('/registrar', 'web.content.registrar')->name('registrar');
Route::view('/online-information', 'web.content.online-information')->name('online-information');
Route::view('/online-result', 'web.content.online-result')->name('online-result');
Route::view('/pricing', 'web.content.pricing')->name('pricing');
Route::view('/approvals', 'web.content.approvals')->name('approvals');
Route::view('/vision-mission', 'web.content.vision-mission')->name('vision-mission');
Route::view('/vice-cancellor', 'web.content.vice-cancellor')->name('vice-cancellor');
Route::view('/controller-of-exam', 'web.content.controller-of-exam')->name('controller-of-exam');
// Route::view('/blogs', 'web.content.blogs')->name('blogs');
Route::view('/blog-details', 'web.parts.blog-details')->name('blog-details');
// Route::view('/login-register', 'web.parts.login')->name('blog-details');
Route::view('/blog-details-2', 'web.parts.blog-details-2')->name('blog-details-2');
Route::view('/blog-details-3', 'web.parts.blog-details-3')->name('blog-details-3');
Route::view('/blog-details-4', 'web.parts.blog-details-4')->name('blog-details-4');
Route::view('/india', 'web.content.india')->name('india');
Route::view('/overseas', 'web.content.overseas')->name('overseas');
Route::view('/online', 'web.content.online')->name('online');
Route::view('/terms-conditions', 'web.content.terms-conditions')->name('terms-conditions');
Route::view('/privacy-policy', 'web.content.privacy-policy')->name('privacy-policy');
Route::view('/gallery', 'web.content.gallery')->name('gallery');
Route::view('/payment_form', 'web.parts.payment_form')->name('payment_form');
// Route::post('/payment_formdb', [PaymentFormsController::class, 'create'])->name('apply-for-center');
// Route::get('/admin/payment_form', [PaymentFormsController::class, 'index'])->name('admin.payment_form');
Route::get('/payment_form', [PaymentController::class, 'index'])->name('payment_form');
Route::post('/payment_form_store', [PaymentController::class, 'store'])->name('payment_form_store');
Route::post('/payment_form_update', [PaymentController::class, 'update'])->name('payment_form_update');
Route::get('/admin/payment_form', [PaymentController::class, 'show'])->name('payment_form');




//Jamia Form For Center
Route::view('/apply-for-center', 'web.parts.apply-for-center')->name('apply-for-center');
Route::view('/new_center', 'web.parts.new_centrer')->name('new_center');
Route::post('/apply-for-centers', [JamiaFormsController::class, 'create'])->name('apply-for-center');
Route::get('/print-apply-for-center/{id}', [JamiaFormsController::class, 'printJamiaForm'])->name('print-apply-for-center');
Auth::routes();







Route::get('/home', [JamiaFormsController::class, 'index'])->name('home');

// Route::view('create_program', 'form.program.create')->name('create_program');
// Route::post('add_program', [ProgramController::class, 'create'])->name('add_program');
// Route::get('edit_jamia_form/{id}', [JamiaFormsController::class, 'edit'])->name('edit_jamia_form');
// Route::post('update_jamia_form/{id}', [JamiaFormsController::class, 'update'])->name('update_jamia_form');
Route::get('delete_jamia_form/{id}', [JamiaFormsController::class, 'destroy'])->name('delete_jamia_form');
Route::get('/admin/blog', [BlogsController::class, 'index'])->name('blog');
Route::view('/create_blog', 'form.admin-blog.create_blog_form')->name('create_blog');
Route::post('/add_blog', [BlogsController::class, 'create'])->name('add_blog');
Route::get('/edit_blog/{id}', [BlogsController::class, 'edit'])->name('edit_blog');
Route::post('/update_blog/{id}', [BlogsController::class, 'update'])->name('update_blog');
Route::get('/delete_blog/{id}', [BlogsController::class, 'destroy'])->name('delete_blog');
Route::get('/blog/{slug}', [BlogsController::class, 'show'])->name('blog');
Route::get('/verify/{id}', [JamiaFormsController::class, 'verify'])->name('content.verify');

// Route::view('/blogs',[BlogsController::class,'blog'])->name('blogs');

Route::get('/blogs', [BlogsController::class, 'blog'])->name('blog');
Route::get('/', [BlogsController::class, 'show_index'])->name('blog_index');
//Route::get('/server-down', [WebHomeController::class, 'student_results'])->name('server-down');
Route::post('/result', [WebHomeController::class, 'student_results'])->name('resultswb');
Route::view('/student-login', 'web.content.student-login')->name('student-loginwb');
Route::get('/add-center', [CenterController::class, 'create']);
Route::post('/addcenter', [CenterController::class, 'store'])->name('addcenter');
Route::get('/admin/center', [CenterController::class, 'index'])->name('center');
Route::get('/delete-center/{id}', [CenterController::class, 'destroy'])->name('delete-center');
Route::get('/edit-center/{id}', [CenterController::class, 'edit'])->name('edit-center');
Route::post('/centers/update/{id}', [CenterController::class, 'update'])->name('edit-center');
// web.php
// Route::get('/centers/india', [CenterController::class, 'indianCenters'])->name('centers.india');
Route::get('/centers/overseas', [CenterController::class, 'overseasCenters'])->name('centers.overseas');
Route::get('/centers/india', [CenterController::class, 'indianCenters'])->name('centers.india');
Route::post('/centers/filter', [CenterController::class, 'ajaxFilterCenters'])->name('centers.filter');
Route::post('/centers/overseas/filter', [CenterController::class, 'filterOverseas'])->name('centers.overseas.filter');
Route::post('/leads', [LeadController::class, 'store']); 

Route::post('/fetch-leads-with-category', [LeadController::class, 'fetchLeadsWithCategory']);
Route::get('/leads/{id}', [LeadController::class, 'destroy']);
Route::get('/admin/lead', [LeadController::class, 'index'])->name('lead');

Route::view('/general-guidlines', 'web.content.general-guidlines')->name('general-guidlines');