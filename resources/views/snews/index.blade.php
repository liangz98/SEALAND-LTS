@extends('layouts.app')
@section('title', trans('commons.news'))

@section('styles')

@stop

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                <i class="glyphicon glyphicon-align-justify"></i> {{ trans('commons.news') }}
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

                {!! $snews->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif
        </div>
    </div>
</div>

@endsection