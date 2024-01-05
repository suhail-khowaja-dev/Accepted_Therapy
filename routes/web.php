<?php

use Pusher\Pusher;
use App\Events\MyEvent;
use App\Models\FaqType;
use App\Events\HelloEvent;
use App\Models\IntakeForm;
use App\Models\NonSecureForm;
use App\Models\CreditCardForm;
use App\Http\Controllers\Admin\Logo;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Layout;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyManagement;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\FaqTypeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\IntakeFormController;
use App\Http\Controllers\PdfPaymentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\NonSecureFormController;
use App\Http\Controllers\ResourcesFormController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\CreditCardFormController;
use App\Http\Controllers\RoleManagementController;
use App\Http\Controllers\TelehealthFormController;
use App\Http\Controllers\ReleaseInfoFormController;
use App\Http\Controllers\AgencyManagementController;
use App\Http\Controllers\SlidingScaleFormController;
use App\Http\Controllers\Admin\Configuration_setting;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ReferralFormController;
use App\Http\Controllers\Admin\Dynamic_Page_Controller;
use App\Http\Controllers\Admin\InformConsentController;
use App\Http\Controllers\Admin\TeamManagementController;
use App\Http\Controllers\Admin\ScheduleManagementController;
use App\Http\Controllers\Admin\SpecialityManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    echo "cleared";
});


// Route::get('/down', function () {
//     Artisan::call('down');

// });

// Artisan::call('up');

