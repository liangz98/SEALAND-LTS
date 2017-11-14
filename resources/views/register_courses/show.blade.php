@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>RegisterCourse / Show #{{ $register_course->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('register_courses.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('register_courses.edit', $register_course->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $register_course->user_id }}
</p> <label>Training_id</label>
<p>
	{{ $register_course->training_id }}
</p> <label>Deleted</label>
<p>
	{{ $register_course->deleted }}
</p> <label>Status</label>
<p>
	{{ $register_course->status }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
