<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Apartment
 *
 * @property-read \App\User $user
 * @property-read \App\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Amenity[] $amenity
 * @mixin \Eloquent
 */
class Apartment extends Model
{
    public $fillable = [
	    'user_id',
	    'company_id',
	    'name',
	    'description',
	    'rent_type',
	    'bedrooms',
	    'bathrooms',
	    'living_rooms',
	    'size',
	    'location/district',
	    'nearest_mtr_station',
	    'condition',
	    'price'
    ];
	
	public function user(){
		return $this->belongsTo('App\User');
	}

	/**
	 * @return boolean
	 */
	public function company(){
		return $this->belongsTo('App\Company');
	}

	public function amenity(){
		return $this->belongsToMany('App\Amenity');
	}
}
