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
            'name'=>'required',
            'business_license_name'=>'required',
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
