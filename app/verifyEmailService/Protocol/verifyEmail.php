<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/3/16
 * Time: 00:55
 */

namespace verifyEmailService\Protocol;

use Closure;

interface verifyEmail
{
	public function sendVerifyEmail(array $credentials, Closure $callback = null);
}