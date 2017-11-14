@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Training
                    <a class="btn btn-success pull-right" href="{{ route('trainings.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($trainings->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Category_id</th> <th>Title</th> <th>En_title</th> <th>Number</th> <th>Level</th> <th>Body</th> <th>En_content</th> <th>Location</th> <th>En_location</th> <th>Start_date</th> <th>End_date</th> <th>Deleted</th> <th>Status</th> <th>Created_by</th> <th>Last_updated_by</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($trainings as $training)
                                <tr>
                                    <td class="text-center"><strong>{{$training->id}}</strong></td>

                                    <td>{{$training->category_id}}</td> <td>{{$training->title}}</td> <td>{{$training->en_title}}</td> <td>{{$training->number}}</td> <td>{{$training->level}}</td> <td>{{$training->body}}</td> <td>{{$training->en_content}}</td> <td>{{$training->location}}</td> <td>{{$training->en_location}}</td> <td>{{$training->start_date}}</td> <td>{{$training->end_date}}</td> <td>{{$training->deleted}}</td> <td>{{$training->status}}</td> <td>{{$training->created_by}}</td> <td>{{$training->last_updated_by}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('trainings.show', $training->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('trainings.edit', $training->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('trainings.destroy', $training->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $trainings->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection