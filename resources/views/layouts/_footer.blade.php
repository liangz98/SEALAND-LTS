<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <aside class="f_widget about_widget">
                        <div class="f_title">
                            <img src="/images/logo_trans.png" width="32px" height="32px" alt="">
                            {{--<p>施蓝德防腐技术咨询（北京）有限公司简介。</p>--}}
                            <p>施蓝德防腐技术咨询（北京）有限公司</p>
                        </div>
                        <ul class="list-inline widget_ab_fa">
                            <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-xs-6">
                    <aside class="f_widget link_widget">
                        <div class="f_title">
                            <h3>{{ trans('commons.quick_link') }}</h3>
                        </div>
                        <ul>
                            <li><a href="#">{{ trans('commons.our_partners') }}</a></li>
                            <li><a href="#">{{ trans('commons.legal_notice') }}</a></li>
                            <li><a href="#">{{ trans('commons.cookie_policy') }}</a></li>
                            <li><a href="#">{{ trans('commons.terms_conditions') }}</a></li>
                        </ul>
                    </aside>
                </div>
                {{--<div class="col-md-3 col-xs-6">
                    <aside class="f_widget service_widget">
                        <div class="f_title">
                            <h3>{{ trans('commons.services') }}</h3>
                        </div>
                        <ul>
                            <li><a href="#">服务项目</a></li>
                            <li><a href="#">服务项目</a></li>
                            <li><a href="#">服务项目</a></li>
                            <li><a href="#">服务项目</a></li>
                        </ul>
                    </aside>
                </div>--}}
                <div class="col-md-5 col-xs-6">
                    <aside class="f_widget info_widget">
                        <div class="f_title">
                            <h3>{{ trans('commons.call_us') }}</h3>
                        </div>
                        <div class="contact_details">
                            <div class="widget_ab_item">
                                <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                <div class="widget_ab_item_text">
                                    <h6 class="text-muted">Location</h6>
                                    <br>

                                    <address class="text-white">
                                        <strong class="text-primary">{{ trans('commons.location_name_hk') }}</strong><br>
                                        {{ trans('commons.location_hk') }}<br>
                                        <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;<a href="tel:+852-22747182" class="text-white">+852-22747182</a><br>
                                    </address>

                                    <address class="text-white">
                                        <strong class="text-primary">{{ trans('commons.location_name_beijing') }}</strong><br>
                                        {{ trans('commons.location_beijing') }}<br>
                                        <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;<a href="tel:+86-010-63357814" class="text-white">+86-10-63357814</a><br>
                                    </address>

                                    <address class="text-white">
                                        <strong class="text-primary">{{ trans('commons.location_name_shanghai') }}</strong><br>
                                        {{ trans('commons.location_shanghai') }}<br>
                                        <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;<a href="tel:+86-020-81933883" class="text-white">+86-21-54717822</a><br>
                                    </address>

                                    {{--<p>
                                        广州市荔湾区中山八路新虹街40-48号荔景楼B座807室.
                                    </p>
                                    <p><a href="tel:+86-020-81933883">+86-020-81933883</a></p>
                                    <p><a href="tel:+86-020-81935678">+86-020-81935678</a></p>--}}
                                </div>
                            </div>
                            <div class="widget_ab_item m-top-30">
                                <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="widget_ab_item_text">
                                    <h6 class="text-muted">Email Address :</h6>
                                    <p><a href="mailto:rosemary@sealandconsulting.com">rosemary@sealandconsulting.com</a></p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
        <div class="container">
            <h4>Copyright &copy; 2017 <a href="/">{{ trans('commons.services_limited') }} </a> {{ trans('commons.all_rights_reserved') }}</h4>
        </div>
        <div class="container">
            <h4>ICP证：<a href="http://www.beian.miit.gov.cn" target="_blank">粤ICP备14011198号</a></h4>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->