<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $passportNumber
 * @property string $phoneNumber
 * @property string $openid
 * @property string $name
 * @property string $gender
 * @property string $city
 * @property string $country
 * @property string $headimgurl
 * @property string $province
 * @property string $unionid
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassportNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHeadimgurl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUnionid($value)
 * @mixin \Eloquent
 * @property-read \App\Company $company
 */
class User extends Authenticatable
{
	protected $fillable = [
		'name',
		'email',
		'password',
		];
	
	protected $hidden = [
		'password','remember_token',
	];

	public function company(){
		return $this->hasOne('App\Company');
	}
}
