<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 22:53
 */

namespace App\VerifyEmailService;

use App\Job;
use App\User;
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

	public $replayJobApplyInterestedBaseURL;

	public $replayJobApplyNotInterestedBaseURL;

	public $interestedInApplicantView;

	public $notInterestedInApplicantView;

	protected $promote_to_company_email_view;

	protected $promote_to_user_email_view;

	public function __construct(
		TokenRepository $tokenRepository,
		UserProvider $user,
		MailerContract $mailer,
		$replayJobApplyInterestedBaseURL,
		$replayJobApplyNotInterestedBaseURL,
		$baseURL,
		$emailView,
		$applyJobEmailView,
		$promote_to_company_email_view,
		$promote_to_user_email_view,
		$interested_In_Applicant_View,
		$not_interested_In_Applicant_View
	)
	{
		$this->tokens = $tokenRepository;
		$this->users = $user;
		$this->mailer = $mailer;
		$this->replayJobApplyInterestedBaseURL = $replayJobApplyInterestedBaseURL;
		$this->replayJobApplyNotInterestedBaseURL = $replayJobApplyNotInterestedBaseURL;
		$this->baseURL = $baseURL;
		$this->emailView = $emailView;
		$this->applyJobEmailView = $applyJobEmailView;
		$this->promote_to_company_email_view = $promote_to_company_email_view;
		$this->promote_to_user_email_view = $promote_to_user_email_view;
		$this->interestedInApplicantView = $interested_In_Applicant_View;
		$this->notInterestedInApplicantView = $not_interested_In_Applicant_View;
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
		
		return static::EMAIL_SENT;
	}

	public function sendJobApplyEmail(Job $job, Closure $callback = null)
	{
		$user = \Auth::getUser();
		$resume = $user->resume_url;

		$interestedLink = \URL::action($this->replayJobApplyInterestedBaseURL, ['user'=>$user->id, 'job'=>$job->id]);

		$notInterestedLink = \URL::action($this->replayJobApplyNotInterestedBaseURL, ['user'=>$user->id, 'job'=>$job->id]);

		$this->mailer->send($this->applyJobEmailView, ['job'=>$job, 'user'=>$user, 'interestedLink'=>$interestedLink, 'notInterestedLink'=>$notInterestedLink], function($message) use ($callback){
			if (!is_null($callback)){
				call_user_func($callback, $message);
			}
		});

		return static::SEND_SUCCEED;
	}

	public function interestedInApplicant(array $parameter, Closure $callback = null)
	{
		$this->mailer->send($this->interestedInApplicantView, $parameter, function (Message $message) use ($callback){
			if (!is_null($callback)){
				call_user_func($callback, $message);
			}
		});

		return static::SEND_SUCCEED;
	}


	public function notInterestedInApplicant(array $parameter, Closure $callback = null)
	{
		$this->mailer->send($this->notInterestedInApplicantView, $parameter, function (Message $message) use ($callback){
			if (!is_null($callback)){
				call_user_func($callback, $message);
			}
		});

		return static::SEND_SUCCEED;
	}
	
	public function sendCompanyPromoteEmail($email, Closure $callback = null)
	{
		$this->mailer->send($this->promote_to_company_email_view, [], function (Message $message) use ($callback, $email){
			$message->to($email)->subject('JobLeadChina Introduction');
			if (!is_null($callback)){
				call_user_func($callback, $message);
			}
		});
		return static::SEND_SUCCEED;
	}

	public function sendUserPromoteEmail($email, Closure $callback = null)
	{
		$this->mailer->send($this->promote_to_user_email_view, [], function (Message $message) use ($callback, $email){
			$message->to($email)->subject('JobLeadChina Introduction');
			if (!is_null($callback)){
				call_user_func($callback, $message);
			}
		});
		return static::SEND_SUCCEED;
	}
	
	public function verifyEmail($token)
	{
		if ($this->tokens->exists($token)){
			$this->tokens->delete($token);
			return static::SEND_SUCCEED;
		}else{
			return static::SEND_FAILED;
		}

	}


}