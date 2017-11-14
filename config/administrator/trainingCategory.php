<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 11:37
 */

use App\Models\TrainingCategory;

return [
    'title' => '分类管理',
    
    'single'  => '培训分类',

    'model'   => TrainingCategory::class,

    'permission' => function () {
        return Auth::user()->can('manage_users');
    },
    
    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [
        'id',
        'name' => [
            'title'    => '分类名',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'desc' => [
            'title'    => '描述',
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
            'title'    => '分类名',
            
        ],
        'desc' => [
            'title'    => '描述',

        ],
    ]
];