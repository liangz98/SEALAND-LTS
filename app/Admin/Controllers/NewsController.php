<?php

namespace App\Admin\Controllers;

use App\Models\News;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NewsController extends Controller
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

            $content->header('最新消息');
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

            $content->header('最新消息');
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

            $content->header('最新消息');
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
        return Admin::grid(News::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
    
            // 显示 name 字段
            $grid->subject('标题')->editable();
            $grid->release_date('发布日期')->editable();
            $grid->created_at();
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
        return Admin::form(News::class, function (Form $form) {

            $form->display('id', 'ID');
    
            $form->text('subject', '标题');
    
            $form->simditor('desc', '简介');
            $form->image('desc_bg', '简介底图')
                 ->move('images/news/bg')->uniqueName();
            
            $form->simditor('body', '内容');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
    
    
            $form->saving(function (Form $form) {
                // 取出保存前的状态
                $descBg = $form->model()->desc_bg;
        
                if ($descBg == null) {
                    $form->model()->desc_bg = 'images/news/news-default.jpg';
                }
                
                // dd($form->model()->desc_bg);
            });
        });
    }
}
