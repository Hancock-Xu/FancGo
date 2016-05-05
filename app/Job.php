<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Job
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $job_title
 * @property string $responsibility
 * @property string $eduction_require
 * @property integer $years_work_experience
 * @property string $salary_and_other_welfare
 * @property string $job_status_type
 * @property string $industry
 * @property string $published_at
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereResponsibility($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereEductionRequire($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereYearsWorkExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereSalaryAndOtherWelfare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobStatusType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePublishedAt($value)
 * @mixin \Eloquent
 */
class Job extends Model
{

	protected  $dates = ['published_at'];

	protected $fillable = [
		'job_title',
		'responsibility',
		'eduction_require',
		'years_work_experience',
		'salary_and_welfare',
		'job_status_type',
		'industry',
		'published_at'
	];

	protected function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}

	public function companies()
	{
		return $this->belongsTo('App\Company');
	}
}
