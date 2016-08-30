<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- saved from url=(0014)about:internet -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=yes">
	<meta name="keyword" content="JobLead China, Joblead, Job in China, Job in Shenzhen, Working in China, Life in China, Living in China, Work Visa in China">
	<meta name="baidu-site-verification" content="MMDWlmfM47" />
	<meta name="description" content="JobLead China provide a set of job solution for enterises and forein talents.">
	<link rel="stylesheet" href="">
	<link rel="shortcut icon" type="image/x-icon">
	<link rel="icon" type="image/x-icon">
	<title>JobLeadChina | Find job in China</title>

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
	{!! Html::script('js/searchbar.js') !!}
	{!! Html::script('js/previewUploadFile.js') !!}

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
	<div class="container ">
		<h3>JobLeadChina</h3>
		<p>A Set of Job Solution for Enterprises and Foreign Talents</p>
		<span class="more-about"><a  href="{{action('Admin\BasicSiteInfoController@about')}}">More about us</a></span>
		<span class="contact-email"><a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail">TEL: 0755-61597364 / Email:&nbsp;service@jobleadchina.com</a> We will replay you in one day</span>
	</div>
</div>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('scripts')

</body>
</html>