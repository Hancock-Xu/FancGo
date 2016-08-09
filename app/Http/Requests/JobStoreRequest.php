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
            'job_description'=>'required',
            'desired_skill_experience'=>'required',
            'education_degree'=>'required',
            'position_experience'=>'required',
            'min_salary'=>'required',
            'max_salary'=>'required',
            'job_status_type'=>'required',
            'job_industry'=>'required',
            'resume_email'=>'required'
        ];
    }
}
