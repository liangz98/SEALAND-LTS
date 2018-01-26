@extends('layouts.app')
@section('title', '公司简介')

@section('styles')

@stop

@section('content')
	<!--================Our Blog Area =================-->
	<section class="our_blog_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="welcome-section-content">
						<h4 class="wc-heading text-center">公司简介</h4>
						<div class="row">
							@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
							<div class="col-sm-10 col-md-10 col-md-offset-1">
								<div class="wc-text">
									<p>　　香港海岸顾问服务有限公司成立于2007年，是一家在香港注册的独立顾问公司。主要从事有关保护涂装、腐蚀控制和船舶涂装方面的顾问服务工作。我们的队伍拥有来自香港、美国和英国的专家，他们在制订涂装规格书、涂装项目前和项目后、失败调研、检测和现场施工等方面都具有多年的丰富经验。除了顾问服务以外，我们还协助NACE国际（美国防腐蚀工程师学会）在中国开办培训认证课程，包括其著名的涂装检验师（CIP）、阴极保护（CP）等培训认证课程。2008年7月，在北京注册成立施蓝德防腐技术咨询（北京）有限公司（“施蓝德”取自“海岸”的英文“Sea Land”音译），主要负责在中国发展NACE培训业务。2010年1月，在广州设立办事处，负责培训业务的后勤工作。</p>
								</div>
							</div>
							@else
							<div class="col-sm-10 col-md-10">
								<div class="wc-text">
									<p>Sea Land Consulting Services Limited is an independent consulting company registered in Hong Kong and specialized in providing professional consulting services on protective coating, corrosion control and marine coating.  Our team of experts is a mix of professionals in Hong Kong, USA and the UK and they have tens of year of experience in preparation of coating specification, pre and post project surveys, failure investigation and field application.  In addition to consulting services, we also host certification training classes in China on behalf of NACE International (formerly known as ‘American National Association of Corrosion Engineers’) including its renowned Coating Inspector Program (CIP), Cathodic Protection (CP) certification training.  In July 2008, Sea Land Corrosion Technical Consulting (Beijing) Co., Ltd. registered in Beijing and was mainly responsible for developing NACE training business in China.  In January 2010, it opened an office in Guangzhou and was responsible for the logistics of training business.</p>
								</div>
							</div>
							@endif
						</div>
						<div class="row wc-meta text-center">
							<img src="/uploads/images/about_bg1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Our Blog Area =================-->

	<!--================pricing Area =================-->
	<section class="pricing">
		<div class="container">
			<div class="template-counter-section template-counter-section-2">
				<div class="single-counter-2 text-center">
					<div class="single-counter-wrapper">
						<div class="counter-2-icon">
							<i class="fa fa-user-o"></i>
						</div>
						<div class="counter-2-content">
							<span class="counter">1280</span>
							<p>拥有会员</p>
						</div>
					</div>
				</div>
				<div class="single-counter-2 text-center">
					<div class="single-counter-wrapper">
						<div class="counter-2-icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="counter-2-content">
							<span class="counter">180</span>
							<p>开展课程</p>
						</div>
					</div>
				</div>
				<div class="single-counter-2 text-center">
					<div class="single-counter-wrapper">
						<div class="counter-2-icon">
							<i class="fa fa-trophy"></i>
						</div>
						<div class="counter-2-content">
							<span class="counter">1370</span>
							<p>获得奖项</p>
						</div>
					</div>
				</div>
				<div class="single-counter-2 text-center">
					<div class="single-counter-wrapper">
						<div class="counter-2-icon">
							<i class="fa fa-id-card-o"></i>
						</div>
						<div class="counter-2-content">
							<span class="counter">930</span>
							<p>颁发证书</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End pricing Area =================-->
@stop

@section('styles')

@stop

@section('scripts')

@stop