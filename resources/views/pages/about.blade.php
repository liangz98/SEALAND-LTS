@extends('layouts.app')
@section('title', trans('commons.about'))

@section('styles')

@stop

@section('content')
	<!--================Our Blog Area =================-->
	<section class="our_blog_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="welcome-section-content">
						<h4 class="wc-heading text-center">{{ trans('commons.about') }}</h4>
						<div class="row">
							@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
							<div class="col-sm-10 col-md-10 col-md-offset-1">
								<div class="wc-text">
									<p>　　施蓝德防腐技术咨询（北京）有限公司成立于2008年，一直以来专注于防腐蚀事业。业务范围包括提供防腐专业不同领域的培训、国内外涂装项目技术咨询服务、涂装勘验、制定涂层维护管理方案、防腐系统失效分析和建议、特殊防腐涂料、涂层检查仪器和专业除盐剂代理分销业务。</p>
									<p>　　在培训方面，我司代理世界著名的美国防腐工程师学会NACE的各项专业培训课程。包括著名的涂装检验员课程（CIP）、阴极保护课程（CP）、核电站涂装课程（NPP）和海上平台涂装勘验技术员课程（OCAT）等，十多年来培训学员超过2000人以上。</p>
									<p>　　在技术咨询和服务方面，先后完成了国内外诸多项目，包括发电站、风电、船舶、海上平台、水上乐园、桥梁等等。我司和国外各领域的专业单位建立了长期的伙伴合作关系，技术资源丰富。</p>
									<p>　　在贸易方面，我司代理美国专利产品除盐剂 <a href="https://www.chlorid.com/" data-toggle="tooltip" title="" data-original-title="Chlor Rid">Chlor Rid</a> ，<a href="https://www.cficoatings.com/" data-toggle="tooltip" title="" data-original-title="CFI 涂料">CFI 涂料</a> 和 <a href="https://www.defelsko.com/" data-toggle="tooltip" title="" data-original-title="Defelsko涂层检查仪器">Defelsko涂层检查仪器</a> 等。</p>
									<p>　　随着业务发展的需要，我司在2010年在广州开设了办事处，为国内客户提供更优质的服务。</p>
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
							<div class="col-sm-12" style="margin-top: 15px;">
								<img src="/uploads/images/about_bg1.png" class="img-rounded" alt="about">
							</div>
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
				{{--
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
				--}}
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