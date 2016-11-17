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
 * @property integer $company_id
 * @property string $resume_email
 * @property string $job_title
 * @property string $job_description
 * @property string $desired_skill_experience
 * @property string $education_degree
 * @property string $position_experience
 * @property integer $min_salary
 * @property integer $max_salary
 * @property string $position_benefit
 * @property string $extra_welfare
 * @property string $job_status_type
 * @property string $job_industry
 * @property string $work_city
 * @property string $position_points
 * @property \Carbon\Carbon $published_at
 * @property string $off_the_shelves
 * @property-read \App\Company $companies
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereResumeEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereDesiredSkillExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereEducationDegree($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePositionExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereMinSalary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereMaxSalary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePositionBenefit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereExtraWelfare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobStatusType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereWorkCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePositionPoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereOffTheShelves($value)
 * @mixin \Eloquent
 */
class Job extends Model
{

	protected  $dates = ['published_at'];

	protected $fillable = [
		'job_title',
		'job_description',
		'desired_skill_experience',
		'min_salary',
		'max_salary',
		'position_benefit',
		'extra_welfare',
		'job_status_type',
		'job_industry',
		'work_city',
		'position_points',
		'published_at',
		'education_degree',
		'position_experience',
		'company_id',
		'pageView_amount',
		'application_amount',
		'resume_email',
		'off_the_shelves'
	];

	protected function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}

	public function companies()
	{
		return $this->belongsTo('App\Company');
	}

	public function getCreatedAtAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
	}

	public function getUpdatedAtAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
	}
}
