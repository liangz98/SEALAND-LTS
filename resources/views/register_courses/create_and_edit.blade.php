@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> 报名培训

                    <a href="{{ $trainingDefaultFile }}" class="btn btn-success pull-right">报表名下载</a>
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                <form action="{{ route('register_courses.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="training_id" value="{{ $training->id }}">

                    <div class="form-group">
                        <label for="name-field">课程名称</label>
                        <input class="form-control" type="text" id="name-field" value="{{ old('name', $training->name ) }}" readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="start_date-field">开始时间</label>
                        <input class="form-control" type="text" id="start_date-field" value="{{ old('start_date', $training->start_date ) }}" readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="end_date-field">结束时间</label>
                        <input class="form-control" type="text" id="end_date-field" value="{{ old('end_date', $training->end_date ) }}" readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="application_form-field">报名表</label>
                        <input type="file" name="application_form">
                        <p class="help-block">将填好的报名表上传。</p>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <a class="btn btn-link pull-right" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection