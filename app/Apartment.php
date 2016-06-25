<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Apartment
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string $description
 * @property string $rent_type
 * @property integer $bedrooms
 * @property integer $bathrooms
 * @property integer $living_rooms
 * @property integer $size
 * @property string $location/district
 * @property string $nearest_mtr_station
 * @property string $condition
 * @property integer $price
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereRentType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereBedrooms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereBathrooms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereLivingRooms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereLocation/district($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereNearestMtrStation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereCondition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment wherePrice($value)
 * @property integer $user_id
 * @property integer $company_id
 * @property string $published_at
 * @property-read \App\User $user
 * @property-read \App\Company $company
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment whereCompanyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Apartment wherePublishedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Amenity[] $amenity
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
