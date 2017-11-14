@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Certification /
                    @if($certification->id)
                        Edit #{{$certification->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($certification->id)
                    <form action="{{ route('certifications.update', $certification->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('certifications.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $certification->user_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="number-field">Number</label>
                	<input class="form-control" type="text" name="number" id="number-field" value="{{ old('number', $certification->number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="level-field">Level</label>
                	<input class="form-control" type="text" name="level" id="level-field" value="{{ old('level', $certification->level ) }}" />
                </div> 
                <div class="form-group">
                    <label for="start_date-field">Start_date</label>
                    <input class="form-control" type="text" name="start_date" id="start_date-field" value="{{ old('start_date', $certification->start_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="expiry_date-field">Expiry_date</label>
                    <input class="form-control" type="text" name="expiry_date" id="expiry_date-field" value="{{ old('expiry_date', $certification->expiry_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $certification->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $certification->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $certification->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $certification->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('certifications.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection