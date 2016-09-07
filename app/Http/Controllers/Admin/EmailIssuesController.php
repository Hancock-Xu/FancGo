<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Mail\Message;
use Validator;
use App\VerifyEmailService\VerifyEmail;

class EmailIssuesController extends Controller
{

    public function emailControllPanel()
    {
    	return view('Emails.emailControllPanel');
    }


    public function companyPromote(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'company_email'=>'required|email',
	    ]);
	    if ($validator->fails()) {
		    return redirect()->back()
			    ->withErrors($validator)
			    ->withInput();
	    }

	    $input = $request->all();
	    $email = $input['company_email'];

	    return VerifyEmail::broker()->sendCompanyPromoteEmail($email);

    }

	public function userPromote(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'user_email'=>'required|email',
		]);
		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}

		$input = $request->all();
		$email = $input['user_email'];

		return VerifyEmail::broker()->sendUserPromoteEmail($email);

	}

}
