<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * 权限验证
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 表单请求验证
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'         => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email'        => 'required|email',
            'introduction' => 'max:200',
            // 图片比例验证规则 dimensions ，仅允许上传宽和高都大于 200px 的图片；
            'avatar'       => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
        ];
    }
    
    /**
     * 自定义消息提醒内容
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique'       => '用户名已被占用，请重新填写',
            'name.regex'        => '用户名只支持中英文、数字、横杆和下划线。',
            'name.between'      => '用户名必须介于 3 - 25 个字符之间。',
            'name.required'     => '用户名不能为空。',
            'introduction.max'  => '个人简介不能大于200个字符。',
            'avatar.dimensions' => '图片的清晰度不够，宽和高需要 200px 以上',
        ];
    }
}
