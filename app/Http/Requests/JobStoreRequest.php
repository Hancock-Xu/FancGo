<?php

namespace App\Http\Requests;

use App\Company;
use App\Job;

class JobStoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $jobId = $this->route('job');
        $companyId = Job::where('id',$jobId)->company_id;
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
            'job_title'=>'required',
            'responsibility'=>'required',
            'salary_and_other_welfare'=>'required'
        ];
    }
}
