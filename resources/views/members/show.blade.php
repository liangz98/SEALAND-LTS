@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            {{--<img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">--}}
                            <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>个人简介</strong></h4>
                            <p>{!! $user->introduction !!}</p>
                            {{--<p>{{ $user->introduction }}</p>--}}
                            <hr>
                            <h4><strong>注册于</strong></h4>
                            {{--{{ dd($user->created_at) }}--}}
                            <p>{{ $user->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
            <span>
                <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
            </span>
                </div>
            </div>

            {{-- 用户发布的内容 --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    @if ($member)
                        <ul class="nav nav-tabs">
                            <li class="{{ active_class(if_query('tab', null)) }}">
                                <a href="{{ route('members.show', $member->id) }}">会员信息</a>
                            </li>
                            <li class="{{ active_class(if_query('tab', 'certification')) }}">
                                <a href="{{ route('members.show', [$member->id, 'tab' => 'certification']) }}">认证记录</a>
                            </li>
                        </ul>
                        @if (if_query('tab', 'certification'))
                            {{--@include('members._certification', ['certifications' => $user->replies()->with('topic')->recent()->paginate(5)])--}}
                        @else
                            @include('members._member', ['member' => $member, 'memberships' => $member->memberships()->expiryRecent()->get(),
                                'certifications' => $member->certifications()->where('expiry_date', '>', \Illuminate\Support\Carbon::now())->with('training')->get()
                            ])
                        @endif
                    @else
                        <div class="empty-block">不是会员？马上 <a href="{{ route('members.create') }}"><b>申请NACE会员</b></a> </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop