<?php

namespace App\Http\Requests;

class ProfileUpdateRequest extends Request
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
			'phone_number'=>'required',
			'sex'=>'required',
			'date_of_birth'=>'required',
			'nationality'=>'required',
			'native_language'=>'required',
			'chinese_level'=>'required',
			'current_residence'=>'required',
			'resume_url'=>'required|mimes:pdf'
		];
	}

	public function messages()
	{
		return [
			'phone_number.required' => '需要填写电话号码',
			'sex.required' => '需要填写性别',
			'date_of_birth.required' => '需要填写生日',
			'nationality.required' => '需要填写国籍',
			'resume_url.required' => '需要上传简历',
			'resume_url.mimes:pdf' => '简历格式需要是PDF',
			'native_language.required' => '需要填写您的母语',
			'chinese_level.required' => '需要填写中文水平',
			'current_residence.required' => '需要填写现居地'
		];
	}

}
