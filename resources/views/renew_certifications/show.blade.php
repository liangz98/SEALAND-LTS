@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>RenewCertification / Show #{{ $renew_certification->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('renew_certifications.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('renew_certifications.edit', $renew_certification->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $renew_certification->user_id }}
</p> <label>Number</label>
<p>
	{{ $renew_certification->number }}
</p> <label>Level</label>
<p>
	{{ $renew_certification->level }}
</p> <label>First_name</label>
<p>
	{{ $renew_certification->first_name }}
</p> <label>Last_name</label>
<p>
	{{ $renew_certification->last_name }}
</p> <label>Birth_date</label>
<p>
	{{ $renew_certification->birth_date }}
</p> <label>User_name</label>
<p>
	{{ $renew_certification->user_name }}
</p> <label>User_password</label>
<p>
	{{ $renew_certification->user_password }}
</p> <label>Person_address</label>
<p>
	{{ $renew_certification->person_address }}
</p> <label>Person_city</label>
<p>
	{{ $renew_certification->person_city }}
</p> <label>Person_country</label>
<p>
	{{ $renew_certification->person_country }}
</p> <label>Person_zip_code</label>
<p>
	{{ $renew_certification->person_zip_code }}
</p> <label>Person_email</label>
<p>
	{{ $renew_certification->person_email }}
</p> <label>Person_phone</label>
<p>
	{{ $renew_certification->person_phone }}
</p> <label>Work_address</label>
<p>
	{{ $renew_certification->work_address }}
</p> <label>Work_city</label>
<p>
	{{ $renew_certification->work_city }}
</p> <label>Work_country</label>
<p>
	{{ $renew_certification->work_country }}
</p> <label>Work_zip_code</label>
<p>
	{{ $renew_certification->work_zip_code }}
</p> <label>Work_email</label>
<p>
	{{ $renew_certification->work_email }}
</p> <label>Work_phone</label>
<p>
	{{ $renew_certification->work_phone }}
</p> <label>Work_type</label>
<p>
	{{ $renew_certification->work_type }}
</p> <label>Company_name</label>
<p>
	{{ $renew_certification->company_name }}
</p> <label>From_date</label>
<p>
	{{ $renew_certification->from_date }}
</p> <label>To_date</label>
<p>
	{{ $renew_certification->to_date }}
</p> <label>Company_address</label>
<p>
	{{ $renew_certification->company_address }}
</p> <label>Company_city</label>
<p>
	{{ $renew_certification->company_city }}
</p> <label>Company_province</label>
<p>
	{{ $renew_certification->company_province }}
</p> <label>Company_country</label>
<p>
	{{ $renew_certification->company_country }}
</p> <label>Company_zip_code</label>
<p>
	{{ $renew_certification->company_zip_code }}
</p> <label>Title</label>
<p>
	{{ $renew_certification->title }}
</p> <label>Description</label>
<p>
	{{ $renew_certification->description }}
</p> <label>Deleted</label>
<p>
	{{ $renew_certification->deleted }}
</p> <label>Status</label>
<p>
	{{ $renew_certification->status }}
</p> <label>Created_by</label>
<p>
	{{ $renew_certification->created_by }}
</p> <label>Last_updated_by</label>
<p>
	{{ $renew_certification->last_updated_by }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
