<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

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
            'name'=>'required',
            'business_license_name'=>'required',
            'company_logo_avatar'=>'required|image',
            'company_license_img'=>'image',
            'resume_email'=>'required|email',
            'description'=>'required',
            'scale'=>'required',
            'location'=>'required',
            'industry'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required'
        ];
    }
}
