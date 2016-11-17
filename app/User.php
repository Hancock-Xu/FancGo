<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

/**
 * App\User
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $sex
 * @property string $date_of_birth
 * @property string $nationality
 * @property string $native_language
 * @property string $chinese_level
 * @property string $current_residence
 * @property string $phone_number
 * @property string $passport_number
 * @property string $resume_url
 * @property boolean $finish_basic_info
 * @property string $openid
 * @property string $city
 * @property string $country
 * @property string $headimgurl
 * @property string $unionid
 * @property string $education_degree
 * @property-read \App\Company $company
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNationality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNativeLanguage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereChineseLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCurrentResidence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassportNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereResumeUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFinishBasicInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHeadimgurl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUnionid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEducationDegree($value)
 * @mixin \Eloquent
 * @property string $prefer_industry
 * @property string $position_experience
 * @property string $english_level
 * @property string $major
 * @property string $desired_city
 * @property string $other_considerations
 * @property string $main_interests
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePreferIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePositionExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEnglishLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereMajor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDesiredCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOtherConsiderations($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereMainInterests($value)
 */
class User extends Authenticatable
{
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',

		'sex',
		'date_of_birth',
		'nationality',
		'native_language',
		'chinese_level',
		'phone_number',
		'current_residence',
		'finish_basic_info',
		'passportNumber',
		'resume_url',
		'education_degree'
		];
	
	protected $hidden = [
		'password','remember_token',
	];

	public function company(){
		return $this->hasOne('App\Company');
	}

	public function getDateOfBirthAttribute($date_of_birth)
	{
		if (!$date_of_birth){
			return null;
		}else{
			return Carbon::createFromFormat('Y-m-d H:i:s', $date_of_birth)->format('Y-m-d');
		}

	}
}