Route::group(["middleware" => "preventBackHistory"], function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::post('sender/{id}', function ($id) {

        if(session()->has('card_session_acive') && session()->get('card_session_acive') == request()->link){
            event(new MyEvent($id));
        }


    });


    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('contact', [HomeController::class, 'contact_us'])->name('contact');
    Route::post('contact', [HomeController::class, 'contact'])->name('contact_us');
    Route::get('frequently-asked-questions', [HomeController::class, 'faq_view'])->name('faq_view');

    Route::get('resource', [HomeController::class, 'resources'])->name('resources');
    Route::get('scheduling/{id?}', [HomeController::class, 'schedule'])->name('schedule');
    Route::post('scheduling/store', [HomeController::class, 'schedule_store'])->name('schedule_store');
    Route::get('therapist/{id}', [HomeController::class, 'therapist'])->name('therapist');

    Route::get('location', [HomeController::class, 'location'])->name('location');
    route::get('location/{id}', [HomeController::class, 'location_details'])->name('location_details');

    Route::get('payment', [HomeController::class, 'payment_cards'])->name('payment_cards');
    Route::get('intake', [HomeController::class, 'intake_form'])->name('intake_form');
    Route::get('referral', [HomeController::class, 'referral_form'])->name('referral_form');







    Route::get('referral-form', [ResourcesFormController::class, 'referral_form_index'])->name('referral_form_index');
    Route::post('referral_form/store', [ResourcesFormController::class, 'referral_form_store'])->name('referral_form_store');

    Route::get('intake-form-show', [IntakeFormController::class, 'index'])->name('intake_form');
    Route::post('intake_form/store', [IntakeFormController::class, 'intake_form_store'])->name('intake_form_store');

    Route::get('inform-consent-form', [InformConsentController::class, 'index'])->name('inform_consent_form');
    Route::post('inform_consent_form/store', [InformConsentController::class, 'inform_consent_form_store'])->name('inform_consent_form_store');

    Route::get('credit-card-form', [CreditCardFormController::class, 'index'])->name('credit_card_form');
    Route::post('credit_card_form/store', [CreditCardFormController::class, 'credit_card_form_store'])->name('credit_card_form_store');

    Route::get('non-secure-release-form', [NonSecureFormController::class, 'non_secure_form'])->name('non_secure_form');
    Route::post('non_secure_release_form/store', [NonSecureFormController::class, 'non_secure_form_store'])->name('non_secure_form_store');

    Route::get('release-info-form', [ReleaseInfoFormController::class, 'index'])->name('release_info_form');
    Route::post('release_info_form/store', [ReleaseInfoFormController::class, 'release_info_form_store'])->name('release_info_form_store');


    Route::get('sliding-scale', [SlidingScaleFormController::class, 'index'])->name('sliding_scale_form');
    Route::post('sliding_scale/store', [SlidingScaleFormController::class, 'sliding_scale_store'])->name('sliding_scale_store');


    Route::get('telehealth-treatment-form', [TelehealthFormController::class, 'index'])->name('telehealth_treatment_form');
    Route::post('telehealth_treatment_form/store', [TelehealthFormController::class, 'telehealth_treatment_store'])->name('telehealth_treatment_store');
    route::get('user_logout', [HomeController::class, 'logout'])->name("user_logout");


    Route::post('sign_in', [HomeController::class, 'sign_in_form'])->name('sign_in_form');
    Route::get('sign_up', [HomeController::class, 'sign_up_view'])->name('sign_up_view');
    Route::post('sign_up', [HomeController::class, 'sign_up_form'])->name('sign_up_form');
    Route::get('forget-password', [HomeController::class, 'forget_password'])->name('forget_password');
    Route::post('forget-password', [HomeController::class, 'update_password'])->name('update_password');
    Route::get('reset-password', [HomeController::class, 'reset_password'])->name('reset_password');
    Route::post('reset-password/{token}', [HomeController::class, 'password_change'])->name('password_change');


    Route::get('package', [PackageController::class, 'index'])->name('package');
    Route::get('create_package/{id}', [PackageController::class, 'create_package'])->name('create_package');


    Route::get('pay-amount', [PaymentController::class, 'index'])->name('pay_amount');
    Route::get('amount_store', [PaymentController::class, 'amount_store'])->name('amount_store');

    Route::get('cancel', [PaymentController::class, 'cancel'])->name('cancel');


    Route::get('pay_amount_pdf', [PdfPaymentController::class, 'index'])->name('pay_amount_pdf');
    Route::get('amount_store_pdf', [PdfPaymentController::class, 'amount_store_pdf'])->name('amount_store_pdf');

    Route::get('create_package_pdf/{id}', [PdfPaymentController::class, 'create_package_pdf'])->name('create_package_pdf');
    Route::post('sign_up_form_data', [PdfPaymentController::class, 'sign_up_form_pdf'])->name('sign_up_form_data');


    // Route::get('/execute-payment', [PaymentController::class, 'execute']);
    // Route::post('paypal', [PaymentController::class, 'postPaymentWithpaypal']);
    // Route::get('paypal', [PaymentController::class, 'getPaymentStatus']);



    /*
|--------------------------------------------------------------------------
| Agen Routes
|--------------------------------------------------------------------------
*/

    Route::middleware(['AgentCheck'])->group(function () {

        Route::get('user-dashboard', [UserController::class, 'index'])->name('user_dashboard');
        Route::get('user-profile', [UserController::class, 'user_profile'])->name('user_profile');
        Route::post('user_profile_update/{id}', [UserController::class, 'user_profile_update'])->name('user_profile_update');
        Route::get('user-reset-password', [UserController::class, 'user_password_show'])->name('user_reset_password');
        Route::post('user_change_password/{id}', [UserController::class, 'user_change_password'])->name('user_change_password');
        Route::get('request_password', [UserController::class, 'request_password'])->name('request_password');
        Route::get('link-generate', [UserController::class, 'link_generate'])->name('link_generate');
        Route::get('prepare_link', [UserController::class, 'prepare_link'])->name('prepare_link');
        Route::get('link_store', [UserController::class, 'link_store'])->name('link_store');
        Route::get('regenerate_password', [UserController::class, 'regenerate_password'])->name('regenerate_password');
        Route::get('regenerate_password_store', [UserController::class, 'regenerate_password_store'])->name('regenerate_password_store');
        Route::get('link_delete', [UserController::class, 'link_delete'])->name('link_delete');

        Route::get('update-plan', [UserController::class, 'update_plan'])->name('update_plan');
        Route::get('agent-pay-amount', [UserController::class, 'agent_pay_amount'])->name('agent_pay_amount');
        Route::get('agent_amount_store', [PaymentController::class, 'agent_amount_store'])->name('agent_amount_store');
        Route::get('cancel_plan', [PaymentController::class, 'cancel_plan'])->name('cancel_plan');

        Route::get('pdf_download',[UserController::class,'pdf_download'])->name('pdf_download');
        Route::get('download',[UserController::class,'downloadfile'])->name('download');
    });


    /*
|--------------------------------------------------------------------------
| Agen Routes
|--------------------------------------------------------------------------
*/


    Route::get('login/{link}', [CardController::class, 'index'])->name('show_card_login');
    Route::get('login_card', [CardController::class, 'login_card'])->name('login_card');
    Route::get('/show-cards/{link}', [CardController::class, 'show_card'])->name('show_card')->middleware('CardSessionCheck');
    Route::post('/private-message/{user}', [CardController::class, 'sendPrivateMessage'])->name('sendPrivateMessage');





    /*
|--------------------------------------------------------------------------
| Admins Routes
|--------------------------------------------------------------------------
*/
    route::get('adminpanel', [Login::class, 'admin_login'])->name('admin_login_page');
    route::post('login_submit', [Login::class, 'login_submit'])->name('login_submit');

    Route::group(['middleware' => ['Admin_Check']], function () {

        route::get('/logout', [login::class, 'logout'])->name("logout");
        // asl start
        route::get('logo', [logo::class, 'site_logo'])->name('logo_management');
        route::post('logo_update', [logo::class, 'logo_update'])->name('logo_update');
        route::get('cms-management', [Layout::class, 'content'])->name('cms_management');
        route::get('client_details', [ArticleController::class, 'client_details'])->name('client_details');
        route::get('client_action/{id}', [ArticleController::class, 'client_status'])->name('client_action');
        route::get('client_action_edit/{id}', [ArticleController::class, 'client_action_edit'])->name('client_action_edit');
        route::post('client_edit_confirm/{id}', [ArticleController::class, 'client_edit_confirm'])->name('client_edit_confirm');
        route::post('client_add_confirm', [ArticleController::class, 'client_add_confirm'])->name('client_add_confirm');
        route::get('client_action_delete/{id}', [ArticleController::class, 'client_action_delete'])->name('client_action_delete');

        /* CONFIGURATION SETTING */
        route::get('setting', [Configuration_setting::class, 'setting'])->name('setting');
        route::post('setting_update', [Configuration_setting::class, 'setting_update'])->name('setting_update');


        /* Testimonial(Quotes) */
        route::get('testimonial_details', [TestimonialController::class, 'testimonial_details'])->name('testimonial_details');

        route::get('testimonial_action_edit/{id}', [TestimonialController::class, 'testimonial_action_edit'])->name('testimonial_action_edit');

        route::post('testimonial_edit_confirm/{id}', [TestimonialController::class, 'testimonial_edit_confirm'])->name('testimonial_edit_confirm');
        route::get('testimonial_management', [TestimonialController::class, 'add_testimonial'])->name('testimonial_management');
        route::get('testimonial_action/{id}', [TestimonialController::class, 'testimonial_action'])->name('testimonial_action');
        route::get('testimonial_action_delete/{id}', [TestimonialController::class, 'testimonial_action_delete'])->name('testimonial_action_delete');


        route::get('/dynamic_page_status/{id}', [Dynamic_Page_Controller::class, 'dynamic_page_status'])->name('dynamic_page_status');

        route::get('/services_details', [Dynamic_Page_Controller::class, 'page_list_status'])->name('services_details');
        Route::get('page_list_edit', [Dynamic_Page_Controller::class, 'page_list_edit'])->name('page_list_edit');
        Route::get('page_edit/{id}', [Dynamic_Page_Controller::class, 'page_edit'])->name('page_edit');
        Route::POST('page_edit_confirm/{id}', [Dynamic_Page_Controller::class, 'page_edit_confirm'])->name('page_edit_confirm');
        route::get('/dynamic_page_edit/{id}', [Dynamic_Page_Controller::class, 'dynamic_page_edit'])->name('dynamic_page_edit');
        route::POST('/dynamic_page_edit_confirm/{id}', [Dynamic_Page_Controller::class, 'dynamic_page_edit_confirm'])->name('dynamic_page_edit_confirm');
        route::get('/dynamic_page_delete/{id}', [Dynamic_Page_Controller::class, 'dynamic_page_delete'])->name('dynamic_page_delete');
        Route::POST('dynamic_page_add', [Dynamic_Page_Controller::class, 'dynamic_page_add'])->name('dynamic_page_add');
        Route::get('page_add', [Dynamic_Page_Controller::class, 'page_add'])->name('page_add');
        
        route::get('content-edit/{id}', [Layout::class, 'content_edit'])->name('content_edit');
        route::post('content_update/{content_id}', [Layout::class, 'content_update'])->name('banner');
        
        route::get('/contact-views', [ContactController::class, 'contact_views'])->name('contact_views');
        route::get('/contact-details/{id}', [ContactController::class, 'contactDetails'])->name('contact_details');
        route::get('/contact-delete/{id}', [ContactController::class, 'contactDelete'])->name('contact_delete');
        route::post('delete-quries', [ContactController::class, 'delete_quries'])->name('delete_quries');


        // Team Management
        route::get('team-management', [TeamManagementController::class, 'index'])->name('team_management');
        route::get('add-team-member', [TeamManagementController::class, 'add_team_member'])->name('add_team_member');
        route::get('edit-team-member/{id}', [TeamManagementController::class, 'edit_team_member'])->name('edit_team_member');
        route::post('update_team_member/{id}', [TeamManagementController::class, 'update_team_member'])->name('update_team_member');
        route::post('store_team_member', [TeamManagementController::class, 'store_team_member'])->name('store_team_member');
        route::get('team-member-active/{id}', [TeamManagementController::class, 'team_member_status'])->name('team_member_status');
        route::get('team-member-delete/{id}', [TeamManagementController::class, 'team_member_delete'])->name('team_member_delete');


        // Speciality Management
        route::get('speciality-management', [SpecialityManagementController::class, 'index'])->name('speciality_management');
        route::get('add-speciality', [SpecialityManagementController::class, 'add_speciality'])->name('add_speciality');
        route::get('edit-speciality/{id}', [SpecialityManagementController::class, 'edit_speciality'])->name('edit_speciality');
        route::post('update_speciality/{id}', [SpecialityManagementController::class, 'update_speciality'])->name('update_speciality');
        route::post('store_speciality', [SpecialityManagementController::class, 'store_speciality'])->name('store_speciality');
        route::get('speciality-active/{id}', [SpecialityManagementController::class, 'speciality_status'])->name('speciality_status');
        route::get('speciality-delete/{id}', [SpecialityManagementController::class, 'speciality_delete'])->name('speciality_delete');



        // Speciality Management
        route::get('location-management', [LocationController::class, 'index'])->name('location_management');
        route::get('add-location', [LocationController::class, 'add_location'])->name('add_location');
        route::get('edit-location/{id}', [LocationController::class, 'edit_location'])->name('edit_location');
        route::post('update/{id}', [LocationController::class, 'update_location'])->name('update_location');
        route::post('store_location', [LocationController::class, 'store_location'])->name('store_location');
        route::get('location-status/{id}', [LocationController::class, 'location_status'])->name('location_status');
        route::get('location-delete/{id}', [LocationController::class, 'location_delete'])->name('location_delete');


        // Schedule Management
        route::resource('schedule', ScheduleManagementController::class);
        route::post('schedule_update/{id}', [ScheduleManagementController::class, 'schedule_update'])->name('schedule_update');
        route::get('schedule-delete/{id}', [ScheduleManagementController::class, 'destroy'])->name('schedule_delete');
        route::get('schedule-status/{id}', [ScheduleManagementController::class, 'schedule_status'])->name('schedule_status');
        route::get('schedule-view/{id}', [ScheduleManagementController::class, 'schedule_view'])->name('schedule_view');

        // Referral Form
        route::get('referral-form-show', [ReferralFormController::class, 'index'])->name('referral_index');
        route::get('referral-form/show/{id}', [ReferralFormController::class, 'show_referral_form_details'])->name('show_referral_form_details');
        route::get('referral-form/delete/{id}', [ReferralFormController::class, 'referral_delete'])->name('referral_delete');

        // Resources Form
        route::get('intake-form', [IntakeFormController::class, 'intake_form_show'])->name('intake_form_show');
        route::get('intake-form/show/{id}', [IntakeFormController::class, 'show_intake_form_details'])->name('show_intake_form_details');
        route::get('intake-form/delete/{id}', [IntakeFormController::class, 'show_intake_form_delete'])->name('show_intake_form_delete');

        // Resources Form
        route::get('informed-consent-form', [InformConsentController::class, 'informed_consent_form_index'])->name('informed_consent_form_index');
        route::get('informed-consent-form/show/{id}', [InformConsentController::class, 'show_informed_consent_form_details'])->name('show_informed_consent_form_details');
        route::get('informed-consent-form/delete/{id}', [InformConsentController::class, 'informed_consent_form_delete'])->name('informed_consent_form_delete');

        // Resources Form
        route::get('credit-card-form-show', [CreditCardFormController::class, 'credit_card_form_form_index'])->name('credit_card_form_form_index');
        route::get('credit-card-form/show/{id}', [CreditCardFormController::class, 'show_credit_card_form_details'])->name('show_credit_card_form_details');
        route::get('credit-card-form/delete/{id}', [CreditCardFormController::class, 'credit_card_form_delete'])->name('credit_card_form_delete');

        // Resources Form
        route::get('non-secure-release-form-show', [NonSecureFormController::class, 'non_secure_release_form_form_index'])->name('non_secure_release_form_form_index');
        route::get('non-secure-release-form/show/{id}', [NonSecureFormController::class, 'show_non_secure_release_form_details'])->name('show_non_secure_release_form_details');
        route::get('non-secure-release-form/delete/{id}', [NonSecureFormController::class, 'non_secure_release_form_delete'])->name('non_secure_release_form_delete');


        // Resources Form
        route::get('release-of-information-form-show', [ReleaseInfoFormController::class, 'release_of_information_form_index'])->name('release_of_information_form_index');
        route::get('release-of-information-form/show/{id}', [ReleaseInfoFormController::class, 'show_release_of_information_form_details'])->name('show_release_of_information_form_details');
        route::get('release-of-information-form/delete/{id}', [ReleaseInfoFormController::class, 'release_of_information_form_delete'])->name('release_of_information_form_delete');


        // Resources Form
        route::get('sliding-scale-form-show', [SlidingScaleFormController::class, 'sliding_scale_form_index'])->name('sliding_scale_form_index');
        route::get('sliding-scale-form/show/{id}', [SlidingScaleFormController::class, 'show_sliding_scale_form_details'])->name('show_sliding_scale_form_details');
        route::get('sliding-scale-form/delete/{id}', [SlidingScaleFormController::class, 'sliding_scale_form_delete'])->name('sliding_scale_form_delete');

        // Resources Form
        route::get('telehealth-form-show', [TelehealthFormController::class, 'telehealth_form_index'])->name('telehealth_form_index');
        route::get('telehealth-form/show/{id}', [TelehealthFormController::class, 'show_telehealth_form_details'])->name('show_telehealth_form_details');
        route::get('telehealth-form/delete/{id}', [TelehealthFormController::class, 'telehealth_form_delete'])->name('telehealth_form_delete');

        // Agency Management
        route::get('agency-management-show', [AgencyManagementController::class, 'index'])->name('agency_management_index');
        route::get('agency-management-status/{id}', [AgencyManagementController::class, 'agency_user_status'])->name('agency_management_status');
        route::get('agency-management-details/{id}', [AgencyManagementController::class, 'show_details'])->name('show_agency_details');
        route::get('agency-management-delete/{id}', [AgencyManagementController::class, 'agency_user_delete'])->name('agency_management_delete');

        route::get('agency-links-show/{id}', [AgencyManagementController::class, 'agency_links_show'])->name('agency_links_show');
        Route::get('password-genrate/{id}', [UserController::class, 'password_genrate'])->name('password_genrate');




        // Speciality Management
        route::get('role-management', [RoleManagementController::class, 'index'])->name('role_management');
        route::get('add-role', [RoleManagementController::class, 'add_role'])->name('add_role');
        route::get('edit-role/{id}', [RoleManagementController::class, 'edit_role'])->name('edit_role');
        route::post('update_role/{id}', [RoleManagementController::class, 'update_role'])->name('update_role');
        route::post('store_new_role', [RoleManagementController::class, 'store_new_role'])->name('store_new_role');
        route::get('role-status/{id}', [RoleManagementController::class, 'role_status'])->name('role_status');
        route::get('role-delete/{id}', [RoleManagementController::class, 'role_delete'])->name('role_delete');


        // pdf downloader users

        route::get('pdf-downloader-users', [PdfPaymentController::class, 'pdf_downloaders'])->name('pdf-downloader_index');
        route::get('pdf-downloader-edit/{id}', [PdfPaymentController::class, 'pdf_downloaders_edit'])->name('pdf-downloader_edit');
        route::get('pdf-downloader-users-status/{id}', [PdfPaymentController::class, 'pdf_user_status'])->name('pdf-downloader-users-status');
        route::get('pdf-downloader-users-details/{id}', [PdfPaymentController::class, 'show_details'])->name('show_details');
        route::get('pdf-downloader-delete/{id}', [PdfPaymentController::class, 'pdf_user_delete'])->name('pdf-downloader-delete');

        // pdf upload routes
        route::get('pdf-upload-list', [PdfController::class, 'index'])->name('pdf_upload_index');
        route::post('pdf_update', [PdfController::class, 'pdf_update'])->name('pdf_update');
        route::get('pdf_edit/{id}', [PdfController::class, 'edit'])->name('pdf-edit');
        route::post('pdf_update_file/{id}', [PdfController::class, 'update'])->name('pdf_update_file');
        route::get('pdf_delete/{id}', [PdfController::class, 'delete'])->name('pdf-delete');

        route::post('update_user_profile/{id}', [PdfController::class, 'update_user_profile'])->name('update_user_profile');

        route::get('pdf-downloader-delete/{id}', [PdfController::class, 'pdf_user_delete'])->name('pdf-downloader-delete');

        // faq management
        route::get('faq', [FaqController::class,'index'])->name('faq_index');
        route::get('faq/add-new-faq', [FaqController::class, 'add_new_faq'])->name('add_new_faq');
        route::post('faq/add-new-faq/store', [FaqController::class, 'store_faq'])->name('store_faq');
        route::get('edit-faq/{id}', [FaqController::class, 'edit_faq'])->name('edit_faq');
        route::post('faq/update/{id}', [FaqController::class, 'faq_update'])->name('faq_update');
        route::get('faq-status/{id}', [FaqController::class,'faq_status'])->name('faq_status');
        route::get('faq-delete/{id}', [FaqController::class, 'faq_delete'])->name('faq_delete');

        //faq type
        route::get('faq-type', [FaqTypeController::class,'index'])->name('faq_index_type');
        route::get('faq/add-new-faq-type', [FaqTypeController::class, 'add_new_faq'])->name('add_new_faq_type');
        route::post('faq/add-new-faq-type/store', [FaqTypeController::class, 'store_faq'])->name('store_faq_type');
        route::get('edit-faq-type/{id}', [FaqTypeController::class, 'edit_faq'])->name('edit_faq_type');
        route::post('faq-type/update/{id}', [FaqTypeController::class, 'faq_update'])->name('faq_update_type');
        route::get('faq-type-status/{id}', [FaqTypeController::class,'faq_status'])->name('faq_status_type');
        route::get('faq-type-delete/{id}', [FaqTypeController::class, 'faq_delete'])->name('faq_type_delete');

        // Agency Management
        route::get('packages', [PackageController::class, 'admin_package_index'])->name('packages');
        route::get('package-show/{id}', [PackageController::class, 'package_show'])->name('package_show');
        route::post('package_update/{id}', [PackageController::class, 'package_update'])->name('package_update');
        route::get('package/add-new-package', [PackageController::class, 'add_new_package'])->name('add_new_package');
        route::post('package/store_package', [PackageController::class, 'store_package'])->name('store_package');
        route::get('package-status/{id}', [PackageController::class, 'package_status'])->name('package_status');
        route::get('package-delete/{id}', [PackageController::class, 'package_delete'])->name('package_delete');



        Route::any('{url}', function () {
            return view('404');
        });
    });


    // Route::get('therapist/yvette-huddleston',function(){
    //     return view('404');
    // });



    Route::any('{url}', function(){
        return view('404');
    })->where('url', '.*');


    // preventHistory
});


