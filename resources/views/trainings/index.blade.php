@extends('layouts.app')
@section('title', '培训课程')

@section('styles')

@stop

@section('content')
<section class="trainings-body">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Training
                    <a class="btn btn-success pull-right" href="{{ route('trainings.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($trainings->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>课程名称</th> <th>课程编号</th> <th>剩余名额</th> <th>培训地点</th> <th>开始时间</th> <th>结束时间</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($trainings as $training)
                            <tr>
                                <td class="text-center"><strong>{{$training->id}}</strong></td>

                                <td>
                                    <a href="{{ route('trainings.show', $training->id) }}">
                                        {{$training->name}}
                                    </a>
                                </td>

                                <td>{{$training->number}}</td>
                                <td>{{ $training->total - $training->apply_count }}</td>
                                <td>{{ str_limit( $training->location, 20) }}</td>
                                <td>{{ date('Y-m-d', strtotime($training->start_date)) }}</td>
                                <td>{{ date('Y-m-d', strtotime($training->end_date)) }}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('trainings.show', $training->id) }}">
                                        报名
                                    </a>

                                    <form action="{{ route('trainings.destroy', $training->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $trainings->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection