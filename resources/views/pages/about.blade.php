@extends('layouts.app')
@section('title', '公司简介')

@section('styles')

@stop

@section('content')
	<!--================Our Blog Area =================-->
	<section class="our_blog_area">
		<div class="container">
			<div class="main_title">
				<h5>{{ trans('commons.latest_news') }}</h5>
				<h2>{{ trans('commons.from_out_blog') }}</h2>
			</div>
			<div class="row our_blog_inner">
				<div class="col-md-4">
					<div class="our_blog_item">
						<div class="our_blog_img">
							<img src="/images/news/news-default.jpg" alt="">
							<div class="b_date">
								<h6>JULY</h6>
								<h5>25</h5>
							</div>
						</div>
						<div class="our_blog_content">
							<a href="#">
								<h4>中央首次派宣讲团赴港宣讲十九大</h4>
							</a>
							<p>据央广网报道，中央宣讲团成员、中央文献研究室主任冷溶23日早上到香港特区政府总部，为政府官员和高级公务员主讲中共十九大报告。中联办主任王志民等人出席。</p>
							<h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="our_blog_item">
						<div class="our_blog_img">
							<img src="/images/news/news-default-2.jpg" alt="">
							<div class="b_date">
								<h6>JULY</h6>
								<h5>12</h5>
							</div>
						</div>
						<div class="our_blog_content">
							<a href="#">
								<h4>置身宫殿？不，是新的桥底</h4>
							</a>
							<p>2017年对广州来说是有新气象的一年，《财富》全球论坛的盛会即将来到。在熟悉的城市里，街坊们不经意间发现，广州正变得越来越美。不少市民表示，广州的几座主要桥梁经过升级改造后，今年发生了巨变。每当华灯初上，桥下的风景让人惊叹。有市民说，感觉像是做梦，短短的时间里，这里竟变得如此美轮美奂。</p>
							<h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="our_blog_item">
						<div class="our_blog_img">
							<img src="/images/news/news-default.jpg" alt="">
							<div class="b_date">
								<h6>June</h6>
								<h5>07</h5>
							</div>
						</div>
						<div class="our_blog_content">
							<a href="#">
								<h4>又上榜啦！<br class="b_title_br" />中国百强城市广州第三！</h4>
							</a>
							<p>中国百强城市排行榜是由华顿经济研究院编制发布的年度数据。评价指标包含经济和非经济（软经济）两大系列，数据来源于国家统计局，可以全面、科学地衡量一个城市的经济、社会、文化、生态等综合发展水平。</p>
							<h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
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
			<div class="row section-intro">
				<div class="col-twelve with-bottom-line">
					<h5>会员资费</h5>
					<h1>选择一款适合您的会员产品</h1>
					<p class="lead">多款会员产品，满足您的需求.</p>
				</div>
			</div>

			<div class="row pricing-content">
				<div class="pricing-tables block-1-4 group">
					<div class="bgrid col-md-3 pricing-item">
						<div class="price-block">
							<div class="top-part">
								<h3 class="plan-title">初级</h3>
								<p class="plan-price"><sup>￥</sup>1080</p>
								<p class="price-month">半年</p>
								{{--<p class="price-meta">会员时长180天</p>--}}
							</div>
							<div class="bottom-part">
								<ul class="features">
									<li>会员时长 <strong>180</strong> 天</li>
									<li>基础服务</li>
									{{--<li><strong>5</strong> Databases</li>--}}
									{{--<li><strong>30</strong> Email Accounts</li>--}}
								</ul>
								<a href="#" class="btn btn-primary btn-lg" href="">选择</a>
							</div>
						</div>
					</div> <!-- /price-block -->

					<div class="bgrid col-md-3 pricing-item">
						<div class="price-block primary">
							<div class="top-part" data-info="推荐">
								<h3 class="plan-title">标准</h3>
								<p class="plan-price"><sup>￥</sup>1999</p>
								<p class="price-month">一年</p>
								{{--<p class="price-meta">会员时长 365 天</p>--}}
							</div>

							<div class="bottom-part">
								<ul class="features">
									<li>会员时长 <strong>365</strong> 天</li>
									<li>基础服务</li>
									{{--<li><strong>7</strong> Databases</li>--}}
									{{--<li><strong>40</strong> Email Accounts</li>--}}
								</ul>
								<a href="#" class="btn btn-primary btn-lg" href="">选择</a>
							</div>
						</div>
					</div> <!-- /price-block -->

					<div class="bgrid col-md-3 pricing-item">
						<div class="price-block">
							<div class="top-part">
								<h3 class="plan-title">进阶</h3>
								<p class="plan-price"><sup>￥</sup>3688</p>
								<p class="price-month">附赠一个月</p>
								{{--<p class="price-meta">会员时长 760 天</p>--}}
							</div>

							<div class="bottom-part">
								<ul class="features">
									<li>会员时长 <strong>760</strong> 天</li>
									<li>免费赠送 <strong>30</strong> 天</li>
									{{--<li><strong>15</strong> Databases</li>--}}
									{{--<li><strong>60</strong> Email Accounts</li>--}}
								</ul>
								<a href="#" class="btn btn-primary btn-lg" href="">选择</a>
							</div>
						</div>
					</div> <!-- /price-block -->

					<div class="bgrid col-md-3 pricing-item">
						<div class="price-block">
							<div class="top-part">
								<h3 class="plan-title">高级</h3>
								<p class="plan-price"><sup>￥</sup>5399</p>
								<p class="price-month">附赠三个月</p>
								{{--<p class="price-meta">会员时长 1185 天</p>--}}

							</div>

							<div class="bottom-part">
								<ul class="features">
									<li>会员时长 <strong>1185</strong> 天</li>
									<li>免费赠送 <strong>90</strong> 天</li>
									{{--<li><strong>25</strong> Databases</li>--}}
									{{--<li><strong>100</strong> Email Accounts</li>--}}
								</ul>
								<a href="#" class="btn btn-primary btn-lg" href="">选择</a>
							</div>
						</div>
					</div> <!-- /price-block -->
				</div> <!-- /pricing-tables -->
			</div> <!-- /pricing-content -->
		</div>
	</section>
	<!--================End pricing Area =================-->
@stop

@section('scripts')

@stop