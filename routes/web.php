<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\WebViewHomePageController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\SponsorController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SliderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);
});

Route::controller(WebViewHomePageController::class)->group(function () {
    Route::get('/', 'tech_web_home_index')->name('webview.home.index');
});

// beckend all routes///////////////////////////////////////////////////////////////////////////

// admin all route ..........................................
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/logout', [AdminController::class, 'admin_destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'tec_web_admin_profile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'tec_web_admin_profile_update'])->name('admin.profile.update');
    Route::get('/change/password', [AdminController::class, 'tec_web_admin_change_password'])->name('change.password');
    Route::post('/admin/password/update', [AdminController::class, 'tec_web_admin_password_update'])->name('admin.password.update');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    //general setting all route start
    Route::controller(GeneralController::class)->group(function () {
        //banner and title all route
        Route::get('/general/setting', 'tech_web_general_settings')->name('general.setting');
        Route::post('/banner/title/store', 'tech_web_banner_title_store')->name('banner.title.store');
        Route::get('/edit/banner/title/{id}', 'tech_web_edit_banner_title')->name('edit.banner.title');
        Route::post('/banner/title/update', 'tech_web_banner_title_update')->name('banner.title.update');
        Route::get('/delete/banner/title/{id}', 'tech_web_delete_banner_title')->name('delete.banner.title');
        Route::get('/banner/title/inactive/{id}', 'tec_web_banner_title_inactive')->name('banner.title.inactive');
        Route::get('/banner/title/active/{id}', 'tec_web_banner_title_active')->name('banner.title.active');

        // logo setting route
        Route::post('/logo/store', 'tec_web_logo_store')->name('logo.store');
        // websitelink setting route
        Route::post('/websitelink/store', 'tec_web_websitelink_store')->name('websitelink.store');
        // website banner setting route
        Route::post('/website/banner/store', 'tec_web_website_banner_store')->name('website.banner.store');
        Route::get('/edit/website/banner/{id}', 'tec_web_edit_website_banner')->name('edit.website.banner');
        Route::post('/website/banner/update', 'tec_web_website_banner_update')->name('website.banner.update');
        Route::get('/website/banner/delete/{id}', 'tec_web_website_banner_delete')->name('delete.website.banner');
        Route::get('/website/banner/inactive/{id}', 'tec_web_website_banner_inactive')->name('website.banner.inactive');
        Route::get('/website/banner/active/{id}', 'tec_web_website_banner_active')->name('website.banner.active');
        // footer data setting route
        Route::post('/footer/store', 'tec_web_footer_store')->name('footer.store');
    });
    //general setting all route end

    //Service setting all route
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/all/services', 'tech_web_all_services')->name('all.services');
        Route::get('/add/services', 'tech_web_add_services')->name('add.services');
        Route::post('/service/store', 'tech_web_service_store')->name('service.store');
        Route::get('/edit/service/{id}', 'tec_web_edit_service')->name('edit.service');
        Route::post('/update/store', 'tec_web_update_store')->name('update.store');
        Route::get('/delete/service/{id}', 'tec_web_delete_service')->name('delete.service');
        Route::get('/service/inactive/{id}', 'tec_web_service_inactive')->name('service.inactive');
        Route::get('/service/active/{id}', 'tec_web_service_active')->name('service.active');

        Route::get('/basic/inactive/{id}', 'tec_web_basic_inactive')->name('basic.inactive');
        Route::get('/basic/active/{id}', 'tec_web_basic_active')->name('basic.active');
        Route::get('/premium/inactive/{id}', 'tec_web_premium_inactive')->name('premium.inactive');
        Route::get('/premium/active/{id}', 'tec_web_premium_active')->name('premium.active');
        Route::get('/luxury/inactive/{id}', 'tec_web_luxury_inactive')->name('luxury.inactive');
        Route::get('/luxury/active/{id}', 'tec_web_luxury_active')->name('luxury.active');
    });

    //Service setting all route end
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/setting', 'tech_web_about_setting')->name('about.setting');
        Route::post('/about/update/store', 'tech_web_about_store_and_update')->name('about.update.store');
    });

    //Team/teacher setting all route
    Route::controller(TeamController::class)->group(function () {
        Route::get('/all/team', 'tech_web_all_team')->name('all.team');
        Route::get('/add/team', 'tech_web_add_team')->name('add.team');
        Route::post('/team/store', 'tech_web_team_store')->name('team.store');
        Route::get('/edit/team/{id}', 'tec_web_edit_team')->name('edit.team');
        Route::post('/update/team', 'tec_web_update_team')->name('update.team');
        Route::get('/delete/team/{id}', 'tec_web_delete_team')->name('delete.team');
        Route::get('/team/inactive/{id}', 'tec_web_team_inactive')->name('team.inactive');
        Route::get('/team/active/{id}', 'tec_web_team_active')->name('team.active');
    });

    //blogs setting all route
    Route::controller(BlogController::class)->group(function () {
        Route::get('/all/blogs', 'tech_web_all_blogs')->name('all.blogs');
        Route::get('/add/blogs', 'tech_web_add_blogs')->name('add.blogs');
        Route::post('/blogs/store', 'tech_web_blogs_store')->name('blogs.store');
        Route::get('/edit/blogs/{id}', 'tec_web_edit_blogs')->name('edit.blogs');
        Route::post('/update/blogs', 'tec_web_update_blogs')->name('update.blogs');
        Route::get('/delete/blogs/{id}', 'tec_web_delete_blogs')->name('delete.blogs');
        Route::get('/blogs/inactive/{id}', 'tec_web_blogs_inactive')->name('blogs.inactive');
        Route::get('/blogs/active/{id}', 'tec_web_blogs_active')->name('blogs.active');
    });

    //testimonial setting all route
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/all/testimonial_1', 'tech_web_all_testimonial')->name('all.testimonial_1');
        Route::get('/add/testimonial', 'tech_web_add_testimonial')->name('add.testimonial');
        Route::post('/testimonial/store', 'tech_web_testimonial_store')->name('testimonial.store');
        Route::get('/edit/testimonial/{id}', 'tec_web_edit_testimonial')->name('edit.testimonial');
        Route::post('/testimonial/update', 'tec_web_testimonial_update')->name('testimonial.update');
        Route::get('/delete/testimonial/{id}', 'tec_web_delete_testimonial')->name('delete.testimonial');
        Route::get('/testimonial/inactive/{id}', 'tec_web_testimonial_inactive')->name('testimonial.inactive');
        Route::get('/testimonial/active/{id}', 'tec_web_testimonial_active')->name('testimonial.active');

        Route::get('/all/testimonial_2', 'tech_web_all_testimonial_2')->name('all.testimonial_2');
        Route::get('/add/testimonial_2', 'tech_web_add_testimonial_2')->name('add.testimonial_2');
        Route::post('/testimonial_2/store', 'tech_web_testimonial_2_store')->name('testimonial_2.store');
        Route::get('/edit/testimonial_2/{id}', 'tec_web_edit_testimonial_2')->name('edit.testimonial_2');
        Route::post('/testimonial_2/update', 'tec_web_testimonial_2_update')->name('testimonial_2.update');
        Route::get('/delete/testimonial_2/{id}', 'tec_web_delete_testimonial_2')->name('delete.testimonial_2');
        Route::get('/testimonial_2/inactive/{id}', 'tec_web_testimonial_2_inactive')->name('testimonial_2.inactive');
        Route::get('/testimonial_2/active/{id}', 'tec_web_testimonial_2_active')->name('testimonial_2.active');
    });

    //video or Image Gallery setting all route
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/all/image', 'tech_web_all_image')->name('all.image');
        Route::get('/add/image', 'tech_web_add_image')->name('add.image');
        Route::post('/image/store', 'tech_web_image_store')->name('image.store');
        Route::get('/image/edit/{id}', 'tec_web_edit_image')->name('edit.image');
        Route::post('/image/update', 'tec_web_image_update')->name('image.update');
        Route::get('/image/delete/{id}', 'tec_web_delete_image')->name('delete.image');
        Route::get('/image/inactive/{id}', 'tec_web_image_inactive')->name('image.inactive');
        Route::get('/image/active/{id}', 'tec_web_image_active')->name('image.active');

        Route::get('/all/video', 'tech_web_all_video')->name('all.video');
        Route::get('/add/video', 'tech_web_add_video')->name('add.video');
        Route::post('/video/store', 'tech_web_video_store')->name('video.store');
        Route::get('/video/edit/{id}', 'tec_web_edit_video')->name('edit.video');
        Route::post('/video/update', 'tec_web_video_update')->name('video.update');
        Route::get('/video/delete/{id}', 'tec_web_delete_video')->name('delete.video');
        Route::get('/video/inactive/{id}', 'tec_web_video_inactive')->name('video.inactive');
        Route::get('/video/active/{id}', 'tec_web_video_active')->name('video.active');
    });

    //notice setting all route
    Route::controller(NoticeController::class)->group(function () {
        Route::get('/all/notice', 'tech_web_all_notice')->name('all.notice');
        Route::get('/add/notice', 'tech_web_add_notice')->name('add.notice');
        Route::post('/notice/store', 'tech_web_notice_store')->name('notice.store');
        Route::get('/notice/edit/{id}', 'tech_web_notice_edit')->name('notice.edit');
        Route::post('/notice/update', 'tech_web_notice_update')->name('notice.update');
        Route::get('/notice/delete/{id}', 'tech_web_notice_delete')->name('notice.delete');
        Route::get('/notice/inactive/{id}', 'tec_web_notice_inactive')->name('notice.inactive');
        Route::get('/notice/active/{id}', 'tec_web_notice_active')->name('notice.active');
    });

    //Sponsor setting all route
    Route::controller(SponsorController::class)->group(function () {
        Route::get('/all/sponsor', 'tech_web_all_sponsor')->name('all.sponsor');
        Route::get('/add/sponsor', 'tech_web_add_sponsor')->name('add.sponsor');
        Route::post('/sponsor/store', 'tech_web_sponsor_store')->name('sponsor.store');
        Route::get('/sponsor/edit/{id}', 'tech_web_sponsor_edit')->name('sponsor.edit');
        Route::post('/sponsor/update', 'tech_web_sponsor_update')->name('sponsor.update');
        Route::get('/sponsor/delete/{id}', 'tech_web_sponsor_delete')->name('sponsor.delete');
        Route::get('/sponsor/inactive/{id}', 'tec_web_sponsor_inactive')->name('sponsor.inactive');
        Route::get('/sponsor/active/{id}', 'tec_web_sponsor_active')->name('sponsor.active');
    });

    //Sponsor setting all route
    Route::controller(CounterController::class)->group(function () {
        Route::get('/counter/icon', 'tech_web_counter_icon')->name('counter.icon');
        Route::post('/counter/icon/store', 'tech_web_counter_icon_store')->name('counter.icon.store');
        Route::get('/counter/image', 'tech_web_counter_image')->name('counter.image');
        Route::post('/counter/image/store', 'tech_web_counter_image_store')->name('counter.image.store');
    });

    //slider setting all route
    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider/setting', 'tech_web_slider_setting')->name('all.slider');
        Route::get('/slider/add', 'tech_web_add_slider')->name('add.slider');
        Route::post('/slider/store', 'tech_web_slider_store')->name('slider.store');
        Route::get('/edit/slide/{id}r', 'tech_web_slider_edit')->name('edit.slider');
        Route::post('/update/slider', 'tech_web_slider_update')->name('slider.update');
        Route::get('/delete.slider/{id}', 'tech_web_slider_delete')->name('delete.slider');
        Route::get('/slider/inactive/{id}', 'tec_web_slider_inactive')->name('slider.inactive');
        Route::get('/slider/active/{id}', 'tec_web_slider_active')->name('slider.active');
    });
    Route::resource('/admin/project', ProjectController::class);

    Route::get('/admin/project/inactive/{id}', [ProjectController::class, 'tec_web_project_inactive'])->name('project.inactive');
    Route::get('/admin/project/active/{id}', [ProjectController::class, 'tec_web_project_active'])->name('project.active');
});

