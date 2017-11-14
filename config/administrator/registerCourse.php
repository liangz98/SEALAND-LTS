<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 13:29
 */
use App\Models\RegisterCourse;

return [
    'title' => '培训申请管理',
    
    'single'  => '申请',
    
    'model'   => RegisterCourse::class,
    
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
        'training_id' => [
            'title'    => '课程ID',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'deleted' => [
            'title'    => '删除',
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
        'training_id' => [
            'title'    => '课程ID',
        
        ],
    ]
];