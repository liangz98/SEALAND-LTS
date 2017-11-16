<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    // 默认路径
    // $router->get('/', 'HomeController@index');
    // 修改后新首页路径
    $router->get('/', 'HomeController@seaLandIndex');

    // 用户
    $router->resource('users', UserController::class);
    $router->resource('topics', TopicController::class);
    
    // 会员
    $router->resource('members', MemberController::class);
    $router->resource('certifications', CertificationController::class);
    $router->resource('renewCertifications', RenewCertificationController::class);
    // 课程
    $router->resource('trainingCategories', TrainingCategoryController::class);
    $router->resource('trainings', TrainingController::class);
    $router->resource('registerCourses', RegisterCourseController::class);
});
