<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\ExcelExpoter;
use App\Models\Member;
use App\Models\Membership;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MembershipController extends Controller
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

            $content->header('会员资格');
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

            $content->header('会员资格');
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

            $content->header('会员资格');
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
        return Admin::grid(Membership::class, function (Grid $grid) {
    
            // 默认为每页20条
            $grid->paginate(10);

            $grid->id('ID')->sortable();
    
            $grid->column('member.name', '会员');
            $grid->column('start_date', '发证日期')
                 ->display(function ($time) {
                     return date('Y-m-d', strtotime($time));
                 });
            $grid->column('expiry_date', '到期日')
                 ->display(function ($time) {
                     return date('Y-m-d', strtotime($time));
                 });
    
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
        return Admin::form(Membership::class, function (Form $form) {

            $form->display('id', 'ID');
    
            $form->select('member_id')->options(function ($id) {
                
                $member = Member::find($id);
        
                if ($member) {
                    return [$member->id => $member->name];
                }
            })->ajax('/api/members');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
