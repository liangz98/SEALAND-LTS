<?php

use App\Admin\Extensions\Column\ExpandRow;
use App\Admin\Extensions\Nav\Links;
use App\Admin\Extensions\OpenMap;
use App\Admin\Extensions\Popover;
use App\Admin\Extensions\Simditor;
use Encore\Admin\Grid\Column;
use Encore\Admin\Form;

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['map', 'editor']);
// Encore\Admin\Form::forget(['map']);

Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {
    // 添加至头部左侧
    // $navbar->left('html...');
    
    // 添加至头部右侧
    // $navbar->right(new Links());
    
});


Column::extend('popover', Popover::class);      // 新增扩展 - 用于列表页
Column::extend('prependIcon', function ($value, $icon) { // 文本框显示图标扩展
    return "<span style='color: #999;'><i class='fa fa-$icon'></i>  $value</span>";
});
Column::extend('expand', ExpandRow::class);     //列表页显示下拉层
// Column::extend('openMap', OpenMap::class);  // 列表页地图插件
Form::extend('simditor', Simditor::class);       // 扩展富文本编辑框(Simditor http://simditor.tower.im/)