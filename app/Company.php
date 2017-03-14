<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $user_id
 * @property string $company_name
 * @property string $business_license_name
 * @property string $company_email
 * @property string $company_phone_number
 * @property string $certificate_url
 * @property string $logo_url
 * @property string $website
 * @property string $company_description
 * @property string $scale
 * @property string $company_location
 * @property string $company_address
 * @property string $company_industry
 * @property string $founder_time
 * @property boolean $pass_email_verify
 * @property boolean $complete_create
 * @property boolean $pass_certificate_verify
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Job[] $jobs
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereBusinessLicenseName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyPhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCertificateUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereLogoUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereScale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompanyIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereFounderTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePassEmailVerify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCompleteCreate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePassCertificateVerify($value)
 * @mixin \Eloquent
 */
class Company extends Model
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
