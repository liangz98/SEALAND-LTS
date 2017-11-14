@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>News / Show #{{ $news->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('news.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('news.edit', $news->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Subject</label>
<p>
	{{ $news->subject }}
</p> <label>Body</label>
<p>
	{{ $news->body }}
</p> <label>Release_date</label>
<p>
	{{ $news->release_date }}
</p> <label>Deleted</label>
<p>
	{{ $news->deleted }}
</p> <label>View_count</label>
<p>
	{{ $news->view_count }}
</p> <label>Created_by</label>
<p>
	{{ $news->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $news->last_updated_by }}
</p> <label>Excerpt</label>
<p>
	{{ $news->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $news->slug }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
