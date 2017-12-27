@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>RegisterCourse / Show #{{ $register_course->id }}</h1>
        </div>

        <div class="panel-body">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-link" href="{{ route('users.show', Auth::id()) }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                    </div>
                    <div class="col-md-6">
                         <a class="btn btn-sm btn-warning pull-right" href="{{ route('register_courses.edit', $register_course->id) }}">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
                <tr>
                    <td class="text-center">课程</td>
                    <td><label>{{ $training->name }} [{{ trans('dataDict.register_course_status.'.$register_course->status) }}]</label></td>
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
                <tr>
                    <td class="text-center">培训人</td>
                    <td><label>{{ $register_course->name }} {{ $register_course->en_name }}</label></td>
                </tr>
                <tr>
                    <td class="text-center">所属公司</td>
                    <td><label>{{ $register_course->en_company_name }}</label></td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
