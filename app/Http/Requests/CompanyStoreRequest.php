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
            'name'=>'required',
            'business_license_name'=>'required',
            'resume_email'=>'required',
            'logo_url'=>'required',
            'description'=>'required',
            'scale'=>'required',
            'location'=>'required',
            'industry'=>'required',
            'email'=>'required',
            'phone_number'=>'required'
            
        ];
    }
}
