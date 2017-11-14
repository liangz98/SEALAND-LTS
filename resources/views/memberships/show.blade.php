@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Membership / Show #{{ $membership->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('memberships.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('memberships.edit', $membership->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Member_id</label>
<p>
	{{ $membership->member_id }}
</p> <label>Start_date</label>
<p>
	{{ $membership->start_date }}
</p> <label>Expiry_date</label>
<p>
	{{ $membership->expiry_date }}
</p> <label>Deleted</label>
<p>
	{{ $membership->deleted }}
</p> <label>Status</label>
<p>
	{{ $membership->status }}
</p> <label>Created_by</label>
<p>
	{{ $membership->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $membership->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
