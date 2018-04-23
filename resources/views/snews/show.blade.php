@extends('layouts.app')

@section('title', $snew->subject)
@section('description', $snew->excerpt)

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h1 class="text-center">
                    @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                        {{ $snew->subject }}
                    @else
                        @if( $snew->subject_en != null &&  $snew->subject_en != '')
                            {{ $snew->subject_en }}
                        @else
                            {{ $snew->subject }}
                        @endif
                    @endif
                </h1>

                <div class="article-meta text-center">
                    {{ $snew->created_at->diffForHumans() }}
                    ⋅
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    {{ $snew->view_count }}
                </div>

                <div class="topic-body">
                    @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                        {!! $snew->body !!}
                    @else
                        @if( $snew->body_en != null &&  $snew->body_en != '')
                            {!! $snew->body_en !!}
                        @else
                            {!! $snew->body !!}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
