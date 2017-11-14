<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/13 13:46
 */
use App\Models\Member;

return [
    'title' => '会员管理',
    
    'single'  => '会员',
    
    'model'   => Member::class,
    
    'permission' => function () {
        return Auth::user()->can('manage_users');
    },
    
    // 字段负责渲染『数据表格』，由无数的『列』组成，
    'columns' => [
        'id',
        'member_number' => [
            'title'    => '档案编号',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'name' => [
            'title'  => '名称',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'sex' => [
            'title'  => '性别',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'email' => [
            'title'  => '邮箱',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
            },
        ],
        'mobile_phone' => [
            'title'  => '手机号码',
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
        'member_number' => [
            'title'    => '档案编号',
        
        ],
        'name' => [
            'title'    => '名称',
        
        ],
    ]
];