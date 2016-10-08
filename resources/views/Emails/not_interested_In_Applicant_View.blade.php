<!DOCTYPE html>
<html>
<html lang="zh-CN">
<head>

</head>
<body>
<table style="width:100%; background-color:#f5f5f5; font-family: Helvetica, Serif,'Times New Roman';" border="0" ; cellspacing="0"; cellpadding="0"; >
	<tbody>
	<tr>
		<td style="padding: 20px;">
			<table style="width:600px; margin:0 auto;background-color:#fff; color: #666;" border="0" cellspacing="0" cellpadding="0";>
				<tbody>

				<tr style="background-color:#f5f5f5;">
					<td valign="top" style="border-bottom: 20px solid #694c9c; padding-top: 10px; padding-bottom: 10px;">
						<a href="http://www.jobleadchina.com" target="_blank" style="text-decoration: none; font-size: 28px; color: #666">
							JobLeadChina
						</a>
					</td>
				</tr>
				<tr >
					<td valign="top">
						<div style="margin: 30px 30px 0;">
							<h5 style="font-size: 16px;">Apply Position: <a href="{{ action('Admin\JobController@show',[$job->id]) }}" style="text-decoration: underline; color: #694c9c;">{{$job->job_title}}</a></h5>
							<h5 style="font-size: 16px;">Apply Company: <a href="{{ action('Admin\JobController@show',[$job->id]) }}" style="text-decoration: underline; color: #694c9c;">{{$company->company_name}}</a></h5>
							<h5 style="font-size: 16px;">Result Feedback: Mismatch</h5>
						</div>
					</td>
				</tr>
				<tr>
					<td  style="padding-left: 30px; padding-right: 30px;">
						<hr/>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 30px; padding-right: 30px;">
						<div>
							<p>Hello, {{$user->last_name}}</p>
							<p style="line-height: 20px;">Thank you for your interest in {{$company->company_name}} position and resume received. After reading your resume carefully, we are very sorry to inform you that there is mismatch between your resume and the position, so you can not attend the interview.</p>

							<p>Thanks again for your trust and support. And we truly wish you would find a suitable job sooner.</p>
						</div>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 30px; padding-right: 30px;">
						<hr/>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 30px; padding-right: 30px; padding-bottom: 30px;">
						<div style=" color: #999; font-size: 14px;">This email is sent by JobLeadChina, <span style="color: red;">Please do not reply directly</span>.</div>
						<div style="color: #999; font-size:14px;">If you need further assistance, please contact us.</div>
						<a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail" style="font-size:14px; line-height: 8px;">Email:&nbsp;service@jobleadchina.com</a>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>



</body>
</html>
