<?php

namespace App\Http\Requests;

class RegisterCourseRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'en_company_name'       => 'required',
                    'company_name'          => 'required',
                    'en_company_address'    => 'required',
                    'company_address'       => 'required',
                    'company_phone'         => 'required',
                    'company_fax'           => 'required',
                    'en_mailing_address'    => 'required',
                    'mailing_address'       => 'required',
                    'en_name'               => 'required',
                    'name'                  => 'required',
                    'en_department'         => 'required',
                    'department'            => 'required',
                    'en_title'              => 'required',
                    'title'                 => 'required',
                    'identification_number' => 'required',
                    'phone'                 => 'required',
                    'mobile'                => 'required',
                    'email'                 => 'required',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'en_company_name.required'       => '请填写公司英文名称',
            'company_name.required'          => '请填写公司名称',
            'en_company_address.required'    => '请填写公司英文地址',
            'company_address.required'       => '请填写公司地址',
            'company_phone.required'         => '请填写办公电话',
            'company_fax.required'           => '请填写办公传真',
            'en_mailing_address.required'    => '请填证书英文快递地址',
            'mailing_address.required'       => '请填证书中文快递地址',
            'en_name.required'               => '请填写英文姓名',
            'name.required'                  => '请填写中文姓名',
            'en_department.required'         => '请填写所属部门英文名称',
            'department.required'            => '请填写所属部门名称',
            'en_title.required'              => '请填写职务英文名称',
            'title.required'                 => '请填写职务',
            'identification_number.required' => '请填写身份证号',
            'phone.required'                 => '请填写家庭电话',
            'mobile.required'                => '请填写手机号码',
            'email.required'                 => '请填写邮箱地址',
            'application_form.required'      => '请上传报表名',
        ];
    }
}
