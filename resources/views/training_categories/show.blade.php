@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>TrainingCategory / Show #{{ $training_category->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('training_categories.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('training_categories.edit', $training_category->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Pid</label>
<p>
	{{ $training_category->pid }}
</p> <label>Name</label>
<p>
	{{ $training_category->name }}
</p> <label>En_name</label>
<p>
	{{ $training_category->en_name }}
</p> <label>Desc</label>
<p>
	{{ $training_category->desc }}
</p> <label>En_desc</label>
<p>
	{{ $training_category->en_desc }}
</p> <label>Deleted</label>
<p>
	{{ $training_category->deleted }}
</p> <label>Status</label>
<p>
	{{ $training_category->status }}
</p> <label>Created_by</label>
<p>
	{{ $training_category->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $training_category->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
