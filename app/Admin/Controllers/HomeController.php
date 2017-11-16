<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Training;
use App\Models\User;
use Carbon\Carbon;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(Dashboard::title());

            $content->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
        });
    }
    
    public function seaLandIndex() {
        return Admin::content(function (Content $content) {
            $content->header('');
            $content->description('');
    
            $content->row(view('admin.title'));
    
                
                // DB::table('users')->where('status', '01')->count();
            $content->row(function (Row $row) {
                $user_Count = User::where('status', '01')->count();
                $member_Count = Member::where('status', '01')->count();
                $training_Count = Training::where('end_date', '>', Carbon::now())->count();
                $row->column(4, new InfoBox('有效课程：', 'book', 'aqua', '/admin/trainings', $training_Count));
                $row->column(4, new InfoBox('会员', 'user', 'green', '/admin/members', $member_Count));
                $row->column(4, new InfoBox('用户', 'users', 'yellow', '/admin/users', $user_Count));
            });
    
            $content->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });
            });
        });
    }
}
