<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\WorkingProcess;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return redirect()->route('admin_dashboard');
});


Route::get('/home', function () {
    return redirect()->route('admin_dashboard');
});

Route::post('/user-login', [LoginController::class, 'LOGIN'])->name('LOGIN');

#~~~~~~~~~~~~ all admin panel routes ~~~~~~~~~~~~~~

Route::group(['prefix' => 'admin','middleware' => ['auth', 'role:admin']], function() {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'profile_edit'])->name('profile_edit');
    Route::post('/profile/update', [ProfileController::class, 'profile_update'])->name('profile_update');

    Route::get('/role-management', [RoleManagementController::class, 'index'])->name('role_management');
    Route::post('/role-management/add', [RoleManagementController::class, 'role_add'])->name('role_add');
    Route::get('/role-management/delete/{id}', [RoleManagementController::class, 'role_delete'])->name('role_delete');
    Route::post('/role-management/update', [RoleManagementController::class, 'role_update'])->name('role_update');
    Route::get('/get-role/{id}', [RoleManagementController::class, 'get_role'])->name('get_role');
    
    
    Route::post('/permission-management/add', [RoleManagementController::class, 'permission_add'])->name('permission_add');
    Route::get('/permission-management/delete/{id}', [RoleManagementController::class, 'permission_delete'])->name('permission_delete');
    Route::post('/permission-management/update', [RoleManagementController::class, 'permission_update'])->name('permission_update');
    Route::get('/get-permission/{id}', [RoleManagementController::class, 'get_permission'])->name('get_permission');
    Route::get('/fetch-permissions-by-role/{id}', [RoleManagementController::class, 'fetch_permissions'])->name('fetch_permissions_by_role');
    

    Route::post('/role-permission-assign', [RoleManagementController::class, 'role_permission_assign'])->name('role_permission_assign');
    Route::get('/role-permission-revoke/{id}', [RoleManagementController::class, 'role_permission_revoke'])->name('role_permission_revoke');

    Route::resource('users', UserController::class);




    //============ services routes==========//
    Route::get('/services',[ServiceController::class,'index'])->name('service.index');
    Route::get('/service/add/form',[ServiceController::class,'addForm'])->name('service.add.form');
    Route::post('/service/add',[ServiceController::class,'addService'])->name('service.add');

    Route::get('/service/edit/form/{service_id}',[ServiceController::class,'editService'])->name('service.edit');
    Route::post('/service/update/{service_id}',[ServiceController::class,'updateService'])->name('service.update');

    Route::delete('/service/delete/{service_id}',[ServiceController::class,'deleteService'])->name('service.delete');
    

    //=========== designation routes here=====//
    Route::controller(DesignationController::class)->group(function () {
        Route::get('/designation/index','index')->name('designation.index');
        Route::get('/designation/add/form','addForm')->name('designation.add.form');
        Route::post('/designation/add','addDesignation')->name('designation.add');

        Route::get('/designation/edit/{designation_id}','editDesignation')->name('designation.edit');
        Route::post('/designation/update/{designation_id}','updateDesignation')->name('designation.update');
        Route::delete('/designation/delete/{designation_id}','deleteDesignation')->name('designation.delete');
    });


    //============ team routes here======//

    Route::controller(TeamController::class)->group(function () {
        Route::get('/team/index','index')->name('team.index');
        Route::get('/team/add/form','addForm')->name('team.add.form');
        Route::post('/team/add','addteam')->name('team.add');

        Route::get('/team/edit/{team_id}','editteam')->name('team.edit');
        Route::post('/team/update/{team_id}','updateteam')->name('team.update');
        Route::delete('/team/delete/{team_id}','deleteteam')->name('team.delete');
    });


    //========= testimonial routes here=========//
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonial/index','index')->name('testimonial.index');
        Route::get('/testimonial/add/form','addForm')->name('testimonial.add.form');
        Route::post('/testimonial/add','addTestimonial')->name('testimonial.add');

        Route::get('/testimonial/edit/{testimonial_id}','editTestimonial')->name('testimonial.edit');
        Route::post('/testimonial/update/{testimonial_id}','updateTestimonial')->name('testimonial.update');
        Route::delete('/testimonial/delete/{testimonial_id}','deleteTestimonial')->name('testimonial.delete');
    });

    //===========subscriptionn and page setting routes here=======//
    Route::controller(SubscriptionController::class)->group(function () {
        Route::get('/subscription/index','index')->name('subscription.index');
        Route::delete('/subscription/delete/{subscription_id}','deleteSubscription')->name('subscription.delete');

        //====page settings routes start =========/
        Route::get('/page/setting/index','pageSettingIndex')->name('page_setting.index');
        Route::get('/page/setting/edit/{id}','pageSettingEdit')->name('page_setting.edit');
        Route::post('/page/setting/update/{id}','pageSettingUpdate')->name('page_setting.update');
        //=======end==========
    });


    //============category routes here=============//
    Route::controller(CategoryController::class)->group(function (){
          Route::get('/categories/index','index')->name('categorie.index');
          Route::get('/categorie/add/form','addForm')->name('categorie.add.form');
          Route::post('/categorie/add','addCategorie')->name('categorie.add');

          Route::get('/categorie/edit/{categorie_id}','editCategorie')->name('categorie.edit');
          Route::post('/categorie/update/{categorie_id}','updateCategorie')->name('categorie.update');
          Route::delete('/categorie/delete/{categorie_id}','deleteCategorie')->name('categorie.delete');
    });

    //======end=======/

    //========== project routes start here=========//
    
    Route::controller(ProjectController::class)->group(function (){
        Route::get('/project/index','index')->name('project.index');
        Route::get('/project/add/form','addForm')->name('project.add.form');
        Route::post('/project/add','addProject')->name('project.add');

        Route::get('/project/edit/{project_id}','editProject')->name('project.edit');
        Route::post('/project/update/{project_id}','updateProject')->name('project.update');
        Route::delete('/project/delete/{project_id}','deleteProject')->name('project.delete');
  });



    //===========end=============

    //========== project routes start here=========//
    
    Route::controller(WorkingProcessController::class)->group(function (){
        Route::get('/working_process/index','index')->name('working_process.index');
        Route::get('/working_process/add/form','addForm')->name('working_process.add.form');
        Route::post('/working_process/add','addWorking_process')->name('working_process.add');

        Route::get('/working_process/edit/{working_process_id}','editWorking_process')->name('working_process.edit');
        Route::post('/working_process/update/{working_process_id}','updateWorking_process')->name('working_process.update');
        Route::delete('/working_process/delete/{working_process_id}','deleteWorking_process')->name('working_process.delete');
  });
    //===========end=============
    //=========== footer seeting route=========//
    Route::get('/footer-setting/all',[FooterSettingController::class,'index'])->name('footer_setting_index');
    Route::get('/footer-setting-edit/{id}',[FooterSettingController::class,'edit'])->name('footer_setting_edit');
    Route::post('/footer-setting/update',[FooterSettingController::class,'update'])->name('footer_setting_update');
   

    //===========contact routes=========//
    Route::delete('/contact/delete/{id}',[ContactController::class,'deleteContact'])->name('contact.delete');
    Route::get('/contact/all',[ContactController::class,'index'])->name('contact.index');

    //=========== about routes===============//
    Route::get('/about/all',[AboutController::class,'index'])->name('about.index');
    Route::get('/about-edit/{id}',[AboutController::class,'edit'])->name('about.edit');
    Route::post('/about-update',[AboutController::class,'update'])->name('about.update');



});