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
use App\Admin\Extensions\ExcelExpoter;

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
            $content->header('培训申请');
            $content->description('信息');
            
            $headers = [
                '字段',
                '值'
            ];
            
            $table2 = new Table($headers, $registerCourse->toArray());
            
            $content->body((new Box('培训申请', $table2))->style('info')
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
                    return "<a href='/admin/registerCourses/$value/edit'>$value</a>";
                });
    
            $grid->column('training.name', '课程')->label();
            $grid->column('user.name', '用户名')->display(function ($value) {
                return "<a href='/admin/registerCourses/". $this->id ."/edit'>$value</a>";
            });
            $grid->column('member.name', '会员');
            $grid->column('member.member_number', '编号');
            $grid->column('email', '邮箱');
            
            $grid->created_at('申请时间');
    
            $grid->status('状态')
                 ->select([
                     '01' => '申请',
                     '02' => '审核通过',
                     '03' => '拒绝',
                     '04' => '取消',
                 ]);
    
            // 筛选功能
            $grid->filter(function (Grid\Filter $filter) {
                // $filter->disableIdFilter();
                $filter->where(function ($query) {
                    $query->whereHas('Training', function ($query) {
                        $query->where('name', 'like', "%{$this->input}%")->orWhere('en_name', 'like', "%{$this->input}%");
                    });
                }, '课程名称');
    
                $filter->between('created_at', '课程时间')->datetime();
                
                $filter->where(function ($query) {
                    $query->where('company_name', 'like', "%{$this->input}%")
                        ->orWhere('en_company_name', 'like', "%{$this->input}%");
                }, '公司名称');
    
                $filter->where(function ($query) {
                    $query->where('company_address', 'like', "%{$this->input}%")
                        ->orWhere('en_company_address', 'like', "%{$this->input}%");
                }, '地址');
            });
    
            $excel = new ExcelExpoter();
            $excel->setAttr('培训申请', ['id', '培训课程', '会员', '姓名', '姓名(英文)', 'NACE会员号', '所属部门', '所属部门(英文)', '职务', '职务(英文)', '身份证号码', '家庭电话', '手机号码', '邮箱', '公司名', '公司名称(英文)', '公司地址', '公司地址(英文)', '办公电话', '办公传真', '证书快递地址', '证书快递地址(英文)', '代订酒店', '房型', '床型', '入住者姓名', '入住时间', '共住房晚', '开具发票', '纳税人识别号', '地址', '电话', '开户行', '账号'],
                ['id', 'training.name', 'member.name', 'user.name', 'user.en_name', 'user.nace_number', 'department', 'en_department', 'title', 'en_title', 'identification_number', 'phone', 'mobile', 'email', 'company_name', 'en_company_name', 'company_address', 'en_company_address', 'company_phone', 'company_fax', 'mailing_address', 'en_mailing_address', 'need_hotel', 'room_type', 'bed_type', 'hotel_check_in_name', 'hotel_check_in_date', 'hotel_days', 'need_invoice', 'taxpayer_identification_number', 'invoice_address', 'invoice_phone', 'invoice_bank_name', 'invoice_bank_no']);
            $grid->exporter($excel);
    
            // $grid->exporter(new ExcelExpoter());
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
            })->tab("个人信息", function (Form $form) {
                $form->text('name', '姓名')->rules('nullable');
                $form->text('en_name', '姓名(英文)')->rules('nullable');
                $form->text('nace_number', 'NACE会员号')->rules('nullable');
                $form->text('department', '所属部门')->rules('nullable');
                $form->text('en_department', '所属部门(英文)')->rules('nullable');
                $form->text('title', '职务')->rules('nullable');
                $form->text('en_title', '职务(英文)')->rules('nullable');
                $form->text('identification_number', '身份证号码')->rules('nullable');
                $form->text('phone', '家庭电话')->rules('nullable');
                $form->text('mobile', '手机号码')->rules('nullable');
                $form->text('email', '邮箱地址')->rules('nullable');
            })->tab("公司信息", function (Form $form) {
                $form->text('company_name', '公司名称')->rules('nullable');
                $form->text('en_company_name', '公司名称(英文)')->rules('nullable');
                $form->text('company_address', '公司地址')->rules('nullable');
                $form->text('en_company_address', '公司地址(英文)')->rules('nullable');
                $form->mobile('company_phone', '办公电话')->rules('nullable');
                $form->mobile('company_fax', '办公传真')->rules('nullable');
                $form->text('mailing_address', '证书快递地址')->rules('nullable');
                $form->text('en_mailing_address', '证书快递地址(英文)')->rules('nullable');
                // $form->mobile('mailing_mobile', '收件人电话')->options(['mask' => '999 9999 9999']);
            })->tab("代订酒店", function (Form $form) {
                $need = [
                    'on'  => ['value' => 1, 'text' => '需要', 'color' => 'success'],
                    'off' => ['value' => 0, 'text' => '不需要', 'color' => 'danger'],
                ];
                
                $form->switch('need_hotel', '代订酒店')->states($need)->default('1')->rules('nullable');
                $form->radio('room_type', '房型')->options(['01' => '标房', '02'=> '豪华房'])->rules('nullable');
                $form->radio('bed_type', '床型')->options(['01' => '双床', '02'=> '大床'])->rules('nullable');
                $form->text('hotel_check_in_name', '入住者姓名')->rules('nullable');
                $form->date('hotel_check_in_date', '入住时间')->rules('nullable');
                $form->text('hotel_days', '共住房晚')->rules('nullable');
            })->tab("开具发票", function (Form $form) {
                $need = [
                    'on'  => ['value' => 1, 'text' => '需要', 'color' => 'success'],
                    'off' => ['value' => 0, 'text' => '不需要', 'color' => 'danger'],
                ];
                $form->switch('need_invoice', '开具发票')->states($need)->default('1')->rules('nullable');
                $form->text('taxpayer_identification_number', '纳税人识别号')->rules('nullable');
                $form->text('invoice_address', '地址')->rules('nullable');
                $form->text('invoice_phone', '电话')->rules('nullable');
                $form->text('invoice_bank_name', '开户行')->rules('nullable');
                $form->text('invoice_bank_no', '账号')->rules('nullable');
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
