<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Amenity
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\App\Amenity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Amenity whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Amenity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Amenity whereName($value)
 * @mixin \Eloquent
 */
class Amenity extends Model
{
    //
	public $fillable = [
		'name'
	];

	public function apartment(){
		return $this->belongsToMany('App\Apartment');
	}
}
