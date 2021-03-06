<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\ExcelExpoter;
use App\Models\Member;
use App\Models\User;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller
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

            $content->header('用户');
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

            $content->header('用户');
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

            $content->header('用户');
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
        return Admin::grid(User::class, function (Grid $grid) {
            // 默认为每页20条
            $grid->paginate(10);
            // 显示id字段，并将这一列设置为可排序列
            $grid->id('ID')->sortable();

            // 显示title字段，由于title字段名和Grid对象的title方法冲突，所以用Grid的column()方法代替

            // $grid->column('name');

            // 显示 name 字段
            $grid->name('用户名')->editable();
            $grid->avatar()->image('',30,30);
            $grid->email()->prependIcon('envelope');
    
    
            $states = [ // 设置text、color、和存储值
                'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            ];
            $grid->column('status', '状态')->switch($states);
            
            // 时间字段的列显示
            $grid->created_at('创建时间');
            // $grid->updated_at();
    
            // 排序
            $grid->model()->orderBy('id', 'desc');
    
            // 筛选功能
            $grid->filter(function (Grid\Filter $filter) {
                $filter->disableIdFilter();
                
                $filter->like('name', '名字');
        
                $filter->like('email', 'E-Mail');
    
                $filter->like('phone', '电话');
        
                $filter->like('mobile', '手机号码');
    
                $filter->where(function ($query) {
                    $query->where('company_name', 'like', "%{$this->input}%")
                        ->orWhere('en_company_name', 'like', "%{$this->input}%");
                }, '公司名称');
    
                $filter->where(function ($query) {
                    $query->where('company_address', 'like', "%{$this->input}%")
                        ->orWhere('en_company_address', 'like', "%{$this->input}%");
                }, '地址');
        
                $filter->equal('status', '状态')
                    ->select([
                        '01' => '正常',
                        '02' => '禁用',
                    ]);
            });
    
            // 导出 Excel
            $excel = new ExcelExpoter();
            $excel->setAttr('用户', ['id', 'name', 'en_name', 'email', 'member_id', 'introduction', 'company_name', 'en_company_name', 'company_address', 'en_company_address', 'company_phone', 'company_fax', 'mailing_address', 'en_mailing_address', 'nace_number', 'department', 'en_department', 'title', 'en_title', 'identification_number', 'phone', 'mobile', 'invoice_mailing_address', 'invoice_mailing_name', 'invoice_mailing_zip_code', 'invoice_mailing_phone', 'taxpayer_identification_number', 'invoice_address', 'invoice_phone', 'invoice_bank_name', 'invoice_bank_no', 'invoice_title'],
                ['id', 'name', 'en_name', 'email', 'member_id', 'introduction', 'company_name', 'en_company_name', 'company_address', 'en_company_address', 'company_phone', 'company_fax', 'mailing_address', 'en_mailing_address', 'nace_number', 'department', 'en_department', 'title', 'en_title', 'identification_number', 'phone', 'mobile', 'invoice_mailing_address', 'invoice_mailing_name', 'invoice_mailing_zip_code', 'invoice_mailing_phone', 'taxpayer_identification_number', 'invoice_address', 'invoice_phone', 'invoice_bank_name', 'invoice_bank_no', 'invoice_title']);
            $grid->exporter($excel);
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {

            $form->display('id', 'ID');
    
            $form->text('name', '名称');
            $form->display('email', 'E-Mail');
            // 修改上传目录
            $form->image('avatar', '头像')
                 ->move('images/avatars')->uniqueName();
            $form->simditor('introduction', '介绍');
            $states = [
                'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            ];
            $form->switch('status', '状态')->states($states)->default('01');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
    
            
            // 保存后回调
            /*
            $form->saved(function (Form $form) {
                // $form->model()->id;
                
                $member = new Member;
                $member->user_id = $form->model()->id;
                $member->name = $form->model()->name;
                $member->en_name = $form->model()->en_name;
                $member->email = $form->model()->email;
                $member->created_by = 1;
                $member->last_updated_by = 1;
                $member->created_at = $form->model()->created_at;
                $member->updated_at = $form->model()->updated_at;
            });
            */
        });
    }
}
