<?php

namespace App\Http\Requests;

class ProfileStoreRequest extends Request
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
			'last_name' => 'required|max:50',
			'first_name' => 'required|max:50',
			'phone_number'=>'required',
			'sex'=>'required',
			'date_of_birth'=>'required',
			'nationality'=>'required',
			'native_language'=>'required',
			'chinese_level'=>'required',
			'current_residence'=>'required',
			'resume_url'=>'required'
		];
	}

	public function messages()
	{
		return [
			'first_name.required' => 'First name is required',
			'last_name.required' => 'Last name is required',
			'phone_number.required' => 'Phone number is required',
			'sex.required' => 'Gender is required',
			'date_of_birth.required' => 'Date of birth is required',
			'nationality.required' => 'Nationality is required',
			'resume_url.required' => 'Please upload your resume',
			'resume_url.mimes:pdf' => 'Resume only support PDF type',
			'native_language.required' => 'Mother tongue is required',
			'chinese_level.required' => 'Chinese level is required',
			'current_residence.required' => 'Current residence is required'
		];
	}

}
