<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/3/16
 * Time: 00:55
 */

namespace App\VerifyEmailService\Protocol;

use Closure;

interface VerifyEmail
{
	const EMAIL_SENT = 'verify.email.sent';
	
	const SEND_SUCCEED = 'succeed';
	
	const SEND_FAILED = 'failed';
	
	public function sendVerifyEmail($email, array $credentials = null, Closure $callback = null);

	public function verifyEmail($token);
}