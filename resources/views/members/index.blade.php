@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> {{ trans('commons.member') }}
                    <a class="btn btn-success pull-right" href="{{ route('members.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($members->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Member_number</th> <th>Name</th> <th>En_name</th> <th>Sex</th> <th>Email</th> <th>Oth_email</th> <th>Mobile_phone</th> <th>Oth_mobile_phone</th> <th>Country</th> <th>En_country</th> <th>Country_code</th> <th>State</th> <th>En_state</th> <th>State_code</th> <th>City</th> <th>En_city</th> <th>Street</th> <th>En_street</th> <th>Address</th> <th>En_address</th> <th>Company_name</th> <th>En_company_name</th> <th>Title</th> <th>Company_address</th> <th>En_company_address</th> <th>Mailing_address</th> <th>En_mailing_address</th> <th>Mailing_name</th> <th>Mailing_mobile</th> <th>Certification_id</th> <th>Deleted</th> <th>Status</th> <th>Created_by</th> <th>Last_updated_by</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td class="text-center"><strong>{{$member->id}}</strong></td>

                                    <td>{{$member->member_number}}</td> <td>{{$member->name}}</td> <td>{{$member->en_name}}</td> <td>{{$member->sex}}</td> <td>{{$member->email}}</td> <td>{{$member->oth_email}}</td> <td>{{$member->mobile_phone}}</td> <td>{{$member->oth_mobile_phone}}</td> <td>{{$member->country}}</td> <td>{{$member->en_country}}</td> <td>{{$member->country_code}}</td> <td>{{$member->state}}</td> <td>{{$member->en_state}}</td> <td>{{$member->state_code}}</td> <td>{{$member->city}}</td> <td>{{$member->en_city}}</td> <td>{{$member->street}}</td> <td>{{$member->en_street}}</td> <td>{{$member->address}}</td> <td>{{$member->en_address}}</td> <td>{{$member->company_name}}</td> <td>{{$member->en_company_name}}</td> <td>{{$member->title}}</td> <td>{{$member->company_address}}</td> <td>{{$member->en_company_address}}</td> <td>{{$member->mailing_address}}</td> <td>{{$member->en_mailing_address}}</td> <td>{{$member->mailing_name}}</td> <td>{{$member->mailing_mobile}}</td> <td>{{$member->certification_id}}</td> <td>{{$member->deleted}}</td> <td>{{$member->status}}</td> <td>{{$member->created_by}}</td> <td>{{$member->last_updated_by}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('members.show', $member->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('members.edit', $member->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $members->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection