<!DOCTYPE html>
<html>
<html lang="zh-CN">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="keyword" content="JobLead China, Joblead, Job in China, Job in Shenzhen, Working in China, Life in China, Living in China, Apartment in China, Apartment in Shenzhen, Work Visa in China">
	<meta name="description" content="JobLead China provide a set of job solution for enterises and forein talents.">
	<!--Link-->
	<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
</head>
<body>
<div id="mailContainer" style="margin: 0 auto;width: 600px;overflow: hidden;color: #666;">
	<h2>JobleadChina</h2>
	<div class="mailContentContainer" style="background-color: #fff;border-top: 20px solid #694c9c;padding: 20px;">
		<div class="mailContent-enterprise">
			<h4 class="mail-applyPostion">Apply Position:&nbsp;{{$job->job_title}}</h4>
			<hr/>
			<h4>Hello</h4>
			</br>
			<p>A candidate has applied for your position on JobleadChina! You can preview or download the resume in attachment directly.</p>
			<hr/>
			<table style="width: 600px; box-shadow: 1px 1px 5px #dedede;">
				<tbody>
				<caption style="font-size: 20px; margin:10px 0;">Candidate Profile</caption>
				<tr style="height: 40px; border-bottom: 1px solid #d5d5d5;">
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Name</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->first_name}} {{$user->last_name}}</td>
					<td style="width: 100px; background: #eee; padding-left: 10px;">Email</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->email}}</td>
				</tr>
				<tr style="height: 40px; border-bottom: 1px solid #d5d5d5;">
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Sex</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->sex}}</td>
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Phone</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->phone_number}}</td>
				</tr>
				<tr style="height: 40px; border-bottom: 1px solid #d5d5d5;">
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Nationality</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->nationality}}</td>
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Current Residence</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->current_residence}}</td>
				</tr>
				<tr style="height: 40px; border-bottom: 1px solid #d5d5d5;">
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Native Language</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->native_language}}</td>
					<td style="width: 100px; background: #eee; padding-left: 10px; ">Chinese Level</td>
					<td style="width: 100px; padding-left: 10px;">{{$user->chinese_level}}</td>
				</tr>

				</tbody>
			</table>
		</div>
		<div class="mail-furtherhelp">
			<h4>If you need further assistance, please contact us.</h4>
			<a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail">Email:&nbsp;service@jobleadchina.com</a>
		</div>
	</div>
</div>

</body>
</html>
