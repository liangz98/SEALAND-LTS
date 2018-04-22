@extends('layouts.app')
@section('title', trans('commons.training'))

@section('styles')

@stop

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                <i class="glyphicon glyphicon-align-justify"></i> {{ trans('commons.training') }}
                {{--<a class="btn btn-success pull-right" href="{{ route('trainings.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>--}}
            </h1>
        </div>

        <div class="panel-body">
            <ul class="nav nav-pills">
                @if($trainingCategories->count())
                    @foreach($trainingCategories as $key => $trainingCategory)
                        @if ($key == 0)
                            <li role="presentation" class="{{ active_class(if_query('tab', null)) }}">
                                <a href="{{ route('trainings.index') }}">{{ $trainingCategory->name }}</a>
                            </li>
                        @else
                            <li role="presentation" class="{{ active_class(if_query('tab', $trainingCategory->id)) }}">
                                <a href="{{ route('trainings.index', [$trainingCategory->id, 'tab' => $trainingCategory->id]) }}">{{ $trainingCategory->name }}</a>
                            </li>
                        @endif
                    @endforeach

                    @if (if_query('tab', null))
                        @include('trainings._trainings_list', ['trainings' => $trainings])
                    @else
                        @foreach($trainingCategories as $key => $trainingCategory)
                            @if (if_query('tab', $trainingCategory->id))
                                @include('trainings._trainings_list', ['trainings' => \App\Models\Training::where([['category_id', $trainingCategory->id]])->paginate(10)])
                            @endif
                        @endforeach
                    @endif
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif




                {{--<li role="presentation" class="active"><a href="#">Home</a></li>--}}
                {{--<li role="presentation"><a href="#">Profile</a></li>--}}
                {{--<li role="presentation"><a href="#">Messages</a></li>--}}
            </ul>
        </div>
    </div>
</div>
@endsection