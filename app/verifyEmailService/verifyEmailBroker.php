<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 22:53
 */

namespace verifyEmailService;

use Closure;
use Illuminate\Support\Arr;
use UnexpectedValueException;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Contracts\Mail\Mailer as MailerContract;

class verifyEmailBroker
{
	protected $tokens;

	protected $users;

	protected $mailer;

	protected $emailView;

	public function __construct(
		TokenRepositoryInterface $tokenRepository,
		UserProvider $user,
		MailerContract $mailer,
		$emailView
	)
	{
		$this->tokens = $tokenRepository;
		$this->users = $user;
		$this->mailer = $mailer;
		$this->emailView = $emailView;
	}

	public function sentVerifyLink(array $credential, Closure $callback = null)
	{
		
	}
}