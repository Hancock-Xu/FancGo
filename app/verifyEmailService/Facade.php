<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/4/16
 * Time: 15:06
 */

namespace verifyEmailService;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
	protected static function getFacadeAccessor()
	{
		return 'verifyEmail';
	}
}