<?php

namespace App\Http\Requests;

class JobStoreRequest extends Request
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
            'job_title'=>'required',
            'description'=>'required',
            'desired_skill_experience'=>'required',
            'education_require'=>'required',
            'years_work_experience'=>'required',
            'salary_lower_limit'=>'required',
            'salary_upper_limit'=>'required',
            'job_status_type'=>'required',
            'industry'=>'required',
            'resume_email'=>'required'
        ];
    }
}
