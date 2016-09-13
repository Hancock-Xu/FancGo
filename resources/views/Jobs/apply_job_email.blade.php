<!DOCTYPE html>
<html>
<html lang="zh-CN">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="keyword" content="JobLeadChina, Joblead, Job in China, Job in Shenzhen, Working in China, Life in China, Living in China, Apartment in China, Apartment in Shenzhen, Work Visa in China">
	<meta name="description" content="JobLeadChina provide a set of job solution for enterises and forein talents.">
	<!--Link-->
	<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->

</head>
<body>
<div id="mailContainer" style="margin: 0 auto;width: 600px;overflow: hidden;color: #666;">
	<h2>JobLeadChina</h2>
	<div class="mailContentContainer" style="background-color: #fff;border-top: 20px solid #694c9c;padding: 20px;">
		<div class="mailContent-enterprise">
			<h4 class="mail-applyPostion">Apply Position:&nbsp;{{$job->job_title}}</h4>
			<hr/>
			<h4>Hello</h4>
			<p>A candidate has applied for your position on JobLeadChina! You can preview or download the resume in attachment directly.</p>
			<p>有一个应聘者在JobLeadChina申请了您的岗位! 您可以直接在附件中下载或者预览该简历。</p>
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
		<hr/>
		<div class="interest_button_area" style="display: flex">

			<div style="display: flex;background: #d0eeff;border: 1px solid #99d3f5;border-radius: 4px;padding: 4px 12px;overflow: hidden;text-indent: 0;line-height: 20px;width: 200px;min-height: 50px;font-size: 20px;margin: 20px">
				<a href="{{$interestedLink}}" style="text-decoration: none;color: #1e88c7;margin: 0 auto;justify-content: center;align-items: center;height: 20px;top: 50%;margin-top: 15px;">
					Interested
				</a>
			</div>


			<div style="display: flex;background: #d0eeff;border: 1px solid #99d3f5;border-radius: 4px;padding: 4px 12px;overflow: hidden;text-indent: 0;line-height: 20px;width: 200px;min-height: 50px;font-size: 20px;margin: 20px">

				<a href="{{$notInterestedLink}}" style="text-decoration: none;color: #c71e28;margin: 0 auto;justify-content: center;align-items: center;height: 20px;top: 50%;margin-top: 15px;">
					Not Interested
				</a>
			</div>
		</div>
		<div class="mail-furtherhelp">
			<h4>Tips: 如何刷新您的岗位?</h4>
			<p>发布工作以后, 您可以在个人profile下拉菜单中点击Edit Company&Position info页面中Update您的Position,这样可以将您的Position排在首位。</p>
			<h4>If you need further assistance, please contact us.</h4>
			<a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail">Email:&nbsp;service@jobleadchina.com</a>
		</div>


	</div>
</div>

</body>
</html>
