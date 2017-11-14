@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> RenewCertification
                    <a class="btn btn-success pull-right" href="{{ route('renew_certifications.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($renew_certifications->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>User_id</th> <th>Number</th> <th>Level</th> <th>First_name</th> <th>Last_name</th> <th>Birth_date</th> <th>User_name</th> <th>User_password</th> <th>Person_address</th> <th>Person_city</th> <th>Person_country</th> <th>Person_zip_code</th> <th>Person_email</th> <th>Person_phone</th> <th>Work_address</th> <th>Work_city</th> <th>Work_country</th> <th>Work_zip_code</th> <th>Work_email</th> <th>Work_phone</th> <th>Work_type</th> <th>Company_name</th> <th>From_date</th> <th>To_date</th> <th>Company_address</th> <th>Company_city</th> <th>Company_province</th> <th>Company_country</th> <th>Company_zip_code</th> <th>Title</th> <th>Description</th> <th>Deleted</th> <th>Status</th> <th>Created_by</th> <th>Last_updated_by</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($renew_certifications as $renew_certification)
                                <tr>
                                    <td class="text-center"><strong>{{$renew_certification->id}}</strong></td>

                                    <td>{{$renew_certification->user_id}}</td> <td>{{$renew_certification->number}}</td> <td>{{$renew_certification->level}}</td> <td>{{$renew_certification->first_name}}</td> <td>{{$renew_certification->last_name}}</td> <td>{{$renew_certification->birth_date}}</td> <td>{{$renew_certification->user_name}}</td> <td>{{$renew_certification->user_password}}</td> <td>{{$renew_certification->person_address}}</td> <td>{{$renew_certification->person_city}}</td> <td>{{$renew_certification->person_country}}</td> <td>{{$renew_certification->person_zip_code}}</td> <td>{{$renew_certification->person_email}}</td> <td>{{$renew_certification->person_phone}}</td> <td>{{$renew_certification->work_address}}</td> <td>{{$renew_certification->work_city}}</td> <td>{{$renew_certification->work_country}}</td> <td>{{$renew_certification->work_zip_code}}</td> <td>{{$renew_certification->work_email}}</td> <td>{{$renew_certification->work_phone}}</td> <td>{{$renew_certification->work_type}}</td> <td>{{$renew_certification->company_name}}</td> <td>{{$renew_certification->from_date}}</td> <td>{{$renew_certification->to_date}}</td> <td>{{$renew_certification->company_address}}</td> <td>{{$renew_certification->company_city}}</td> <td>{{$renew_certification->company_province}}</td> <td>{{$renew_certification->company_country}}</td> <td>{{$renew_certification->company_zip_code}}</td> <td>{{$renew_certification->title}}</td> <td>{{$renew_certification->description}}</td> <td>{{$renew_certification->deleted}}</td> <td>{{$renew_certification->status}}</td> <td>{{$renew_certification->created_by}}</td> <td>{{$renew_certification->last_updated_by}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('renew_certifications.show', $renew_certification->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('renew_certifications.edit', $renew_certification->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('renew_certifications.destroy', $renew_certification->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $renew_certifications->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection