@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Training / Show #{{ $training->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('trainings.edit', $training->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Category_id</label>
<p>
	{{ $training->category_id }}
</p> <label>Title</label>
<p>
	{{ $training->title }}
</p> <label>En_title</label>
<p>
	{{ $training->en_title }}
</p> <label>Number</label>
<p>
	{{ $training->number }}
</p> <label>Level</label>
<p>
	{{ $training->level }}
</p> <label>Body</label>
<p>
	{{ $training->body }}
</p> <label>En_content</label>
<p>
	{{ $training->en_content }}
</p> <label>Location</label>
<p>
	{{ $training->location }}
</p> <label>En_location</label>
<p>
	{{ $training->en_location }}
</p> <label>Start_date</label>
<p>
	{{ $training->start_date }}
</p> <label>End_date</label>
<p>
	{{ $training->end_date }}
</p> <label>Deleted</label>
<p>
	{{ $training->deleted }}
</p> <label>Status</label>
<p>
	{{ $training->status }}
</p> <label>Created_by</label>
<p>
	{{ $training->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $training->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
