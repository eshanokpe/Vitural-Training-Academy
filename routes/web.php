<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\DestinationsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('user/courses', [HomeController::class, 'courses'])->name('user.courses');
Route::get('/courses/details/{id}', [HomeController::class, 'courseDetails'])->name('courses-details');

// User routes
Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store'])->name('add_user');
Route::get('/users/{user}/edit', [UsersController::class, 'edit']);
Route::get('/users/{user}/showToRemove', [UsersController::class, 'showToRemove']);
Route::put('/users/{user}', [UsersController::class, 'update']);
Route::delete('/users/{user}', [UsersController::class, 'destroy']);

// Courses routes
Route::get('/courses', [CoursesController::class, 'index']);
Route::post('/courses', [CoursesController::class, 'store']);
Route::get('/courses/download/{id}', [CoursesController::class, 'downloadMaterial'])->name('courses.download');
Route::get('/courses/{driver}/edit', [CoursesController::class, 'edit']);
Route::get('/courses/{driver}/showToRemove', [CoursesController::class, 'showToRemove']);
Route::put('/courses/{driver}', [CoursesController::class, 'update']);
Route::delete('/courses/{driver}', [CoursesController::class, 'destroy']);

// Vehicle routes
Route::get('/vehicles', [VehiclesController::class, 'index']);
Route::post('/vehicles', [VehiclesController::class, 'store']);
Route::get('/vehicles/{vehicle}/edit', [VehiclesController::class, 'edit']);
Route::put('/vehicles/{vehicle}', [VehiclesController::class, 'update']);
Route::get('/vehicles/{vehicle}/showToRemove', [VehiclesController::class, 'showToRemove']);
Route::delete('/vehicles/{vehicle}', [VehiclesController::class, 'destroy']);

// Destination routes
Route::get('/destinations', [DestinationsController::class, 'index']);
Route::post('/destinations', [DestinationsController::class, 'store']);
Route::get('/destinations/{destination}/edit', [DestinationsController::class, 'edit']);
Route::put('/destinations/{destination}', [DestinationsController::class, 'update']);
Route::delete('/destinations/{destination}', [DestinationsController::class, 'destroy']);

// Trip routes
Route::post('/trips', [TripsController::class, 'store']);
Route::get('/trips/{trip}/pay', [TripsController::class, 'payTicket']);
Route::put('/trips/{trip}', [TripsController::class, 'update']);
Route::get('/trips/{trip}/destinationDetails', [TripsController::class, 'getDestinationDetailsForBooking']);
Route::get('/trips/{trip}', [TripsController::class, 'show'])->name('show_trip');

// Payment routes
Route::get('/pay_paystack/{type}/{id}', [PaymentController::class, 'pay_paystack'])->name('pay_paystack');
Route::get('/verify_paystack/{type}/{id}', [PaymentController::class, 'verify_paystack'])->name('verify_paystack');
Route::get('/print/{type}/{id}', [PaymentController::class, 'print'])->name('print_ticket');

// Authenticaton routes
Auth::routes();

// Dashboard route
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Passengers routes
Route::get('/passenger/send_cargo', [CargosController::class, 'index']);
Route::post('/passenger/send_cargo', [CargosController::class, 'store']);
Route::get('/cargo_amount/{nature}/{weight}/{destination_id}', [CargosController::class, 'calculateCargoAmount']);
Route::get('/cargos/{cargo}', [CargosController::class, 'show'])->name('show_cargo');
 
// Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
//     Route::get('/home', [DashboardController::class, 'index']);
//     Route::resource('permissions', 'Admin\PermissionsController');
//     Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
//     Route::resource('roles', 'Admin\RolesController');
//     Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
//     Route::resource('users', 'Admin\UsersController');
//     Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
//     Route::resource('courses', 'Admin\CoursesController');
//     Route::post('courses_mass_destroy', ['uses' => 'Admin\CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);
//     Route::post('courses_restore/{id}', ['uses' => 'Admin\CoursesController@restore', 'as' => 'courses.restore']);
//     Route::delete('courses_perma_del/{id}', ['uses' => 'Admin\CoursesController@perma_del', 'as' => 'courses.perma_del']);
//     Route::resource('lessons', 'Admin\LessonsController');
//     Route::post('lessons_mass_destroy', ['uses' => 'Admin\LessonsController@massDestroy', 'as' => 'lessons.mass_destroy']);
//     Route::post('lessons_restore/{id}', ['uses' => 'Admin\LessonsController@restore', 'as' => 'lessons.restore']);
//     Route::delete('lessons_perma_del/{id}', ['uses' => 'Admin\LessonsController@perma_del', 'as' => 'lessons.perma_del']);
//     Route::resource('questions', 'Admin\QuestionsController');
//     Route::post('questions_mass_destroy', ['uses' => 'Admin\QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
//     Route::post('questions_restore/{id}', ['uses' => 'Admin\QuestionsController@restore', 'as' => 'questions.restore']);
//     Route::delete('questions_perma_del/{id}', ['uses' => 'Admin\QuestionsController@perma_del', 'as' => 'questions.perma_del']);
//     Route::resource('questions_options', 'Admin\QuestionsOptionsController');
//     Route::post('questions_options_mass_destroy', ['uses' => 'Admin\QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
//     Route::post('questions_options_restore/{id}', ['uses' => 'Admin\QuestionsOptionsController@restore', 'as' => 'questions_options.restore']);
//     Route::delete('questions_options_perma_del/{id}', ['uses' => 'Admin\QuestionsOptionsController@perma_del', 'as' => 'questions_options.perma_del']);
//     Route::resource('tests', 'Admin\TestsController');
//     Route::post('tests_mass_destroy', ['uses' => 'Admin\TestsController@massDestroy', 'as' => 'tests.mass_destroy']);
//     Route::post('tests_restore/{id}', ['uses' => 'Admin\TestsController@restore', 'as' => 'tests.restore']);
//     Route::delete('tests_perma_del/{id}', ['uses' => 'Admin\TestsController@perma_del', 'as' => 'tests.perma_del']);
//     Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
//     Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');

// });