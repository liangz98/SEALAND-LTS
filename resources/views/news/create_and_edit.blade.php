@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> News /
                    @if($news->id)
                        Edit #{{$news->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($news->id)
                    <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="subject-field">Subject</label>
                	<input class="form-control" type="text" name="subject" id="subject-field" value="{{ old('subject', $news->subject ) }}" />
                </div> 
                <div class="form-group">
                	<label for="body-field">Body</label>
                	<textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $news->body ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="release_date-field">Release_date</label>
                    <input class="form-control" type="text" name="release_date" id="release_date-field" value="{{ old('release_date', $news->release_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $news->deleted ) }}" />
                </div> 
                <div class="form-group">
                    <label for="view_count-field">View_count</label>
                    <input class="form-control" type="text" name="view_count" id="view_count-field" value="{{ old('view_count', $news->view_count ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $news->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $news->last_updated_by ) }}" />
                </div> 
                <div class="form-group">
                	<label for="excerpt-field">Excerpt</label>
                	<textarea name="excerpt" id="excerpt-field" class="form-control" rows="3">{{ old('excerpt', $news->excerpt ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="slug-field">Slug</label>
                	<input class="form-control" type="text" name="slug" id="slug-field" value="{{ old('slug', $news->slug ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('news.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection