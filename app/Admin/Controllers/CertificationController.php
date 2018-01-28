<?php

namespace App\Admin\Controllers;

use App\Models\Certification;

use App\Models\Member;
use App\Models\Training;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CertificationController extends Controller
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

            $content->header('认证');
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

            $content->header('认证');
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

            $content->header('认证');
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
        return Admin::grid(Certification::class, function (Grid $grid) {
            // 默认为每页20条
            $grid->paginate(10);
        
            $grid->id('ID')
                 ->sortable();
    
            $grid->column('member.name', '会员');
            $grid->column('member.member_number', '会员编号');
            $grid->column('training.name', '课程名称');
            $grid->column('training.number', '课程编号');
            $grid->column('training.level', '课程级别');
            $grid->column('start_date', '发证日期')
                 ->display(function ($time) {
                     return date('Y-m-d', strtotime($time));
                 })->sortable();
            $grid->column('expiry_date', '到期日')
                 ->display(function ($time) {
                     return date('Y-m-d', strtotime($time));
                 })->sortable();
        
        
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
        return Admin::form(Certification::class, function (Form $form) {

            $form->display('id', 'ID');
    
            $form->select('member_id')->options(function ($id) {
        
                $member = Member::find($id);
        
                if ($member) {
                    return [$member->id => $member->name];
                }
            })->ajax('/api/members');
    
            $form->select('training_id')->options(function ($id) {
        
                $training = Training::find($id);
        
                if ($training) {
                    return [$training->id => $training->name];
                }
            })->ajax('/api/trainings');
    
            $form->date('start_date', '发证日期')->format('YYYY-MM-DD');
            $form->date('expiry_date', '到期日期')->format('YYYY-MM-DD');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
    
            $form->saving(function (Form $form) {
                // 取出保存前的状态
                $training_id = $form->model()->training_id;
    
                if ($training_id != null) {
                    $training = Training::where('id', $training_id)->find(1);
                    if ($training != null) {
                        $form->model()->number = $training->number;
                        $form->model()->level = $training->level;
                    }
                }
            });
        });
    }
}
