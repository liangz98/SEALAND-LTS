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

// Route::get('/', function () {
//    return view('welcome');
// });

use App\Models\Training;

Route::get('/w_bootstrap', function () {
    return view( 'welcome_bootstrap');
});
Route::get('excel/export','ExcelController@export');

Route::get('/', 'PagesController@root')->name('root');
Route::get('/about', 'PagesController@about')->name('about');

Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('projects', 'ProjectsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('categories', 'CategoriesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

// 显示消息通知的路由器入口
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

// 无权限提醒路由
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');


Route::resource('news', 'NewsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('training_categories', 'TrainingCategoriesController', ['only' => ['show']]);
Route::resource('trainings', 'TrainingsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::resource('register_courses', 'RegisterCoursesController', ['only' => ['index', 'show', 'store', 'update', 'edit', 'destroy']]);
// 新增培训申请
Route::get('/register_courses/create/{trainings}', 'RegisterCoursesController@create')->name('register_courses.create');

Route::resource('certifications', 'CertificationsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('renew_certifications', 'RenewCertificationsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('members', 'MembersController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('memberships', 'MembershipsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('snews', 'SnewsController', ['only' => ['index',
    'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('/snews/{snew}', 'SnewsController@show')->name('snews.show');

// API
Route::get('/api/members', function () {
    return new \App\Http\Resources\MemberCollection(\App\Models\Member::find(1));
});
Route::get('/api/trainings', function () {
    return new \App\Http\Resources\TrainingCollection(Training::all());
});