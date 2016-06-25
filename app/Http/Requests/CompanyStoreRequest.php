<?php

namespace App\Http\Requests;

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
            'description'=>'required',
            'scale'=>'required',
            'location'=>'required',
            'industry'=>'required',
            'email'=>'required|email|business_email',/*企业邮箱*/
            'phone_number'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '需要填写公司名称',
            'business_license_name.required' => '需要填写公司注册名称',
            'logo_url.required' => '需要上传公司Logo',
            'logo_url.image' => '公司Logo需要是图片格式',
            'certificate_url.image' => '公司注册信息图片需要是图片格式',
            'resume_email.email' => '需要填写邮箱用来接收简历',
            'description.required' => '需要填写公司描述',
            'scale.required' => '需要填写公司规模',
            'location.required' => '需要填写公司地址',
            'industry.required' => '需要填写公司行业',
            'email.required' => '需要填写您的企业邮箱联系方式',
            'email.email' => '需要填写您的企业邮箱联系方式',
            'business_email' => '需要填写您的企业邮箱',
            'phone_number.required' => '需要填写您的联系电话'
        ];
    }

}
