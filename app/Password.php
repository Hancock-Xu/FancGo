<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Password
 *
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @method static \Illuminate\Database\Query\Builder|\App\Password whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Password whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Password whereCreatedAt($value)
 * @mixin \Eloquent
 */
class Password extends Model
{
    //
}
