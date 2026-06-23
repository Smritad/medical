<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!medical-appraisal-and-revalidation
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medical-appraisal-and-revalidation', [App\Http\Controllers\InnerPageController::class, 'medical_appraisal_and_revalidation'])->name('medical_appraisal_and_revalidation');


Route::get('/designated-body-connection', [App\Http\Controllers\InnerPageController::class, 'designated_body'])->name('designated_body_connection');


Route::get('/appraisal-advisory-call', [App\Http\Controllers\InnerPageController::class, 'appraisal_advisory_call'])->name('appraisal_advisory_call');


Route::get('/observership-clinical-attachment-programme', [App\Http\Controllers\InnerPageController::class, 'observership_clinical_attachment_programme'])->name('observership_clinical_attachment_programme');

Route::get('/responsible-officer-services', [App\Http\Controllers\InnerPageController::class, 'responsible_officer_services'])->name('responsible_officer_services');
Route::get('/assurance-for-designated-bodies', [App\Http\Controllers\InnerPageController::class, 'assurance_for_designated_bodies'])->name('assurance_for_designated_bodies');
Route::get('/medico-legal-support', [App\Http\Controllers\InnerPageController::class, 'medico_legal_support'])->name('medico_legal_support');
Route::get('/career-coaching', [App\Http\Controllers\InnerPageController::class, 'career_coaching'])->name('career_coaching');


Route::get('/contact-us', [App\Http\Controllers\InnerPageController::class, 'frontend_contact_us_show'])->name('frontend_contact_us_show');

Route::get('/test', [App\Http\Controllers\InnerPageController::class, 'test'])->name('test');

Route::get('/faqs', [App\Http\Controllers\InnerPageController::class, 'frontend_faqs_show'])->name('frontend_faqs_show');
Route::get('/about-us', [App\Http\Controllers\InnerPageController::class, 'frontend_about_us_show'])->name('frontend_about_us_show');
Route::get('/watch-and-learn', [App\Http\Controllers\InnerPageController::class, 'frontend_watch_and_learn_show'])->name('frontend_watch_and_learn_show');
Route::get('/cost', [App\Http\Controllers\InnerPageController::class, 'frontend_cost_show'])->name('frontend_cost_show');
Route::get('/reviews', [App\Http\Controllers\InnerPageController::class, 'frontend_reviews_show'])->name('frontend_reviews_show');
Route::get('/blogs', [App\Http\Controllers\InnerPageController::class, 'frontend_all_blogs_show'])->name('frontend_all_blogs_show');
Route::get('/blog/{id?}', [App\Http\Controllers\InnerPageController::class, 'view_blog_details'])->name('view_blog_details');
Route::post('/blog-reviews', [App\Http\Controllers\InnerPageController::class, 'submit_blog_reviews'])->name('submit_blog_reviews');
Route::post('/get-in-touch', [App\Http\Controllers\InnerPageController::class, 'get_in_touch_submit'])->name('get_in_touch_submit');
Route::get('/terms', [App\Http\Controllers\InnerPageController::class, 'terms_show'])->name('terms_show');
Route::get('/privacy-policy', [App\Http\Controllers\InnerPageController::class, 'privacy_show'])->name('privacy_show');
Route::get('/thank-you', [App\Http\Controllers\InnerPageController::class, 'frontend_thank_you_show'])->name('frontend_thank_you_show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/change-password', [App\Http\Controllers\BlogController::class, 'admin_show_change_password'])->name('admin_show_change_password');
Route::post('/admin/change-password', [App\Http\Controllers\BlogController::class, 'admin_update_password'])->name('admin_update_password');

Route::get('/admin/blogs/categories', [App\Http\Controllers\BlogController::class, 'blog_category_show'])->name('blog_category_show');
Route::post('/admin/blogs/categories', [App\Http\Controllers\BlogController::class, 'blog_category_insert'])->name('blog_category_insert');
Route::get('/admin/blogs/all-blogs', [App\Http\Controllers\BlogController::class, 'all_blogs_show'])->name('all_blogs_show');
Route::get('/admin/blogs/all-blogs/add-new', [App\Http\Controllers\BlogController::class, 'add_new_blog_show'])->name('add_new_blog_show');
Route::post('/admin/blogs/all-blogs/add-new', [App\Http\Controllers\BlogController::class, 'new_blog_insert'])->name('new_blog_insert');
Route::get('/admin/blogs/all-blogs/delete/{id?}', [App\Http\Controllers\BlogController::class, 'delete_blog'])->name('delete_blog');
Route::get('/admin/blogs/all-blogs/active/{id?}', [App\Http\Controllers\BlogController::class, 'blog_status_active'])->name('blog_status_active');
Route::get('/admin/blogs/all-blogs/inactive/{id?}', [App\Http\Controllers\BlogController::class, 'blog_status_inactive'])->name('blog_status_inactive');
Route::get('/admin/blogs/all-blogs/view/{id?}', [App\Http\Controllers\BlogController::class, 'view_blog_details_show'])->name('view_blog_details_show');
Route::post('/admin/blogs/all-blogs/view/{id?}', [App\Http\Controllers\BlogController::class, 'view_blog_details_update'])->name('view_blog_details_update');


Route::get('/robots.txt', function () {
    $robotsContent = "User-agent: *\n";
    $robotsContent .= "Disallow: /private\n"; // Example of a disallowed path
    $robotsContent .= "Disallow: /public\n"; // Example of an allowed path
    
    return response($robotsContent, 200)
        ->header('Content-Type', 'text/plain')
        ->header('X-Robots-Tag', 'noindex')
        ->header('X-Content-Type-Options', 'nosniff')
        ->header('X-XSS-Protection', '1; mode=block')
        ->header('X-Frame-Options', 'SAMEORIGIN');
});

Route::get('/sitemap.xml', function () {
    $filePath = public_path('sitemap.xml'); // This points to the public/sitemap.xml file

    // Check if file exists and is readable
    if (!file_exists($filePath) || !is_readable($filePath)) {
        abort(404); // Return 404 if the file doesn't exist or is not readable
    }

    return response()->file($filePath, [
        'Content-Type' => 'application/xml',
        'X-Robots-Tag' => 'noindex',
        'X-Content-Type-Options' => 'nosniff',
        'X-XSS-Protection' => '1; mode=block',
        'X-Frame-Options' => 'SAMEORIGIN',
    ]);
});


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    return "Application cache cleared successfully!";
});