// frontend all routes///////////////////////////////////////////////////////////////////////////

Route::get('/service/details/{id}', [ServiceController::class, 'tech_web_service_details'])->name('service.details');
Route::get('/all/fservices', [ServiceController::class, 'tech_web_all_fservices'])->name('all.fservices');
Route::get('/all/service/price', [ServiceController::class, 'tech_web_all_service_price'])->name('all.service.price');
Route::get('/about/details', [AboutController::class, 'tech_web_about_details'])->name('about.details');
Route::get('/contact/us', [ContactController::class, 'tech_web_contact_us'])->name('contact.us');
Route::post('/contactdata/store', [ContactController::class, 'tech_web_contactdata_store'])->name('contactdata.store');
Route::get('/all/blogs/list', [BlogController::class, 'tech_web_all_blogs_list'])->name('all.blogs.list');
Route::get('/blog/details/{id}', [BlogController::class, 'tech_web_blog_details'])->name('blog.details');
Route::get('/packages', [ServiceController::class, 'tech_web_packages'])->name('packages');
Route::get('/image-gallery', [GalleryController::class, 'tech_web_image_gallery'])->name('image.gallery');
Route::get('/video-gallery', [GalleryController::class, 'tech_web_video_gallery'])->name('video.gallery');
Route::get('/project-details/{id}', [ProjectController::class, 'tech_web_project_details'])->name('project.details');
