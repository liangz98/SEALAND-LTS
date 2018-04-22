<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="pull-left">
                <div class="header_c_text">
                    <h4><i class="fa fa-phone" aria-hidden="true"></i> {{ trans('commons.call_us') }}: +86-020-81933883</h4>
                </div>
                <div class="header_c_text">
                    <h4><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#">{{ trans('commons.contact_us') }}: info@sealandconsulting.com</a></h4>
                </div>
                <div class="header_c_text visible-xs-block">
                    <ul class="list-inline">
                    @foreach (Config::get('app.locales') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li>
                                <a href="{{ route('lang.change', $lang) }}" style="font-size: 16px; color: #999999;">
                                    <img src="/images/language/{{$lang}}.png" style="margin-top: -5px;" /> {{ trans('commons.'.$language) }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="pull-right hidden-xs hidden-sm">
                <ul class="list-inline">
                    @foreach (Config::get('app.locales') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li><a href="{{ route('lang.change', $lang) }}"><img src="/images/language/{{$lang}}.png" style="margin-top: -5px;" /> {{ trans('commons.'.$language) }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>

            {{--<div class="pull-right hidden-xs">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li><a href=""><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href=""><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href=""><i class="fa fa-linkedin"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="main_menu_area">
        <nav class="navbar navbar-default">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <i class="fa fa-terminal"></i> SEALAND
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">@lang('commons.home')</a></li>
                        <li><a href="/snews">@lang('commons.news')</a></li>
                        <li><a href="/trainings">@lang('commons.training')</a></li>
                        {{--<li><a href="#">@lang('commons.product')</a></li>--}}
                        {{--<li><a href="/topics">@lang('commons.topic')</a></li>--}}
                        <li><a href="{{ route('members.show', Auth::id()) }}">@lang('commons.member')</a></li>
                        <li><a href="{{ route('renew_certifications.create') }}">@lang('commons.certification')</a></li>
                        <li><a href="/about">@lang('commons.about')</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {{--<li>--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search here...">--}}
                                {{--<span class="input-group-btn">--}}
                                    {{--<button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
                                {{--</span>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        @guest
                            <li><a href="{{ route('login') }}">{{ trans('auth.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ trans('auth.register') }}</a></li>
                        @else
                            <li>
                                <a href="{{ route('topics.create') }}">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                            {{-- 消息通知标记 --}}
                            <li>
                                <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                                <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">
                                    {{ Auth::user()->notification_count }}
                                </span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top: 22px;">
                                        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                                    </span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-customer" role="menu">
                                    {{--@can('manage_contents')--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ url(config('administrator.uri')) }}">--}}
                                                {{--<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>--}}
                                                {{--管理后台--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--@endcan--}}

                                    <li>
                                        <a href="{{ route('members.show', Auth::id()) }}">
                                            <span class="fa fa-id-card-o" aria-hidden="true"></span>
                                            会员信息
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.show', Auth::id()) }}">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            个人中心
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.edit', Auth::id()) }}">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            编辑资料
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                            退出登录
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>
</header>
