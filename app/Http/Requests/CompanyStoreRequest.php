<?php

namespace App\Http\Requests;

use App\Company;

class CompanyStoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*
         * 判断该company是否为当前用户所有
         */
        $companyId = $this->route('company');
        return Company::where('id',$companyId)->where('user_id',\Auth::id())->exists();
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
            'logo_url'=>'required',
            'description'=>'required',
            'scale'=>'required',
            'location'=>'required',
            'industry'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required'
            
        ];
    }
}
