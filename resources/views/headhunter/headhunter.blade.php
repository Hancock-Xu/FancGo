@extends('site.layout')

@section('title')
	Headhunter Service
@stop

@section('content')

	<div class="welcome_page_container">
        <div class="slogan_container" id="test_1">
            <p class="slogan_p">致力于为客户引进专业领域外籍人才!</p>
        </div>
        <div class="sub_header_container">
            <p class="sub_head_p">Make recruiting foreign talents more easier</p>
        </div>
	</div>

	<div class="blogThumbnailsCollection">

		<div class="blogThumbnailsCollectionContainer">

			<div class="blogThumbnailContainer">
				<div class="blogThumbnail">
					<h3 class="blogThumbnailTitle color-line">
						猎头在人才招聘中的作用
					</h3>
					<figure class="blogFigure">
						<img class="blogFigureImg" src="http://www.jobleadchina.com/images/headhunter/people_comes_and_go.jpg" alt="">
					</figure>
					<p class="blogIntroduction">
						猎头熟悉招聘和人才引进流程的各个环节。和猎头合作，不仅拓宽了招聘渠道，保证人才供应。还能够大大提升招聘效率，有效降低了企业的招聘成本。
					</p>

					<input type="button" class="blogButton" value="Learn More" onclick="location.href='{{action('Admin\BasicSiteInfoController@recruitmentGuidanceBlog1')}}'">
				</div>
			</div>

            <div class="blogThumbnailContainer">
				<div class="blogThumbnail">
					<h3 class="blogThumbnailTitle color-line">
						招聘外籍人才中需要注意的问题
					</h3>
					<figure class="blogFigure">
						<img class="blogFigureImg" src="http://www.jobleadchina.com/images/headhunter/1.jpg" alt="">
					</figure>
					<ul class="blogIntroduction" style="list-style: none">
						<li>1、明确招聘需求</li>
						<li>2、预留充足的招聘时间</li>
						<li>3、在引进外籍人才时请确保该人才能顺利办理工作签证</li>
						<li>4、提供有竞争力的工作时长和假期</li>
					</ul>
					{{--<p class="blogIntroduction"></p>--}}
					<input type="button" class="blogButton" value="Learn More" onclick="location.href='{{action('Admin\BasicSiteInfoController@recruitmentGuidanceBlog2')}}'">
				</div>
            </div>

            <div class="blogThumbnailContainer">

                <div class="blogThumbnail">
                    <h3 class="blogThumbnailTitle color-line">
                        在华外籍人才就业概况
                    </h3>
                    <figure class="blogFigure">
                        <img class="blogFigureImg" src="http://www.jobleadchina.com/images/headhunter/5.jpg" alt="">
                    </figure>
                    {{--<p class="blogIntroduction">--}}
                    {{--</p>--}}
					<ul class="blogIntroduction" style="list-style: none">
						<li>
							1、在华外籍人才各个国家占比
						</li>
						<li>
							2、在华外籍人才性别和年龄分布
						</li>
						<li>
							3、在华外籍人才就业行业占比
						</li>
						<li>
							4、在华外籍人才流动率情况
						</li>
					</ul>
					<input type="button" class="blogButton" value="Learn More" onclick="location.href='{{action('Admin\BasicSiteInfoController@recruitmentGuidanceBlog3')}}'">
                </div>

            </div>

		</div>

	</div>

	<div class="features">
		<p class="why-choose-us">海外招聘遇到这些难题？</p>
		<ul class="features-ul">

			<li class="feature-channel">
				<div class="feature-title-container">
					<div class="feature-title">
						<p class="feature">海外招聘如何选择招聘渠道？</p>
						<span>拥有自己的招聘平台，丰富的简历和人才储备。并根据不同行业建立多种招聘渠道</span>
					</div>
				</div>
			</li>

			<li class="feature-salary">
				<div class="feature-title-container">
					<div class="feature-title">
						<p class="feature">如何为外籍岗位定薪？</p>
						<span>提供岗位定薪咨询服务，我们将根据海外行业薪资水平、我们的项目经验和储备人才薪资水平，并结合岗位要求，给您一个合理的薪资参考范围。</span>
					</div>
				</div>

			</li>
			<li class="feature-visa">
				<div class="feature-title-container">
					<div class="feature-title">
						<p class="feature">如何为外籍员工办理工作签证？</p>
						<span>提供候选人办理工作签证咨询服务，帮助您更快更好的为外籍员工办理工作签证。</span>
					</div>
				</div>
			</li>
		</ul>
		<div class="clear">

		</div>
	</div>

	<div class="customer-feedback-container">
		<div class="customer-feedback-wrap">

			<h2 class="customer-feedback"><span>“ </span>So far it has been a great work experience, a lot of fun and my co-workers are very supportive. I am very happy with my move. Thank you for finding me this job, I think I’m fitting in pretty well, Thank you very much for your offer!
				<span> ”</span></h2>
			<p class="customer">————某高端外籍人才入职反馈</p>

		</div>

	</div>

	<div class="experience">

		<p class="our-experience">项目案例</p>

		<div class="experience-container">

			<div class="project-experience">

				<div class="experience-title">
					<p class="experience-industry-area">建筑工程领域</p>
				</div>

				<div class="customer-introduce">某知名景观建筑公司
					（建筑景观100强）
				</div>

				<div class="experience-detail">
					<p>在该招聘中，我们2周内推荐面试11位候选人，最终录用2名（资深景观主创设计师、资深景观深化设计师），完成全部招聘指标。</p>
					<p>其中一名候选人在办签证期间，恰逢中国签证政策调整以及本国海外就业政策变化。数月以来，我们一直跟进协调，帮助处理签证出现的各种意外，最终候选人顺利入职，保障客户利益。</p>
				</div>

			</div>

			<div class="project-experience">
				<div class="experience-title">
					<p class="experience-industry-area">制造业领域</p>
				</div>

				<div class="customer-introduce">某重型能源装备制造商
					（世界500强）
				</div>

				<div class="experience-detail">
					<p>该公司布局在海外筹建研发中心，该海外研发中心主要为国内研究所起到像老师一样的指导作用，因此招聘需求定位在行业顶尖的研发工程师。</p>
					<p>我们在接到招聘需求后，成立项目组，在3个月内，推荐了数十位候选人，最终成功为客户引进行业3位业内知名的研发工程师。保障研发中心顺利筹建。</p>
				</div>
			</div>

			<div class="project-experience">
				<div class="experience-title">
					<p class="experience-industry-area">互联网领域</p>
				</div>

				<div class="customer-introduce">某知名游戏公司
					（游戏行业全球前10）
				</div>

				<div class="experience-detail">
					<p>该公司近些年来一直布局面向海外市场的游戏研发和发行，同时也为了促进团队国际化。因此需要招聘各个职能的外籍人才。</p>
					<p>我们成功为该公司招聘到游戏开发，游戏美术（技美，原画，3D，UI 等），游戏策划，游戏运营，本地化等多名外籍人才。其中，游戏美术有多名外籍人才以专家级别待遇从海外引进。</p>
				</div>
			</div>

		</div>

	</div>

	<div class="customer-feedback-container">
		<div class="customer-feedback-wrap">

			<h2 class="customer-feedback"><span>“ </span>用一句话说就是高效，跟你们合作的三个多月你们就完成了招聘，保证了我们海外研发中心人才的及时到位。也给了我们很多该岗位上薪酬水平、福利等专业的咨询，很感谢你们。<span> ”</span></h2>
			<p class="customer">————国内某知名重型能源装备制造公司HR</p>

		</div>

	</div>

	<div class="advantages">
		<p class="why-choose-us">为什么选择我们</p>
		<div class="advantages-wrap">
			<ul class="">
						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">行业细分，定位清晰</h1>
							</div>

							<p class="advantage-detail">专注于专业领域外籍人才招聘，解决企业引进外籍人才招聘痛点</p>
						</li>

						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">信誉优良</h1>
							</div>
							<p class="advantage-detail">公司90%的业务都来自于长期合作及客户推荐，我们深耕每一个项目，和客户保持长期的合作关系</p>
						</li>
						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">优秀的顾问团队</h1>
							</div>
							<p class="advantage-detail">顾问团队英语优秀，和外籍候选人沟通顺畅。丰富的从业经验，善于把握岗位需求，对候选人质量精益求精</p>
						</li>
						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">善于攻坚难度大的岗位</h1>
							</div>
							<p class="advantage-detail">我们采用高底薪低提成的激励机制，顾问团队专业稳定。能自始自终长期跟进完成招聘项目</p>
						</li>
						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">提供优质的附加服务</h1>
							</div>
							<p class="advantage-detail">我们为企业提供薪酬谈判和行业薪酬报告，帮助企业制定出合理的薪资水平</p>
						</li>
						<li class="advantage">
							<div class="advantage-title-wrap">
								<h1 class="advantage-title">提供长达半年的保证期</h1>
							</div>
							<p class="advantage-detail">为企业提供长达6个月的保证期，候选人保证期内离职，我们免费提供候补候选人</p>
						</li>
					</ul>
		</div>
	</div>

	<div class="customer-feedback-container">
		<div class="customer-feedback-wrap">

			<h2 class="customer-feedback"><span>“ </span>在我们用过的猎头中，很多都是面对难度大的岗位推了三四份简历就没有下文了。你们对岗位需求能够短时间把握，长期坚持，推荐的人也越来越适合我们。就沟通方式来说我更喜欢你们松紧有度的方式。海外招聘的猎头中，你们是非常给力的！<span> ”</span></h2>
			<p class="customer">————国内某知名互联网游戏公司HR</p>

		</div>

	</div>

	<div class="partnersLogoCollection">
		{{--<p class="why-choose-us">合作企业</p>--}}

		<p class="why-choose-us">合作企业</p>

		<div class="partnersLogoCollectionContainer">

			<div class="partnersLogoGroup">

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/shunfeng.jpg" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/sany.png" alt="">

					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/netease_games.png" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/opera.jpg" alt="">
					</figure>
				</div>


				{{--<div class="partnerLogo">--}}
					{{--<figure class="partnerLogoFigure">--}}
						{{--<img class="partnerLogoFigureImg" src="/images/customers/tencent.jpg" alt="">--}}
					{{--</figure>--}}
				{{--</div>--}}

			</div>


			<div class="partnersLogoGroup">

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/zhongjia.png" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/pactera.jpg" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/zhongguoshiyou.png" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img class="partnerLogoFigureImg" src="/images/customers/celec.jpg" alt="">
					</figure>
				</div>

				<div class="partnerLogo">
					<figure class="partnerLogoFigure">
						<img style="height: 50px;" class="partnerLogoFigureImg" src="/images/customers/hna.png" alt="">
					</figure>
				</div>

				{{--<div class="partnerLogo">--}}
				{{--<figure class="partnerLogoFigure">--}}
				{{--<img class="partnerLogoFigureImg" src="/images/customers/360.jpg" alt="">--}}
				{{--</figure>--}}
				{{--</div>--}}


			</div>


		</div>

	</div>

@stop
