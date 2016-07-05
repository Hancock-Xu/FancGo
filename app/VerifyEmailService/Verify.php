<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/4/16
 * Time: 15:06
 */

namespace App\VerifyEmailService;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Verify extends LaravelFacade
{
	const VERIFY_EMAIL_SENT = 'verify.email.sent';

	const VERIFY_SUCCEED = 'succeed';

	const VERIFY_FAILED = 'failed';
	
	protected static function getFacadeAccessor()
	{
		return 'verifyEmail';
	}
}