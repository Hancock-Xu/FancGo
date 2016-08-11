<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Company
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string $business_license_name
 * @property string $resume_email
 * @property string $logo_url
 * @property string $website
 * @property string $certificate_url
 * @property string $description
 * @property string $scale
 * @property string $location
 * @property string $industry
 * @property string $email
 * @property string $phone_number
 * @property string $published_at
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereBusinessLicenseName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereResumeEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereLogoUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCertificateUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereScale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePublishedAt($value)
 * @mixin \Eloquent
 * @property integer $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Job[] $jobs
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereUserId($value)
 * @property string $company_name
 * @property string $company_description
 * @property string $company_location
 * @property string $company_industry
 * @property string $company_email
 * @property string $company_phone_number
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyPhoneNumber($value)
 * @property string $founder_time
 * @property boolean $pass_email_verify
 * @property boolean $pass_certificate_verify
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereFounderTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePassEmailVerify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePassCertificateVerify($value)
 * @property string $company_address
 * @property boolean $complete_create
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompleteCreate($value)
 */
class Company extends Authenticatable
{
    //

	protected $fillable = [
		'company_name',
		'user_id',
		'business_license_name',
		'resume_email',
		'logo_url',
		'website',
		'certificate_url',
		'company_description',
		'scale',
		'company_location',
		'company_industry',
		'company_email',
		'company_phone_number',
		'published_at',
		'founder_time',
		'company_address'
	];

	public function jobs()
	{
		return $this->hasMany('App\Job');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}
}
