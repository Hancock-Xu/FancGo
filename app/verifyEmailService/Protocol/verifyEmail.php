<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/3/16
 * Time: 00:55
 */

namespace VerifyEmailService\Protocol;

use Closure;

interface VerifyEmail
{
	const VERIFY_EMAIL_SENT = 'verify.email.sent';
	
	const VERIFY_SUCCEED = 'succeed';
	
	const VERIFY_FAILED = 'failed';
	
	public function sendVerifyEmail($email, Closure $callback = null);

	public function verifyEmail($email, $token, Closure $callback = null);
}