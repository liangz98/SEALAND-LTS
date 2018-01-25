@extends('layouts.app')

@section('title', $snew->subject)
@section('description', $snew->excerpt)

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h1 class="text-center">
                    {{ $snew->subject }}
                </h1>

                <div class="article-meta text-center">
                    {{ $snew->created_at->diffForHumans() }}
                    ⋅
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    {{ $snew->view_count }}
                </div>

                <div class="topic-body">
                    {!! $snew->body !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
