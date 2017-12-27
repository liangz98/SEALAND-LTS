@extends('layouts.app')

@section('content')
<section class="trainings-body">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Training / {{ $training->name }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-primary pull-right" href="{{ route('register_courses.create', $training->id) }}">
                                <i class="fa fa-puzzle-piece"></i> 报名
                            </a>
                        </div>
                    </div>
                </div>

                <table class="table table-hover">
                    <tr>
                        <td class="text-center">课程</td>
                        <td><label>{{ $training->name }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">课程编号</td>
                        <td><label>{{ $training->number }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">课程级别</td>
                        <td><label>{{ $training->level }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">课程内容</td>
                        <td><label>{{ $training->content }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">培训地点</td>
                        <td><label for="">{{ $training->location }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">详细地址</td>
                        <td><label>{{ $training->address }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">开始时间</td>
                        <td><label>{{ date('Y-m-d', strtotime($training->start_date)) }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">结束时间</td>
                        <td><label>{{ date('Y-m-d', strtotime($training->end_date)) }}</label></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
