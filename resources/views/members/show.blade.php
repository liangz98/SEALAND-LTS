@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Member / Show #{{ $member->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('members.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('members.edit', $member->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Member_number</label>
<p>
	{{ $member->member_number }}
</p> <label>Name</label>
<p>
	{{ $member->name }}
</p> <label>En_name</label>
<p>
	{{ $member->en_name }}
</p> <label>Sex</label>
<p>
	{{ $member->sex }}
</p> <label>Email</label>
<p>
	{{ $member->email }}
</p> <label>Oth_email</label>
<p>
	{{ $member->oth_email }}
</p> <label>Mobile_phone</label>
<p>
	{{ $member->mobile_phone }}
</p> <label>Oth_mobile_phone</label>
<p>
	{{ $member->oth_mobile_phone }}
</p> <label>Country</label>
<p>
	{{ $member->country }}
</p> <label>En_country</label>
<p>
	{{ $member->en_country }}
</p> <label>Country_code</label>
<p>
	{{ $member->country_code }}
</p> <label>State</label>
<p>
	{{ $member->state }}
</p> <label>En_state</label>
<p>
	{{ $member->en_state }}
</p> <label>State_code</label>
<p>
	{{ $member->state_code }}
</p> <label>City</label>
<p>
	{{ $member->city }}
</p> <label>En_city</label>
<p>
	{{ $member->en_city }}
</p> <label>Street</label>
<p>
	{{ $member->street }}
</p> <label>En_street</label>
<p>
	{{ $member->en_street }}
</p> <label>Address</label>
<p>
	{{ $member->address }}
</p> <label>En_address</label>
<p>
	{{ $member->en_address }}
</p> <label>Company_name</label>
<p>
	{{ $member->company_name }}
</p> <label>En_company_name</label>
<p>
	{{ $member->en_company_name }}
</p> <label>Title</label>
<p>
	{{ $member->title }}
</p> <label>Company_address</label>
<p>
	{{ $member->company_address }}
</p> <label>En_company_address</label>
<p>
	{{ $member->en_company_address }}
</p> <label>Mailing_address</label>
<p>
	{{ $member->mailing_address }}
</p> <label>En_mailing_address</label>
<p>
	{{ $member->en_mailing_address }}
</p> <label>Mailing_name</label>
<p>
	{{ $member->mailing_name }}
</p> <label>Mailing_mobile</label>
<p>
	{{ $member->mailing_mobile }}
</p> <label>Certification_id</label>
<p>
	{{ $member->certification_id }}
</p> <label>Deleted</label>
<p>
	{{ $member->deleted }}
</p> <label>Status</label>
<p>
	{{ $member->status }}
</p> <label>Created_by</label>
<p>
	{{ $member->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $member->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
