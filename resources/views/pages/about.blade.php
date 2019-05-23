@extends('layouts.app')
@section('title', trans('commons.about'))

@section('styles')
	<style type="text/css">
		.about-div p:first-child {
			margin-top: 0;
		}
		.about-div p {
			margin-top: 20px;
		}
	</style>
@stop

@section('content')
	<!--================Our Blog Area =================-->
	<section class="our_blog_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="welcome-section-content">
						<h1 class="wc-heading text-center">{{ trans('commons.about') }}</h1>
						<div class="row">
							@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
							<div class="col-sm-10 col-md-10 col-sm-offset-1">
								<div class="wc-text">
									<p>　　施蓝德防腐技术咨询（北京）有限公司成立于2008年，一直以来专注于防腐蚀事业。业务范围包括提供防腐专业不同领域的培训、国内外涂装项目技术咨询服务、涂装勘验、制定涂层维护管理方案、防腐系统失效分析和建议、特殊防腐涂料、涂层检查仪器和专业除盐剂代理分销业务。</p>
									<p>　　在培训方面，我司代理世界著名的美国防腐工程师学会NACE的各项专业培训课程。包括著名的涂装检验员课程（CIP）、阴极保护课程（CP）、核电站涂装课程（NPP）和海上平台涂装勘验技术员课程（OCAT）等，十多年来培训学员超过2000人以上。</p>
									<p>　　在技术咨询和现场监理服务方面，先后完成了国内外诸多项目，包括发电站、风电、船舶、海上平台、水上乐园、桥梁等等。我司和国外各领域的专业单位建立了长期的伙伴合作关系，技术资源丰富。</p>
									<p>　　在贸易方面，我司代理美国专利产品除盐剂 <a href="https://www.chlor-rid.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="一种特制的有机结合化学剂，使用于减除底材表面上的可溶性盐，如氯化盐和硫酸盐等">Chlor Rid</a> ，<a href="https://www.cficoatings.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="CFI">CFI</a> 涂料和 <a href="https://www.defelsko.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="包括涂层测厚仪，表面粗糙度仪，露点仪，可溶性盐测试仪，拉拔附着力测试仪等。">Defelsko</a> 涂层检查仪器等。</p>
									<p>　　随着业务发展的需要，我司在2010年在广州开设了办事处，为国内客户提供更优质的服务。</p>
								</div>
							</div>
							@else
							<div class="col-sm-10 col-md-10 col-sm-offset-1">
								<div class="wc-text about-div">
									<p>Founded in 2008, Sea Land Anti-Corrosion Technology Consulting (Beijing) Limited has been focused and specialized in corrosion management industry.  The business scope includes provision of training to different segments of the industry, consulting services for local and foreign coating projects, coating surveys, coating failure analysis, design and preparing for corrosion management program, trading of corrosion related products such as coatings, inspection equipment and proprietary salt remover.</p>
									<p>On trainings, we are the partner of the world leading corrosion organization NACE International providing its world renowned and recognized programs such as Coating Inspector Program (CIP), CIP Nuclear (NPP), Cathodic Protection (CP), Corrosion Under Insulation (CUI) and Offshore Corrosion Assessment Technician (OCAT).  Over 3000 corrosion professionals were trained by us in the last decade.</p>
									<p>We have been involved and working with our overseas associates in different areas of the industry such as power station, wind power, shipbuilding and offshore platform, marine park, bridges, pipelines and so forth.</p>
									<p>On product trading, we are the distributor of the proprietary salt remover <a href="https://www.chlor-rid.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="A unique organic bonding chemistry which aids in the removal of chlorides, sulfates and surface reacted salts.">Chlor Rid</a>, <a href="https://www.defelsko.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="CFI coatings">Defelsko inspection equipment</a> , and <a href="https://www.cficoatings.com/" target="_blank" data-toggle="tooltip" title="" data-original-title="CFI coatings">CFI Coatings</a>.</p>
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
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		})
	</script>
@stop