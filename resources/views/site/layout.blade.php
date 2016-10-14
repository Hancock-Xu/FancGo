<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	{{--<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">--}}
	<meta name="keywords" content="JobLead China, Joblead, find Job in China, find Job in Shenzhen, Working in China, Life in China, Living in China, Work Visa in China">
	<meta name="keywords" content="招聘, 外国人, 招聘外国人, 招聘老外, 外籍人才, 英语, 外籍人才求职, 招聘外教, 国际人才, 上海外国人, 北京外国人, 深圳外国人, 广州外国人, 专门从事外国人外籍人才招聘的网站, 外国人找工作, http://www.jobleadchina.com">
	<meta name="keywords" content="find job in shenzhen, find job in shanghai, find job in beijing, find job in china, find job in guangzhou, find job in nanjing, find job in sichuan, find job in hangzhou, find job in guangxi, find jon in chengdu, hired foreigners, hired foreigner, hired American">
	<meta name="baidu-site-verification" content="MMDWlmfM47" />
	<meta name="description" content="JobLeadChina 是一家专业的外籍人才招聘平台。企业能快速通过平台，发布、更新招聘信息，与求职者直接沟通。同时，平台上所有发布职位企业均是通过认证企业，大大提高外籍人才就业安全性。">
	<meta name="description" content="JobLeadChina is a recruitment platform in connecting job opportunities in China with foreign talents. Through JobLeadChina, enterprises can post jobs, evaluate resumes, communicate with candidates directly. All things become easy.">

	<link rel="stylesheet" href="">
	<link rel="shortcut icon" type="image/x-icon">
	<link rel="icon" type="image/x-icon">
	<title>JobLeadChina |@yield('page_title')| Find job in China | 招聘外籍人才, 招聘外国人, 人事代理 </title>

	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
	<!-- polyfiller file to detect and load polyfills -->
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>


	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
	</script>

	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?c6c4b754d625a58bc03add45318067b6";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>

	{!! Html::style('css/app.css') !!}

	{!! Html::script('js/app.js') !!}
	{!! Html::script('js/search_bar.js') !!}
	{!! Html::script('js/previewUploadFile.js') !!}
	{!! Html::script('js/upload_resume.js') !!}


</head>

<body>

<div class="content_container">

	<div class="navbar_container">
		@include('site.navbar')
	</div>

	<div class="jb_content">
		@yield('content')
	</div>

</div>

<div id="footer">
	<div class="container" style="display: flex; margin-top: 20px">
		<div class="contact_information" style="flex: 1;">
			<h3>JobLeadChina</h3>
			<p>A Set of Job Solution for Enterprises and Foreign Talents</p>
			<span class="more-about"><a  href="{{action('Admin\BasicSiteInfoController@about')}}">More about us</a></span>
			<span class="contact-email"><a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail">TEL: 0755-61597364 / Email:&nbsp;service@jobleadchina.com</a> We will reply you in one day</span>
		</div>
		
		<div class="wechat_qrcode" style="width: 180px; display: block">
			<img src="http://www.jobleadchina.com/uploads/wechat_qrcode.jpg" alt="" style="width: 100px">
			<label>Join our wechat group</label>
		</div>

	</div>
</div>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
{{--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

@yield('scripts')

</body>
</html>