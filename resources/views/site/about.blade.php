@extends('site.layout')

@section('title')
	About
@stop

@section('testSideBar')
	@parent
	this is the second side bar
@stop

@section('content')

	<div class="moreInformation">
		<div class="information-intro">
			<h2>About JobLeadChina</h2>
			<div class="information-intro-ch">
				<p>JobLeadChina 是一家专业的外籍人才招聘平台。企业能快速通过平台，发布、更新招聘信息，与求职者直接沟通。同时，平台上所有发布职位企业均是通过认证企业，大大提高外籍人才就业安全性。</p>
				<div class="information-intro-ch-HR">
					<h4>人事外包服务</h4>
					<p>此外，为帮助企业能更高效招聘到中高端外籍人才，我们提供一站式招聘解决方案，从分析企业真实需求，评估项目可行性，到进行人才搜索、筛选、背景调查，从初试、客户面试，到确定候选人，候选人入职及试用跟进。通过完整的定制化的方案，帮助企业在最快的时间内找到最合适的人才。</p>
				</div>
				<div class="information-intro-ch-rent">
					<h4>租房和工作签证<span>（目前仅限深圳本地）</span></h4>
					<p>同时，为解决外籍人才入职的签证问题和租房问题，我公司提供办理工作签证服务以及帮助外籍人才租房服务。（详情可参考以下详解）</p>
				</div>
			</div>
			<hr/>
			<div class="information-intro-en">
				<h3>A Set of Job Solution for Enterprises and Foreign Talents</h3>

				<p>JobLeadChina is a recruitment platform in connecting job opportunities in China with foreign talents. Through JobLeadChina, enterprises can post jobs, evaluate resumes,  communicate with candidates directly. All things become easy.</p>

				<p>As a proffesional recuriment service provider, all the enterprises in our platform are verified, so foreigners can feel free to apply job you wanted.</p>
				<div class="head-hunter">
					<h4>Head Hunter Service</h4>
					<h5>Together, we can make better</h5>

					<p>In order to help enterprise find middle and senior manager(foreign talents) more efficicently and make smarter decision,  We've designed an integrated solution,  tailor made for your company to search the most suitable candidate who can meet all your job requirements.</p>

					<p>We work with you throughout the process to define the talents, skills, knowledge and abilities of top performers and manage the process for you from start to finish. </p>
				</div>
			</div>
		</div>
		<div class="information-pic">
			<img class="information-picList " src="images/intro-01.png" alt="服务项目">
			<img class="information-picList " src="images/intro-02.png" alt="人事外包流程">
			<img class="information-picList " src="images/intro-03.png" alt="每周人才推荐如何产生">
			{{--<img class="information-picList " src="images/intro-04.png" alt="人才评估报告">--}}
			<img class="information-picList " src="images/intro-05.png" alt="租房">
			<img class="information-picList " src="images/intro-06.png" alt="工作签证">
		</div>
	</div>

@stop
