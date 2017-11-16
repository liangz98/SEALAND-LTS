<?php

namespace App\Admin\Controllers;

use App\Models\TrainingCategory;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;

class TrainingCategoryController extends Controller
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

            $content->header('课程分类');
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

            $content->header('课程分类');
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

            $content->header('课程分类');
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
        return Admin::grid(TrainingCategory::class, function (Grid $grid) {
            // 默认为每页10条
            $grid->paginate(10);

            $grid->id('ID')->sortable();
    
            $grid->column('name', '分类名称')->editable();
    
            $grid->column('trainingCategory.name', '父分类名称')->label();
            
            // 设置text、color、和存储值
            $states = [
                'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            ];
            $grid->column('status', '状态')->switch($states);
            
            $grid->created_at()->sortable();
            // $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(TrainingCategory::class, function (Form $form) {

            $form->display('id', 'ID');
    
            $form->text('name','名称')->rules('required');
            $form->select('pid', '父分类')->options(TrainingCategory::all()->pluck('name', 'id'));
            $form->textarea('desc', '描述')->rows(3);
            $states = [
                'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            ];
            $form->switch('status', '状态')->states($states);

            $form->display('created_at', '创建时间');
            // $form->display('updated_at', '更新时间');
        });
    }
}
