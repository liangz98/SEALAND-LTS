@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Certification / Show #{{ $certification->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('certifications.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('certifications.edit', $certification->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $certification->user_id }}
</p> <label>Number</label>
<p>
	{{ $certification->number }}
</p> <label>Level</label>
<p>
	{{ $certification->level }}
</p> <label>Start_date</label>
<p>
	{{ $certification->start_date }}
</p> <label>Expiry_date</label>
<p>
	{{ $certification->expiry_date }}
</p> <label>Deleted</label>
<p>
	{{ $certification->deleted }}
</p> <label>Status</label>
<p>
	{{ $certification->status }}
</p> <label>Created_by</label>
<p>
	{{ $certification->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $certification->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
