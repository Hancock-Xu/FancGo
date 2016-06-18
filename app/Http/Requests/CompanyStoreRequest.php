<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyStoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'name'=>'required',
            'business_license_name'=>'required',
            'logo_url'=>'required|image',
            'certificate_url'=>'image',
            'resume_email'=>'required|email',
            'description'=>'required',
            'scale'=>'required',
            'location'=>'required',
            'industry'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required'
        ];
    }

    public $messages = [
        'name.required' => '创建公司机构需要填写公司名称',
        'business_license_name.required' => '创建公司机构需要填写公司注册名称',
        'logo_url.required' => '创建公司需要上传公司Logo',
        'logo_url.image' => '公司Logo需要是图片格式',
        'certificate_url.image' => '公司注册信息图片需要是图片格式',
        'resume_email.required' => '创建公司机构需要填写邮箱用来接收简历',
        'resume_email.email' => '创建公司机构需要填写邮箱用来接收简历',
        'description.required' => '创建公司机构需要填写公司描述',
        'scale.required' => '创建公司机构需要填写公司规模',
        'location.required' => '创建公司需要填写公司地址',
        'industry.required' => '创建公司机构需要填写公司行业',
        'email.required' => '创建公司机构需要填写您的邮箱联系方式',
        'email.email' => '创建公司机构需要填写您的邮箱联系方式',
        'phone_number.required' => '创建公司机构需要填写您的联系电话'
    ];
}
