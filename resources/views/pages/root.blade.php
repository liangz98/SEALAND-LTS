@extends('layouts.app')
@section('title', '首页')

@section('styles')

@stop

@section('content')
	<!--================Main Slider Area =================-->
	<section class="main_slider_area">
		<div id="main_slider" class="rev_slider" data-version="5.3.1.6">
			<ul>
				<li data-index="rs-2974" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
					data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="images/home-slider/slider-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<div class="slider_text_box">
						<div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['250','250','250','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"></div>

						<div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['315','315','315','190']" data-fontsize="['40','40','40','30']" data-lineheight="['60','60','60','40']"
							 data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN') 腐蚀管理和涂装检查 @else Corrosion Management & Coating Inspection @endif{{-- 施蓝德防腐技术 --}}</div>

						<div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn" href="/about">KNOW MORE <i class="fa fa-angle-right"></i></a></div>

						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['center','center','center','center']" data-hoffset="['-70','0','0','-25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-left"></i>
						</div>
						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['right','right','right','center']" data-y="['center','center','center','center']" data-hoffset="['70','0','0','25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-right"></i>
						</div>
					</div>
				</li>
				<li data-index="rs-2972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
					data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="images/home-slider/slider-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<div class="slider_text_box">
						<div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['250','250','250','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"></div>

						<div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['315','315','315','190']" data-fontsize="['40','40','40','30']" data-lineheight="['60','60','60','40']"
							 data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN') 腐蚀行业人员培训 @else Training to the industries @endif{{-- 施蓝德防腐技术 --}}</div>

						<div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn" href="/about">KNOW MORE <i class="fa fa-angle-right"></i></a></div>

						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['center','center','center','center']" data-hoffset="['-70','0','0','-25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-left"></i>
						</div>
						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['right','right','right','center']" data-y="['center','center','center','center']" data-hoffset="['70','0','0','25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-right"></i>
						</div>
					</div>
				</li>
				<li data-index="rs-2973" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
					data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="images/home-slider/slider-5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<div class="slider_text_box">
						<div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['250','250','250','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"></div>

						<div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['315','315','315','190']" data-fontsize="['40','40','40','30']" data-lineheight="['60','60','60','40']"
							 data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							 data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN') 和行业和学术界保持互动 @else Interactions with industries and academe @endif{{-- 施蓝德防腐技术 --}}</div>

						<div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							 data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn" href="/about">详情 <i class="fa fa-angle-right"></i></a></div>

						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['center','center','center','center']" data-hoffset="['-70','0','0','-25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-left"></i>
						</div>
						<div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['right','right','right','center']" data-y="['center','center','center','center']" data-hoffset="['70','0','0','25']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
							 data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
							 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"
							 style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px"><i class="fa fa-angle-right"></i>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!--================End Main Slider Area =================-->

	<!--================Our Blog Area =================-->
	<section class="our_blog_area">
		<div class="container">
			<div class="main_title">
				<h5>{{ trans('commons.latest_news') }}</h5>
				<h2>{{ trans('commons.from_out_blog') }}</h2>
			</div>
			<div class="row our_blog_inner">
				@if (count($snews))
					@foreach($snews as $snew)
						<div class="col-md-4">
							<div class="our_blog_item">
								<div class="our_blog_img">
									<img src="/uploads/{{ $snew->excerpt_bg }}" alt="">
									<div class="b_date">
										<h6>{{ date('M', strtotime($snew->created_at)) }}</h6>
										<h5>{{ date('d', strtotime($snew->created_at)) }}</h5>
									</div>
								</div>
								<div class="our_blog_content">
									<a href="{{ route('snews.show', [$snew->id]) }}">
										<h4>
										@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
										{{ $snew->subject }}
										@else
											@if( $snew->subject_en != null &&  $snew->subject_en != '')
												{{ $snew->subject_en }}
											@else
												{{ $snew->subject }}
											@endif
										@endif
										</h4>
									</a>
									@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
										{!! $snew->excerpt !!}
									@else
										@if( $snew->excerpt_en != null &&  $snew->excerpt_en != '')
										{!! $snew->excerpt_en !!}
										@else
										{!! $snew->excerpt !!}
										@endif
									@endif
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>
	<!--================End Our Blog Area =================-->


	<!--================ pricing Area =================-->
	<div class="modal fade bs-example-modal-lg" id="bulletinModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title text-center">特此通告</h3>
				</div>
				<div class="modal-body">
					<p class="lead">　　NACE国际针对新冠状病毒肺炎（Covid-19）可能对线下上课学员和老师的健康有影响，暂时关闭了它在美国休斯顿总部和中东杜拜的培训中心，把大部分线下授课的课程暂时取消。但为了满足行业对培训的需求，它将首先推出CIP-1涂装检查员一级英文在线课程，让学员可以进行远程学习。NACE中国上海代表处也在3月20日的公众号上宣布了这一信息。</p>
					<p class="lead">　　随着中国方面疫情的好转，我司会按原计划在五月中旬开始恢复举办正常的CIP课程。除非中国的疫情高峰再临，才会考虑举办线上远程课程。</p>
					<p class="lead">　　特此澄清各种纷乱信息，谢谢各位！</p>
					<p class="text-right">2020年3月21日</p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!--================ End pricing Area =================-->
@stop

@section('scripts')
<script type="text/javascript">
	$(function () {
		$('#bulletinModal').modal('show');
	});
</script>
@stop