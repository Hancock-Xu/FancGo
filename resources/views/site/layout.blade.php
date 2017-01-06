<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="_token" content="{!! csrf_token() !!}"/>

	<meta name="keywords" content="招聘外国人,招聘老外,外籍人才,招聘外籍人才,外籍人才求职,招聘外教,国际人才,上海外国人,北京外国人,深圳外国人,广州外国人,外国人就业,外籍人才招聘网站">

	<meta name="keywords" content="find Job in China,Working in China,find job in Shenzhen, find job in shanghai, find job in beijing, find job in china, find job in Guangzhou">

	<meta name="description" content="JobLeadChina 是一家专业的外籍人才招聘平台。企业能快速通过平台，发布、更新招聘信息，与求职者直接沟通。同时，平台上所有发布职位企业均是通过认证企业，大大提高外籍人才就业安全性。JobLeadChina is a recruitment platform in connecting job opportunities in China with foreign talents.">

	<meta name="author" content="JobLeadChina">

	<meta name="robots" content="index,follow,noodp"/>
	<meta name="googlebot" content="index,follow,noodp" />
	<meta name="baiduspider" content="index,follow,noodp" />
	<meta name="theme-color" content="#694c9c"/>
	<meta name="subject" content="专业的外籍人才招聘网站,Post Job For Free"/>

	<meta name="baidu-site-verification" content="MMDWlmfM47" />
	<meta name="google-site-verification" content="TM68wCUPycoY1QY9IlBg-xcqUkcHo7PK4EqKdZOmMMs" />
	<meta name="baidu-site-verification" content="hQp6j4gwOh" />

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
	<link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

	<title>JobLeadChina @yield('page_title') | Find Job in China | 专业的外籍人才招聘网站, 外籍人才猎头</title>

	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
	<!-- polyfiller file to detect and load polyfills -->
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>

	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
	</script>

	<script>
		(function(){
			var bp = document.createElement('script');
			var curProtocol = window.location.protocol.split(':')[0];
			if (curProtocol === 'https'){
				bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
			}
			else{
				bp.src = 'http://push.zhanzhang.baidu.com/push.js';
			}
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(bp, s);
		})();
	</script>

	<script>
		(function(){
			var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?6e3adcd0c35a8698d52bfaf5bd972a79":"https://jspassport.ssl.qhimg.com/11.0.1.js?6e3adcd0c35a8698d52bfaf5bd972a79";
			document.write('<script src="' + src + '" id="sozz"><\/script>');
		})();
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

@include('site.footer')

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
{{--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

@yield('scripts')

</body>
</html>