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
            'company_name'=>'required',
//            'logo_url'=>'required|image',
            'company_description'=>'required',
            'scale'=>'required',
//            'company_location'=>'required',
	        'company_address'=>'required',
            'company_industry'=>'required',
	        'website'=>'URL'
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'Company full name is required',
            'business_license_name.required' => 'Please fill up full name of your company',
            'logo_url.required' => 'Company logo is required',
            'logo_url.image' => 'Please upload right image type: JPEG、JPG、PNG',
            'certificate_url.image' => 'Please upload right image type: JPEG、JPG、PNG',
            'resume_email.email' => 'Resume email is required',
            'company_description.required' => 'Company description is required',
            'scale.required' => 'Company scale is required',
            'company_address.required' => 'Company address is required',
            'company_industry.required' => 'Company industry is required',
            'company_email.required' => '需要填写您的企业邮箱联系方式,Enterprise mail is required',
            'company_email.email' => '需要填写您的企业邮箱联系方式,Enterprise mail is required',
            'business_email' => '需要填写您的企业邮箱,Enterprise mail is required',
            'company_phone_number.required' => 'Phone number is required'
        ];
    }

}
