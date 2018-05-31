<?php

namespace App\Admin\Controllers;

use App\Models\RegisterCourse;

use DB;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;

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
    
    public function show(RegisterCourse $registerCourse) {
        return Admin::content(function (Content $content) use ($registerCourse) {
            $content->header('会员');
            $content->description('信息');
            
            $headers = [
                '字段',
                '值'
            ];
            
            $table2 = new Table($headers, $registerCourse->toArray());
            
            $content->body((new Box('Table-2', $table2))->style('info')
                ->solid());
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
            // 默认为每页20条
            $grid->paginate(10);
    
            $grid->model()->orderBy('id', 'desc');  // 按ID倒序
            $grid->disableCreation();   // 禁用创建按钮

            $grid->id('ID')->sortable()
                ->display(function ($value) {
                    return "<a href='/admin/registerCourses/$value'>$value</a>";
                });
    
            $grid->column('training.name', '课程')->label();
            $grid->column('user.name', '用户名')
                ->display(function ($value) {
                    return "<a href='/admin/registerCourses/$value'>$value</a>";
                });
            $grid->column('member.name', '会员');
            $grid->column('member.member_number', '编号');
            $grid->column('member.email', '邮箱');
            
            $grid->created_at('申请时间');
    
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
    
            $form->tab('基本信息', function (Form $form) {
                $form->display('id', 'ID');
    
                $form->display('training.name', '培训课程');
                $form->display('member.name', '会员');
                $form->display('member.member_number', '编号');
    
                $form->select('status', '状态')
                     ->options([
                         '01' => '申请',
                         '02' => '审核通过',
                         '03' => '拒绝',
                         '04' => '取消',
                     ]);
    
                $form->display('created_at', '申请时间');
            })->tab("公司信息", function (Form $form) {
                $form->text('company_name', '公司名称')->rules('nullable');
                $form->text('en_company_name', '公司名称(英文)')->rules('nullable');
                $form->text('company_address', '公司地址')->rules('nullable');
                $form->text('en_company_address', '公司地址(英文)')->rules('nullable');
                $form->mobile('company_phone', '公司电话')->rules('nullable');
                $form->mobile('company_fax', '公司传真')->rules('nullable');
                // $form->text('mailing_address', '邮寄地址');
                // $form->text('mailing_name', '收件人');
                // $form->mobile('mailing_mobile', '收件人电话')->options(['mask' => '999 9999 9999']);
            });
            
    
            $form->saving(function (Form $form) {
                // 取出保存前的状态
                $savingStatus = $form->model()->status;
    
                // 保存后处理可报名人数
                $form->saved(function (Form $form) use($savingStatus) {
                    $training = DB::table('trainings')
                                  ->where('id', $form->model()->training_id);
        
                    // 保存前不为"通过", 保存后通过, 已确认人数+1
                    if ($savingStatus != '02' && $form->model()->status == '02') {
                        $training->increment('apply_count', 1);
                    }
                    // 保存前为"通过", 保存后不通过, 已确认人数-1
                    if ($savingStatus == '02' && $form->model()->status != '02') {
                        $training->decrement('apply_count', 1);
                    }
                });
            });
    
            
        });
    }
}
