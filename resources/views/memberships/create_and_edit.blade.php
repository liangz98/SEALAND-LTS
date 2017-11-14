@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Membership /
                    @if($membership->id)
                        Edit #{{$membership->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($membership->id)
                    <form action="{{ route('memberships.update', $membership->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('memberships.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="member_id-field">Member_id</label>
                    <input class="form-control" type="text" name="member_id" id="member_id-field" value="{{ old('member_id', $membership->member_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="start_date-field">Start_date</label>
                    <input class="form-control" type="text" name="start_date" id="start_date-field" value="{{ old('start_date', $membership->start_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="expiry_date-field">Expiry_date</label>
                    <input class="form-control" type="text" name="expiry_date" id="expiry_date-field" value="{{ old('expiry_date', $membership->expiry_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $membership->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $membership->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $membership->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $membership->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('memberships.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection