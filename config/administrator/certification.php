<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 13:32
 */
use App\Models\Certification;

return [
    'title' => '认证管理',
    
    'single'  => '认证',
    
    'model'   => Certification::class,
    
    'permission' => function () {
        return Auth::user()->can('manage_users');
    },
    
    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [
        'id',
        'member_id' => [
            'title'    => '会员ID',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'number' => [
            'title'    => '课程编号',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'level' => [
            'title'    => '课程级别',
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
        'member_id' => [
            'title'    => '会员ID',
        
        ],
        'number' => [
            'title'    => '课程编号',
        
        ],
    ]
];