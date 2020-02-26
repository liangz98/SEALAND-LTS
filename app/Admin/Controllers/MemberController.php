<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\ExcelExpoter;
use App\Models\Member;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;
use Illuminate\Http\Request;

class MemberController extends Controller
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

            $content->header('会员');
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

            $content->header('会员');
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

            $content->header('会员');
            $content->description('新增');

            $content->body($this->form());
        });
    }
    
    public function show(Member $member) {
        return Admin::content(function (Content $content) use ($member) {
            $content->header('会员');
            $content->description('信息');
            
            $headers = [
                '字段',
                '值'
            ];
    
            $table2 = new Table($headers, $member->toArray());
    
            $content->body((new Box('', $table2))->style('info')
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
        return Admin::grid(Member::class, function (Grid $grid) {
            $grid->model()->with('certifications');
            
            // 默认为每页20条
            $grid->paginate(10);

            // 列表内容
            $grid->id('ID')->sortable()
                ->display(function ($value) {
                    return "<a href='/admin/members/$value'>$value</a>";
                });
    
            $grid->column('member_number', '会员编号')->editable();
            $grid->column('name', '名称')->editable();
            $grid->column('expand','认证')->expand(function () {
                $certifications = $this->certifications;
                
                // 两种遍历处理数组的方法:都可用
                foreach ($certifications as $key => $certification) {
                    $certification = array_only($certification, ['id', 'start_date', 'expiry_date', 'number', 'level', 'training.name']);
                    
                    $certifications[$key] = $certification;
                }
    
                // 两种遍历处理数组的方法:都可用
                // for ($i = 0; $i < count($certifications); $i++) {
                //     $certifications[$i] = array_only($certifications[$i], ['id', 'start_date', 'expiry_date']);
                // }
    
                $headers = ['ID', '课程编号', '级别', '发证日期', '到期日期'];
                return new Table($headers, $certifications);
            }, '认证详情');
    
            $grid->column('gender', '性别')->display(function ($value) {
                return $value == 'M'?trans('dataDict.male'):trans('dataDict.female');
            });
            $grid->column('email', 'E-Mail');
            $grid->column('mobile_phone', '手机号码');
    
            $grid->column('certification_number', '认证号码');
            $grid->column('certification_date', '证书到期日')
                ->display(function ($time) {
                    if ($time != null) {
                        return date('Y-m-d', strtotime($time));
                    } else {
                        return '';
                    }
                });
            
            // $states = [ // 设置text、color、和存储值
            //     'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
            //     'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
            // ];
            // $grid->column('status', '状态')->switch($states);

            // $grid->created_at('创建时间');
            // $grid->updated_at('更新时间');
    
            
            // 筛选功能
            $grid->filter(function (Grid\Filter $filter) {
                // $filter->disableIdFilter();
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                
                $filter->like('name', '名字');
    
                $filter->like('certification_number', '认证号码');
    
                $filter->like('member_number', '会员编号');
    
                $filter->like('city_code', '城市');
        
                $filter->like('mobile_phone', '手机号码');
    
                $filter->like('certification_level', '证书级别');
    
                $filter->like('industry', '从事行业');
    
                $filter->lt('certification_date', '证书到期日')->date();
            });
            
            // 排序
            $grid->model()->orderBy('id', 'desc');
    
            $excel = new ExcelExpoter();
            $excel->setAttr('会员', ['id', 'member_number', 'user_id', 'name', 'en_name', 'gender', 'email', 'oth_email', 'mobile_phone', 'oth_mobile_phone', 'country', 'en_country', 'country_code', 'state', 'en_state', 'city', 'en_city', 'street', 'en_street', 'address', 'en_address', 'company_name', 'en_company_name', 'title', 'company_address', 'en_company_address', 'mailing_address', 'en_mailing_address', 'mailing_name', 'mailing_mobile', 'certification_id', 'zip_code', 'created_at'],
                ['id', 'member_number', 'user_id', 'name', 'en_name', 'gender', 'email', 'oth_email', 'mobile_phone', 'oth_mobile_phone', 'country', 'en_country', 'country_code', 'state', 'en_state', 'city', 'en_city', 'street', 'en_street', 'address', 'en_address', 'company_name', 'en_company_name', 'title', 'company_address', 'en_company_address', 'mailing_address', 'en_mailing_address', 'mailing_name', 'mailing_mobile', 'certification_id', 'zip_code', 'created_at']);
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
        // Admin::script('$("#birthday").change(function(){ console.log("hello world!!!!!"); });');
        return Admin::form(Member::class, function (Form $form) {
            
            $form->tab('基本信息', function (Form $form) {
                $form->display('id', 'ID');
    
                $form->text('member_number', '会员编号');
                $form->text('name', '名称');
                
                $form->email('email', 'E-Mail');
                $form->mobile('mobile_phone', '手机号码');
                     // ->options(['mask' => '999 9999 9999']);
                $states = [
                    'on'  => ['value' => '01', 'text' => '正常', 'color' => 'primary'],
                    'off' => ['value' => '02', 'text' => '禁用', 'color' => 'default'],
                ];
                $form->switch('status', '状态')->states($states)->default('01');
    
                $form->display('created_at', '创建时间');
                $form->display('updated_at', '更新时间');
            })->tab("个人信息", function (Form $form) {
                $states = [
                    'on'  => ['value' => 'M', 'text' => '男', 'color' => 'primary'],
                    'off' => ['value' => 'F', 'text' => '女', 'color' => 'danger'],
                ];
                $form->switch('gender', '性别')->states($states)->default('M');
                $form->date('birthday', '出生日期');
                // $form->number('age', '年龄');
                $form->email('oth_email', '其他邮箱')->rules('nullable');
                $form->mobile('oth_mobile_phone', '其他手机号码')->options(['mask' => '999 9999 9999']);
                $form->text('mailing_address', '邮寄地址');
                $form->text('mailing_name', '收件人');
                $form->mobile('mailing_mobile', '收件人电话')->options(['mask' => '999 9999 9999']);
            })->tab("地址信息", function (Form $form) {
                $form->text('country_code', '国家');
                $form->text('state_code', '省份');
                $form->text('city_code', '城市');
                $form->text('street', '街道');
                $form->text('address', '地址');
            })->tab("公司信息", function (Form $form) {
                $form->text('industry', '行业');
                $form->text('company_name', '公司名称');
                $form->text('title', '职位');
                $form->text('company_address', '公司地址');
                
            })->tab("认证信息", function (Form $form) {
                $form->text('certification_id', '认证');
                $form->text('certification_number', '认证号码');
                $form->text('certification_level', '证书级别');
                $form->text('certification_date', '证书到期日');
            });
           
        });
    }
}
