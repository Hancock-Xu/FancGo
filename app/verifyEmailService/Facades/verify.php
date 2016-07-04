<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/4/16
 * Time: 15:06
 */

namespace VerifyEmailService;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Verify extends LaravelFacade
{
	protected static function getFacadeAccessor()
	{
		return 'verifyEmail';
	}
}