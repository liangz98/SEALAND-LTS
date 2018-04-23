<?php

namespace App\Admin\Controllers;

use App\Models\Training;

use App\Models\TrainingCategory;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use function foo\func;

class TrainingController extends Controller
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

            $content->header('课程');
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

            $content->header('课程');
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

            $content->header('课程');
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
        return Admin::grid(Training::class, function (Grid $grid) {
            // 默认为每页20条
            $grid->paginate(10);
            // 排序
            $grid->model()->orderBy('start_date', 'desc');

            $grid->id('ID')->sortable();
    
            $grid->column('name', '课程名称')->editable();
            $grid->column('trainingCategory.name', '分类')->label();
            $grid->column('number', '编号')->editable();
            $grid->column('level', '级别');
            $grid->column('报名人数/总人数')->display(function () {
                return $this->apply_count.' / '.$this->total;
            });
            $grid->column('start_date', '开始日期')
                ->display(function ($time) {
                    return date('Y-m-d', strtotime($time));
                })
                ->editable('date');
            $grid->column('end_date', '结束日期')
                ->display(function ($time) {
                    return date('Y-m-d', strtotime($time));
                })
                ->editable('date');
    
            // 设置text、color、和存储值
            $states = [
                'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            ];
            $grid->column('status', '状态')->switch($states);
    
            // $grid->created_at();
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
        return Admin::form(Training::class, function (Form $form) {
    
            $form->tab('中文', function (Form $form) {
                // $form->display('id', 'ID');
        
                $form->text('name', '名称');
                // $form->text('en_name', '名称(英文)');
        
                $form->select('category_id', '分类')->options(TrainingCategory::all()->pluck('name', 'id'));
                $form->text('number', '课程编号');
                $form->text('level', '课程级别');
                $form->textarea('content', '描述');
                $form->text('location', '培训地点');
                $form->text('address', '详细地址');
        
                // 数字输入框
                $form->number('total', '总人数');
                // 数字输入框
                $form->number('apply_count', '已报名人数');
        
                $form->date('start_date', '开始时间')->format('YYYY-MM-DD');
                $form->date('end_date', '结束时间');
        
        
                $states = [
                    'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                    'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
                ];
                $form->switch('status', '状态')->states($states)->default('01');
    
            })->tab("英文", function (Form $form) {
                $form->text('en_name', '名称(Name)');
                $form->text('en_level', '课程级别(Level)');
                $form->textarea('en_content', '描述(英文)');
                $form->text('en_location', 'Location');
                $form->text('en_address', 'Address');
                
            });
    
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
        });
    }
}
