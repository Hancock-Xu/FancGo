<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Auth;

trait VerifyEditCompanyQualifications
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
	 * 当需要返回link_request_form视图的时候,应把company的id作为隐含列值
	 * @param $id
	 * @return mixed
	 */
	public function editPermission($id)
	{
		$company = Company::findOrFail($id);
		if ($company->user_id == Auth::getUser()->id) {
			return view('Company.edit', ['company' => $company]);
		}else{
			/**
			 * 把company id作为隐含form值返回
			 */
			return view('Company.link_request_form', ['company' => $company]);
		}
	}

	/**
	 * 如果邮箱和company的注册邮箱一致则发送验证邮件,否则,提示邮箱后缀名不符
	 * @param Request $request
	 * @param $id company id
	 * @return $this|\Symfony\Component\HttpFoundation\Response
	 */
	public function verifyEditRequestEmail(Request $request)
	{
		$company = Company::findOrFail($request->input('id'));
		$verifyEmail = $request->input('email');

		$validator = \Validator::make($request->all(), [
			'email' => 'required|email'
		]);

		if (explode('@', $verifyEmail) == explode('@', $company->email)){

			$response = $this->sendValidateLink($request->only('email'), $company);

			switch ($response) {
				case $this->VALIDATE_LINK_SENT:
					return $this->getSendResetLinkEmailSuccessResponse($response);
				case \Password::INVALID_USER:
				default:
					return $this->getSendResetLinkEmailFailureResponse($response);
			}

		}else{

			/*
			 * 返回错误,邮箱域名错误,请用公司企业邮箱
			 */

			return $validator->errors()->add('email_domain_error', 'Company email domain not match');

		}

	}

	public function sendValidateLink(array $credentials, $company)
	{
		if (!$company){
			return $this->INVALID_COMPANY;
		}

		$validateLink = action('Admin\CompanyController@getValidatedEditRequestEmail',[$company->id]);
		$applyEmail = $credentials['email'];

		$this->emailSender($applyEmail, $validateLink);

		return $this->VALIDATE_LINK_SENT;

    }


	public function emailSender($applyEmail, $validateLink)
	{

		$view = $this->emailView;

		\Mail::send($view, ['validateLink' => $validateLink], function (Message $message) use ($applyEmail){
			$message->to($applyEmail);
			$message->subject('Company email validate');
		});

	}


	public function getValidatedEditRequestEmail($id)
	{
		$company = Company::findOrFail($id);
		return view('Company.edit', ['company' => $company]);
	}



	public function getSendResetLinkEmailSuccessResponse($response)
	{
		/**
		 * 返回验证邮件发送成功之后的提示视图
		 */
		return view('Company.succeed_send_email');
	}

	public function getSendResetLinkEmailFailureResponse($response)
	{
		/**
		 * 返回验证邮件发送失败的提示视图
		 */
		return view('Company.failed_send_email');
	}
	
}