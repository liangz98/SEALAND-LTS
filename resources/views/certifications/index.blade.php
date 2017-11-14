@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Certification
                    <a class="btn btn-success pull-right" href="{{ route('certifications.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($certifications->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>User_id</th> <th>Number</th> <th>Level</th> <th>Start_date</th> <th>Expiry_date</th> <th>Deleted</th> <th>Status</th> <th>Created_by</th> <th>Last_updated_by</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($certifications as $certification)
                                <tr>
                                    <td class="text-center"><strong>{{$certification->id}}</strong></td>

                                    <td>{{$certification->user_id}}</td> <td>{{$certification->number}}</td> <td>{{$certification->level}}</td> <td>{{$certification->start_date}}</td> <td>{{$certification->expiry_date}}</td> <td>{{$certification->deleted}}</td> <td>{{$certification->status}}</td> <td>{{$certification->created_by}}</td> <td>{{$certification->last_updated_by}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('certifications.show', $certification->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('certifications.edit', $certification->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('certifications.destroy', $certification->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $certifications->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection