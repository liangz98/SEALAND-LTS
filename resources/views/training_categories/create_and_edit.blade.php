@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> TrainingCategory /
                    @if($training_category->id)
                        Edit #{{$training_category->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($training_category->id)
                    <form action="{{ route('training_categories.update', $training_category->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('training_categories.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="pid-field">Pid</label>
                    <input class="form-control" type="text" name="pid" id="pid-field" value="{{ old('pid', $training_category->pid ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $training_category->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_name-field">En_name</label>
                	<input class="form-control" type="text" name="en_name" id="en_name-field" value="{{ old('en_name', $training_category->en_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="desc-field">Desc</label>
                	<input class="form-control" type="text" name="desc" id="desc-field" value="{{ old('desc', $training_category->desc ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_desc-field">En_desc</label>
                	<input class="form-control" type="text" name="en_desc" id="en_desc-field" value="{{ old('en_desc', $training_category->en_desc ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $training_category->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $training_category->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $training_category->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $training_category->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('training_categories.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection