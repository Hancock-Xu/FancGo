<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class PreCompanyStoreRequest extends Request
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
			'business_license_name'=>'required',
			'certificate_url'=>'image',
			'company_email'=>'required|email|business_email',/*企业邮箱*/
			'company_phone_number'=>'required'
		];
	}

	public function messages()
	{
		return [
			'business_license_name.required' => '需要填写公司营业执照名称',
			'certificate_url.image' => '公司注册信息图片需要是图片格式',
			'company_email.required' => '需要填写您的企业邮箱联系方式',
			'company_email.email' => '需要填写您的企业邮箱联系方式',
			'company_phone_number.required' => '需要填写您的联系电话'
		];
	}
}
