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

	public function messages()
	{
		return [
			'job_title.required'=>'Job title is required',
            'job_description.required'=>'Job description is required',
            'desired_skill_experience.required'=>'Desired skill and experience is required',
            'education_degree.required'=>'Education degree is required',
            'position_experience.required'=>'Position experience is required',
            'min_salary.required'=>'Min Salary is required',
            'max_salary.required'=>'Max salary is reqired',
            'job_status_type.required'=>'Job type is required',
            'job_industry.required'=>'Position industry is required',
            'resume_email.required'=>'This email address is required'
		];
	}
}
