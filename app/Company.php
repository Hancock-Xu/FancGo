<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string $description
 * @property string $scale
 * @property string $location
 * @property string $industry
 * @property string $contract
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereScale($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company whereContract($value)
 * @mixin \Eloquent
 * @property string $published_at
 * @method static \Illuminate\Database\Query\Builder|\App\Company wherePublishedAt($value)
 */
class Company extends Model
{
	public function jobs()
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}
}
