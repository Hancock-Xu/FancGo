<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 22:53
 */

namespace App\VerifyEmailService;

use App\Job;
use Closure;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Mail\Mailer as MailerContract;
use Illuminate\Mail\Message;
use App\VerifyEmailService\Protocol\VerifyEmail as verifyEmailContract;
use Illuminate\Support\Facades\Mail;

class VerifyBroker implements verifyEmailContract
{
	protected $tokens;

	protected $users;

	protected $mailer;
	
	public $baseURL;

	protected $emailView;

	protected $applyJobEmailView;

	public function __construct(
		TokenRepository $tokenRepository,
		UserProvider $user,
		MailerContract $mailer,
		$baseURL,
		$emailView,
		$applyJobEmailView
	)
	{
		$this->tokens = $tokenRepository;
		$this->users = $user;
		$this->mailer = $mailer;
		$this->baseURL = $baseURL;
		$this->emailView = $emailView;
		$this->applyJobEmailView = $applyJobEmailView;
	}

	public function sendVerifyEmail($email, array $credentials = null, Closure $callback = null)
	{
		$token = $this->tokens->create($email);
		$credentials['token'] = $token;

		$validateLink = \URL::action($this->baseURL, $credentials);
		
		$this->mailer->send($this->emailView, ['validateLink'=>$validateLink], function (Message $m) use ($callback, $email){
			
			$m->to($email)->subject('A candidate has applied for your position');;
			
			if (!is_null($callback)){
				call_user_func($callback, $m);
			}
		});
		
		return static::VERIFY_EMAIL_SENT;
	}

	public function sendJobApplyEmail(Job $job, Closure $callback = null)
	{
		$user = \Auth::getUser();
		$resume = $user->resume_url;

		$this->mailer->send($this->applyJobEmailView, ['job'=>$job, 'user'=>$user], function($message) use ($callback){
			if (!is_null($callback)){
				call_user_func($callback, $message);
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