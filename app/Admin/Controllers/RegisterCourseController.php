<?php

namespace App\Admin\Controllers;

use App\Models\RegisterCourse;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class RegisterCourseController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('培训申请');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('培训申请');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('培训申请');
            $content->description('新增');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(RegisterCourse::class, function (Grid $grid) {
    
            $grid->model()->orderBy('id', 'desc');  // 按ID倒序
            $grid->disableCreation();   // 禁用创建按钮

            $grid->id('ID')->sortable();
    
            $grid->column('training.name', '课程')->label();
            
            $grid->column('member.name', '会员');
            $grid->column('member.member_number', '编号');
            $grid->column('member.email', '邮箱');
            
            $grid->created_at('申请时间');
            // $grid->updated_at();
    
            // $grid->column('status', '状态')->display(function ($value) {
            //     $str = '';
            //     if ($value == '01') {
            //         $str = '申请';
            //     } else if ($value == '02') {
            //         $str = '审核通过';
            //     } else if ($value == '03') {
            //         $str = '拒绝';
            //     } else if ($value == '04') {
            //         $str = '取消';
            //     }
            //     return $str;
            // });
    
            $grid->status('状态')
                 ->select([
                     '01' => '申请',
                     '02' => '审核通过',
                     '03' => '拒绝',
                     '04' => '取消',
                 ]);
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(RegisterCourse::class, function (Form $form) {
    
            $form->display('id', 'ID');
    
            $form->display('training.name', '课程');
            $form->display('member.name', '会员');
            $form->display('member.member_number', '编号');
            $form->display('member.email', '邮箱');
    
            $form->select('status', '状态')
                 ->options([
                     '01' => '申请',
                     '02' => '审核通过',
                     '03' => '拒绝',
                     '04' => '取消',
                 ]);
    
            $form->display('created_at', '申请时间');
        });
    }
}
