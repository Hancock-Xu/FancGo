<?php

namespace App\Http\Requests;

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
//            'company_name'=>'required',
			'business_license_name'=>'required',
//            'logo_url'=>'required|image',
			'logo_url'=>'image',
			'certificate_url'=>'required|image',

//            'company_description'=>'required',
//            'scale'=>'required',
//            'company_location'=>'required',
//            'company_industry'=>'required',
			'company_email'=>'required|email|business_email',/*企业邮箱*/
			'company_phone_number'=>'required'
		];
	}

	public function messages()
	{
		return [
//            'company_name.required' => '需要填写公司名称',
			'business_license_name.required' => '需要填写公司注册名称',
//            'logo_url.required' => '需要上传公司Logo',
//            'logo_url.image' => '公司Logo需要是图片格式',
			'certificate_url.image' => '公司注册信息图片需要是图片格式',
//            'resume_email.email' => '需要填写邮箱用来接收简历',
//            'company_description.required' => '需要填写公司描述',
//            'scale.required' => '需要填写公司规模',
//            'company_location.required' => '需要填写公司地址',
//            'company_industry.required' => '需要填写公司行业',
			'company_email.required' => '需要填写您的企业邮箱联系方式',
			'company_email.email' => '需要填写您的企业邮箱联系方式',
			'business_email' => '需要填写您的企业邮箱',
			'company_phone_number.required' => '需要填写您的联系电话'
		];
	}

}
