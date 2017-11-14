@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Training /
                    @if($training->id)
                        Edit #{{$training->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($training->id)
                    <form action="{{ route('trainings.update', $training->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('trainings.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $training->category_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $training->title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_title-field">En_title</label>
                	<input class="form-control" type="text" name="en_title" id="en_title-field" value="{{ old('en_title', $training->en_title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="number-field">Number</label>
                	<input class="form-control" type="text" name="number" id="number-field" value="{{ old('number', $training->number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="level-field">Level</label>
                	<input class="form-control" type="text" name="level" id="level-field" value="{{ old('level', $training->level ) }}" />
                </div> 
                <div class="form-group">
                	<label for="body-field">Body</label>
                	<input class="form-control" type="text" name="body" id="body-field" value="{{ old('body', $training->body ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_content-field">En_content</label>
                	<input class="form-control" type="text" name="en_content" id="en_content-field" value="{{ old('en_content', $training->en_content ) }}" />
                </div> 
                <div class="form-group">
                	<label for="location-field">Location</label>
                	<input class="form-control" type="text" name="location" id="location-field" value="{{ old('location', $training->location ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_location-field">En_location</label>
                	<input class="form-control" type="text" name="en_location" id="en_location-field" value="{{ old('en_location', $training->en_location ) }}" />
                </div> 
                <div class="form-group">
                    <label for="start_date-field">Start_date</label>
                    <input class="form-control" type="text" name="start_date" id="start_date-field" value="{{ old('start_date', $training->start_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="end_date-field">End_date</label>
                    <input class="form-control" type="text" name="end_date" id="end_date-field" value="{{ old('end_date', $training->end_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $training->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $training->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $training->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $training->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection