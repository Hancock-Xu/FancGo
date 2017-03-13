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
					<div class="jumbotron" style="background-image: url(http://localhost:8000/uploads/Partnership-UK-1.jpg); background-attachment: fixed;background-position: top; background-repeat: no-repeat; background-size: 100%; width: 100%; height: 350px; margin-bottom: 0px;">
						<h1 style="color: #fefefe;margin-left: 70px;">用世界的力量,助力企业成长</h1>
						<p style="color: #fefefe;margin-left: 70px;width: 600px;padding-top: 40px;">Make recruiting foreign talents more easier</p>
						{{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>--}}
					</div>
				</div>
				<div class="item">
					{{--<img src="/images/intro-03.png" alt="Third slide">--}}
					<div class="jumbotron" style="background-image: url(http://localhost:8000/uploads/Aviation-UK-1.jpg); background-attachment:scroll;background-position: top;background-repeat:no-repeat; width: 100%; background-size: 100%; height: 350px; margin-bottom: 0px">
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

	<div class="slogan" style="width: 100%; background-color: #ff0078">
		<h2 style="padding: 20px 20px; width: 500px; margin: 0 auto"> JobLeadChina 是最高效的外籍人才招聘猎头</h2>
	</div>

	<div class="partnersLogoCollection" style="width: 100%; background-color: #FFFFFF; padding: 10px">

		{{--<h2 style="padding-top: 14px; padding-left:  14px; color: #5b6b7b; margin: 0px">合作商代表</h2>--}}

		<div style="display: flex">
			<div class="partnerLogo" style="display: inline-block; width: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 100%; height: 100%;" src="/uploads/NetEaseGames.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 60px; height: 100%;" src="/uploads/SANYZG.png" alt="">

				</figure>
			</div>
			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 100%; height: 100%;" src="/uploads/SFExpress.svg.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 100%; height: 100%;" src="/uploads/shclearing.png" alt="">
				</figure>
			</div>
			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 70px; height: 100%;" src="/uploads/TAETEA.jpg" alt="">
				</figure>
			</div>

			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 100%; height: 100%;" src="/uploads/CELEC.jpg" alt="">
				</figure>
			</div>

			<div class="partnerLogo" style="display: inline-block; width: 100px; height: 100px; margin: 2em; flex: 1; -webkit-box-flex: 1; display: -webkit-box; display: flex; -webkit-box-align: center; align-items: center; position: relative;">
				<figure style="width: 100%; display: -webkit-box; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; margin: 0 auto;">
					<img style="width: 100%; height: 100%;" src="/uploads/SANY.png" alt="">
				</figure>
			</div>
		</div>

	</div>

	<div>

	</div>


@stop