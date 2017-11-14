<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 13:24
 */

use App\Models\Training;

return [
    'title' => '课程管理',
    
    'single'  => '课程',
    
    'model'   => Training::class,
    
    'permission' => function () {
        return Auth::user()->can('manage_users');
    },
    
    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [
        'id',
        'name' => [
            'title'    => '课程',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'number' => [
            'title'    => '编号',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'level' => [
            'title'    => '级别',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'content' => [
            'title'    => '课程内容说明',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'location' => [
            'title'    => '培训地点',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'operation' => [
            'title'  => '管理',
            'sortable' => false,
        ],
    ],
    
    'edit_fields' => [
        'name' => [
            'title'    => '课程',
        
        ],
        'desc' => [
            'title'    => '编号',
        
        ],
    ]
];