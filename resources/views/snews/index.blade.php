@extends('layouts.app')
@section('title', '最新消息')

@section('styles')

@stop

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                <i class="glyphicon glyphicon-align-justify"></i> 最新消息
            </h1>
        </div>

        <div class="panel-body">
            @if($snews->count())

                <ul class="media-list">
                    @foreach($snews as $snew)
                        <li class="media">
                            <div class="media-heading">
                                <a href="{{ route('snews.show', [$snew->id]) }}" title="{{ $snew->subject }}">
                                    {{ $snew->subject }}
                                </a>
                                <span> • </span>
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <span class="timeago" title="最后活跃于">{{ $snew->created_at->diffForHumans() }}</span>
                                <a class="pull-right" href="{{ route('snews.show', [$snew->id]) }}" >
                                    <span class="badge"> {{ $snew->view_count }} </span>
                                </a>
                            </div>

                            <div class="media-body meta">
                                <span class="timeago" title="简介">{!! $snew->excerpt !!}</span>
                            </div>
                        </li>
                        @if ( ! $loop->last)
                            <hr>
                        @endif
                    @endforeach
                </ul>

                {{--<table class="table table-condensed table-striped">--}}
                    {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>主题</th> <th>简介</th> <th>发布日期</th>--}}
                        {{--</tr>--}}
                    {{--</thead>--}}

                    {{--<tbody>--}}
                        {{--@foreach($snews as $snew)--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ route('snews.show', $snew->id) }}">--}}
                                        {{--{{$snew->subject}}--}}
                                    {{--</a>--}}
                                {{--</td>--}}
                                {{--<td>{!! $snew->excerpt !!}</td>--}}
                                {{--<td>{{$snew->release_date}}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
                {!! $snews->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif
        </div>
    </div>
</div>

@endsection