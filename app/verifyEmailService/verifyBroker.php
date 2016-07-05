<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 22:53
 */

namespace App\VerifyEmailService;

use Closure;;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Mail\Mailer as MailerContract;
use Illuminate\Mail\Message;
use App\VerifyEmailService\Protocol\VerifyEmail as verifyEmailContract;

class VerifyBroker implements verifyEmailContract
{
	protected $tokens;

	protected $users;

	protected $mailer;
	
	public $baseURL;

	protected $emailView;

	public function __construct(
		TokenRepository $tokenRepository,
		UserProvider $user,
		MailerContract $mailer,
		$baseURL,
		$emailView
	)
	{
		$this->tokens = $tokenRepository;
		$this->users = $user;
		$this->mailer = $mailer;
		$this->baseURL = $baseURL;
		$this->emailView = $emailView;
	}

	public function sendVerifyEmail($email, array $credentials = null, Closure $callback = null)
	{
		$token = $this->tokens->create($email);
		$credentials['token'] = $token;

		$validateLink = \URL::action($this->baseURL, $credentials);
		
		$this->mailer->send($this->emailView, ['validateLink'=>$validateLink], function (Message $m) use ($callback, $email){
			
			$m->to($email);
			
			if (!is_null($callback)){
				call_user_func($callback, $m);
			}
		});
		
		return static::VERIFY_EMAIL_SENT;

	}
	
	public function verifyEmail($token)
	{
		if ($this->tokens->exists($token)){
			$this->tokens->delete($token);
			return static::VERIFY_SUCCEED;
		}else{
			return static::VERIFY_FAILED;
		}

	}


}