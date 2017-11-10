@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> TrainingCategory
                    <a class="btn btn-success pull-right" href="{{ route('training_categories.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($training_categories->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Pid</th> <th>Name</th> <th>En_name</th> <th>Desc</th> <th>En_desc</th> <th>Deleted</th> <th>Status</th> <th>Created_by</th> <th>Last_updated_by</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($training_categories as $training_category)
                                <tr>
                                    <td class="text-center"><strong>{{$training_category->id}}</strong></td>

                                    <td>{{$training_category->pid}}</td> <td>{{$training_category->name}}</td> <td>{{$training_category->en_name}}</td> <td>{{$training_category->desc}}</td> <td>{{$training_category->en_desc}}</td> <td>{{$training_category->deleted}}</td> <td>{{$training_category->status}}</td> <td>{{$training_category->created_by}}</td> <td>{{$training_category->last_updated_by}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('training_categories.show', $training_category->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('training_categories.edit', $training_category->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('training_categories.destroy', $training_category->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $training_categories->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection