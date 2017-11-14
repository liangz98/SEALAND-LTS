<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 13:40
 */

use App\Models\RenewCertification;

return [
    'title' => '续期申请管理',
    
    'single'  => '续期',
    
    'model'   => RenewCertification::class,
    
    'permission' => function () {
        return Auth::user()->can('manage_users');
    },
    
    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [
        'id',
        'member_id' => [
            'title'    => '用户ID',
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
            'title'  => '课程级别',
            'sortable' => false,
        ],
        'user_name' => [
            'title'  => '用户名',
            'sortable' => false,
        ],
        'user_password' => [
            'title'  => '密码',
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