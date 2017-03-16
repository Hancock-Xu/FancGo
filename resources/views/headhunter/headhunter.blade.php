@extends('site.layout')

@section('title')
	Headhunter Service
@stop

@section('content')

	<div>

		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				{{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				{{--<div class="item active">--}}
					{{--<img src="/images/intro-01.png" alt="First slide">--}}
					{{--<div class="jumbotron" style="background-color: #694c9c; width: 100%; height: 350px; margin-bottom: 0px">--}}
						{{--<h1 style="color: #fefefe;margin-left: 70px;">Post Job For Free !</h1>--}}
						{{--<p style="color: #fefefe;margin-left: 70px;width: 600px;padding-top: 40px;">Make recruiting foreign talents more easier</p>--}}
						{{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>--}}
					{{--</div>--}}
				{{--</div>--}}
				<div class="item active">
					{{--<img src="/images/intro-02.png" alt="Second slide">--}}
					<div class="jumbotron" style="background-image: url(http://localhost:8000/uploads/Partnership-UK-1.jpg); background-attachment: fixed;background-position: top; background-repeat: no-repeat; background-size: 100%; width: 100%; height: 400px; margin-bottom: 0;">
						{{--<h1 style="color: #fefefe;margin-left: 70px;">用世界的力量,助力企业成长</h1>--}}
						{{--<p style="color: #fefefe;margin-left: 70px;width: 600px;padding-top: 40px;">Make recruiting foreign talents more easier</p>--}}
						{{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>--}}
					</div>
				</div>
				<div class="item">
					{{--<img src="/images/intro-03.png" alt="Third slide">--}}
					<div class="jumbotron" style="background-image: url(http://localhost:8000/uploads/Aviation-UK-1.jpg); background-attachment:scroll;background-position: top;background-repeat:no-repeat; width: 100%; background-size: 100%; height: 400px; margin-bottom: 0px">
						<h1 style="color: #fefefe;margin-left: 70px;">Post Job For Free !</h1>
						<p style="color: #fefefe;margin-left: 70px;width: 600px;padding-top: 40px;">Make recruiting foreign talents more easier</p>
						{{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>--}}
					</div>
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


	</div>

	<div class="slogan">
		<h2 style="padding: 20px 20px; width: 500px; margin: 0 auto; color: #b5e3fe"> JobLeadChina 是最高效的外籍人才招聘猎头</h2>
	</div>

	<div class="partnersLogoCollection">

		{{--<h2 style="padding-top: 14px; padding-left:  14px; color: #5b6b7b; margin: 0px">合作商代表</h2>--}}

		<div class="partnersLogoCollectionContainer">
			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" src="/uploads/NetEaseGames.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" style="width: 50px;" src="/uploads/SANYZG.png" alt="">

				</figure>
			</div>
			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" src="/uploads/SFExpress.svg.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" src="/uploads/shclearing.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" style="width: 70px;" src="/uploads/TAETEA.jpg" alt="">
				</figure>
			</div>

			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" src="/uploads/CELEC.jpg" alt="">
				</figure>
			</div>

			<div class="partnerLogo">
				<figure class="partnerLogoFigure">
					<img class="partnerLogoFigureImg" src="/uploads/SANY.png" alt="">
				</figure>
			</div>
		</div>

	</div>

	<div class="experience">
		<div class="experienceContainer" style="background-image: url(http://localhost:8000/uploads/fengche.jpg);">
			<div class="specificExperience-sany">

				<div class="specificExperiencePrincipal">
					<h4 class="color-line ">项目负责人:</h4>

					<div class="principalBoard">

						<div class="principalAvatar">
							<figure class="avatar">
								<img class="avatarImg" src="uploads/hancock.jpg" title="Hancock" alt="avatar">
							</figure>

							<label class="principalName">Hancock</label>
						</div>

						<div class="company_basic_info">
							<ul class="company-info-content ">
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Industry</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxx</label>

										</div>
									</div>
								</li>

								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Founded</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Size</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>


								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Address</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxxxxx</label>

										</div>
									</div>


								</li>
							</ul>
						</div>

					</div>



				</div>
				<div class="specificExperience_desc">
					<h4 class="color-line ">项目详情:</h4>
					<h2>为三一重能筹建西班牙研发中心提供人才保障</h2>
					<p>三一重能计划在欧洲筹建研发院, 招聘欧洲顶尖的风机领域人才, 以吸收欧洲风电领域先进技术和经验。 研究院主要负责新产品研发、新技术探索并将和中国研究院在技术研发方面进行紧密合作。此时, 人才, 成了筹备研究院最重要的工作。</p>
					<p>
						三一重能找到了我们, 我们接到需求之后, 开始紧锣密鼓地成立招聘小组, 调查欧洲风电市场现状和人力资源情况, 开辟新的招聘渠道。最终, 周密的调查准备工作精准的划分出猎寻人群, 找到了准确的方向, 极大的提升了招聘效率。 我们推荐的第一位候选人即为最终录取候选人。
					</p>
				</div>
			</div>

		</div>

		<div class="experienceContainer" style="background-image: url(http://localhost:8000/uploads/shejitu.jpg);">
			<div class="specificExperience-celec">

				<div class="specificExperiencePrincipal">
					<h4 class="color-line ">项目负责人:</h4>

					<div class="principalBoard">

						<div class="principalAvatar">
							<figure class="avatar">
								<img class="avatarImg" src="uploads/ivy.jpg" title="Hancock" alt="avatar">
							</figure>

							<label class="principalName">Ivy</label>
						</div>

						<div class="company_basic_info">
							<ul class="company-info-content ">
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Industry</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxx</label>

										</div>
									</div>
								</li>

								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Founded</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Size</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>


								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Address</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxxxxx</label>

										</div>
									</div>


								</li>
							</ul>
						</div>

					</div>



				</div>
				<div class="specificExperience_desc">
					<h4 class="color-line ">项目详情:</h4>
					<h2>为三一重能筹建西班牙研发中心提供人才保障</h2>
					<p>三一重能计划在欧洲筹建研发院, 招聘欧洲顶尖的风机领域人才, 以吸收欧洲风电领域先进技术和经验。 研究院主要负责新产品研发、新技术探索并将和中国研究院在技术研发方面进行紧密合作。此时, 人才, 成了筹备研究院最重要的工作。</p>
					<p>
						三一重能找到了我们, 我们接到需求之后, 开始紧锣密鼓地成立招聘小组, 调查欧洲风电市场现状和人力资源情况, 开辟新的招聘渠道。最终, 周密的调查准备工作精准的划分出猎寻人群, 找到了准确的方向, 极大的提升了招聘效率。 我们推荐的第一位候选人即为最终录取候选人。
					</p>
				</div>
			</div>

		</div>

		<div class="experienceContainer" style="background-image: url(http://localhost:8000/uploads/shejitu.jpg);">
			<div class="specificExperience-celec">

				<div class="specificExperiencePrincipal">
					<h4 class="color-line ">项目负责人:</h4>

					<div class="principalBoard">

						<div class="principalAvatar">
							<figure class="avatar">
								<img class="avatarImg" src="uploads/ivy.jpg" title="Hancock" alt="avatar">
							</figure>

							<label class="principalName">Ivy</label>
						</div>

						<div class="company_basic_info">
							<ul class="company-info-content ">
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Industry</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxx</label>

										</div>
									</div>
								</li>

								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Founded</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>
								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Size</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxx</label>

										</div>
									</div>
								</li>


								<li>
									<div class="basic_info_container">
										<div class="basic_info_item">
											<span class="color-line">Address</span>
											{{--<label for="">Industry</label>--}}
										</div>

										<div class="basic_info_content">

											<label class="basic_info_label">xxxxxxxxxxxx</label>

										</div>
									</div>


								</li>
							</ul>
						</div>

					</div>



				</div>
				<div class="specificExperience_desc">
					<h4 class="color-line ">项目详情:</h4>
					<h2>为三一重能筹建西班牙研发中心提供人才保障</h2>
					<p>三一重能计划在欧洲筹建研发院, 招聘欧洲顶尖的风机领域人才, 以吸收欧洲风电领域先进技术和经验。 研究院主要负责新产品研发、新技术探索并将和中国研究院在技术研发方面进行紧密合作。此时, 人才, 成了筹备研究院最重要的工作。</p>
					<p>
						三一重能找到了我们, 我们接到需求之后, 开始紧锣密鼓地成立招聘小组, 调查欧洲风电市场现状和人力资源情况, 开辟新的招聘渠道。最终, 周密的调查准备工作精准的划分出猎寻人群, 找到了准确的方向, 极大的提升了招聘效率。 我们推荐的第一位候选人即为最终录取候选人。
					</p>
				</div>
			</div>

		</div>


	</div>


@stop