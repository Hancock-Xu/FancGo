<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Auth;
use Mockery\Matcher\Closure;
use App\VerifyEmailService\VerifyEmail;

trait EmailVerifier
{

	public $VALIDATE_LINK_SENT = 'validate_link_sent';

	public $INVALID_COMPANY = 'invalid_company';
	
	/**
	 * @var string 验证邮件视图
	 */
	public $emailView = 'Company.emailView';

	/**
	 * @var string 邮箱验证邮件主题
	 */
	public $subject = 'Company email verify';

	/**
	 * @var string 填写邮箱验证页面
	 */
	public $linkRequestView = 'Company.link_request_form';
	
	/**
	 * 如果邮箱和company的注册邮箱一致则发送验证邮件,否则,提示邮箱后缀名不符
	 * @param Request $request
	 * @param $id company id
	 * @return $this|\Symfony\Component\HttpFoundation\Response
	 */
	public function sendVerifyRequestEmail(Request $request)
	{
		$validator = \Validator::make($request->all(), [
			'email' => 'required|email'
		]);

		$verifyEmail = $request->input('email');

		if ($request->input('id')) {

			$company = Company::findOrFail($request->input('id'));

			if (explode('@', $verifyEmail)[1] == explode('@', $company->company_email)[1]) {

				return $this->sendValidateLink($verifyEmail, ['company_id'=>$request->input('id')]);

			} else {

				/*
				 * 返回错误,邮箱域名错误,请用公司企业邮箱
				 */

				return $validator->errors()->add('email_domain_error', 'Company email domain not match');

			}

		} else {

			return $this->sendValidateLink($verifyEmail);


		}
	}

	public function sendValidateLink($verifyEmail, array $credentials = null)
	{
		$response = VerifyEmail::broker()->sendVerifyEmail($verifyEmail, $credentials, function (Message $message){
			$message->subject('Verify business email');
		});

		switch ($response) {

			case VerifyEmail::VERIFY_EMAIL_SENT:
				return $this->getSendResetLinkEmailSuccessResponse();
			default:
				return $this->getSendResetLinkEmailFailureResponse();
		}

	}


	public function getVerifyRequestEmail($token, $id = null)
	{
		$response = VerifyEmail::broker()->verifyEmail($token);
		$user = Auth::getUser();

		if ($response == VerifyEmail::VERIFY_SUCCEED){
			
			if ($id){
				
				$company = Company::findOrFail($id);

				return view('Company.edit', ['company' => $company]);	
			
			}else{
				
				return view('Company.create_company', ['user'=>$user]);
				
			}

			

		}else{

			return view('Company.verify_business_email_failed');

		}

	}

	public function getSendResetLinkEmailSuccessResponse()
	{
		/**
		 * 返回验证邮件发送成功之后的提示视图
		 */
		return view('Company.succeed_send_email');
	}

	public function getSendResetLinkEmailFailureResponse()
	{
		/**
		 * 返回验证邮件发送失败的提示视图
		 */
		return view('Company.failed_send_email');
	}
	
}