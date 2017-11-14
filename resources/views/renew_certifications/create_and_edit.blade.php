@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> RenewCertification /
                    @if($renew_certification->id)
                        Edit #{{$renew_certification->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($renew_certification->id)
                    <form action="{{ route('renew_certifications.update', $renew_certification->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('renew_certifications.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $renew_certification->user_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="number-field">Number</label>
                	<input class="form-control" type="text" name="number" id="number-field" value="{{ old('number', $renew_certification->number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="level-field">Level</label>
                	<input class="form-control" type="text" name="level" id="level-field" value="{{ old('level', $renew_certification->level ) }}" />
                </div> 
                <div class="form-group">
                	<label for="first_name-field">First_name</label>
                	<input class="form-control" type="text" name="first_name" id="first_name-field" value="{{ old('first_name', $renew_certification->first_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="last_name-field">Last_name</label>
                	<input class="form-control" type="text" name="last_name" id="last_name-field" value="{{ old('last_name', $renew_certification->last_name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="birth_date-field">Birth_date</label>
                    <input class="form-control" type="text" name="birth_date" id="birth_date-field" value="{{ old('birth_date', $renew_certification->birth_date ) }}" />
                </div> 
                <div class="form-group">
                	<label for="user_name-field">User_name</label>
                	<input class="form-control" type="text" name="user_name" id="user_name-field" value="{{ old('user_name', $renew_certification->user_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="user_password-field">User_password</label>
                	<input class="form-control" type="text" name="user_password" id="user_password-field" value="{{ old('user_password', $renew_certification->user_password ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_address-field">Person_address</label>
                	<input class="form-control" type="text" name="person_address" id="person_address-field" value="{{ old('person_address', $renew_certification->person_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_city-field">Person_city</label>
                	<input class="form-control" type="text" name="person_city" id="person_city-field" value="{{ old('person_city', $renew_certification->person_city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_country-field">Person_country</label>
                	<input class="form-control" type="text" name="person_country" id="person_country-field" value="{{ old('person_country', $renew_certification->person_country ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_zip_code-field">Person_zip_code</label>
                	<input class="form-control" type="text" name="person_zip_code" id="person_zip_code-field" value="{{ old('person_zip_code', $renew_certification->person_zip_code ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_email-field">Person_email</label>
                	<input class="form-control" type="text" name="person_email" id="person_email-field" value="{{ old('person_email', $renew_certification->person_email ) }}" />
                </div> 
                <div class="form-group">
                	<label for="person_phone-field">Person_phone</label>
                	<input class="form-control" type="text" name="person_phone" id="person_phone-field" value="{{ old('person_phone', $renew_certification->person_phone ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_address-field">Work_address</label>
                	<input class="form-control" type="text" name="work_address" id="work_address-field" value="{{ old('work_address', $renew_certification->work_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_city-field">Work_city</label>
                	<input class="form-control" type="text" name="work_city" id="work_city-field" value="{{ old('work_city', $renew_certification->work_city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_country-field">Work_country</label>
                	<input class="form-control" type="text" name="work_country" id="work_country-field" value="{{ old('work_country', $renew_certification->work_country ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_zip_code-field">Work_zip_code</label>
                	<input class="form-control" type="text" name="work_zip_code" id="work_zip_code-field" value="{{ old('work_zip_code', $renew_certification->work_zip_code ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_email-field">Work_email</label>
                	<input class="form-control" type="text" name="work_email" id="work_email-field" value="{{ old('work_email', $renew_certification->work_email ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_phone-field">Work_phone</label>
                	<input class="form-control" type="text" name="work_phone" id="work_phone-field" value="{{ old('work_phone', $renew_certification->work_phone ) }}" />
                </div> 
                <div class="form-group">
                	<label for="work_type-field">Work_type</label>
                	<input class="form-control" type="text" name="work_type" id="work_type-field" value="{{ old('work_type', $renew_certification->work_type ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_name-field">Company_name</label>
                	<input class="form-control" type="text" name="company_name" id="company_name-field" value="{{ old('company_name', $renew_certification->company_name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="from_date-field">From_date</label>
                    <input class="form-control" type="text" name="from_date" id="from_date-field" value="{{ old('from_date', $renew_certification->from_date ) }}" />
                </div> 
                <div class="form-group">
                    <label for="to_date-field">To_date</label>
                    <input class="form-control" type="text" name="to_date" id="to_date-field" value="{{ old('to_date', $renew_certification->to_date ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_address-field">Company_address</label>
                	<input class="form-control" type="text" name="company_address" id="company_address-field" value="{{ old('company_address', $renew_certification->company_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_city-field">Company_city</label>
                	<input class="form-control" type="text" name="company_city" id="company_city-field" value="{{ old('company_city', $renew_certification->company_city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_province-field">Company_province</label>
                	<input class="form-control" type="text" name="company_province" id="company_province-field" value="{{ old('company_province', $renew_certification->company_province ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_country-field">Company_country</label>
                	<input class="form-control" type="text" name="company_country" id="company_country-field" value="{{ old('company_country', $renew_certification->company_country ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_zip_code-field">Company_zip_code</label>
                	<input class="form-control" type="text" name="company_zip_code" id="company_zip_code-field" value="{{ old('company_zip_code', $renew_certification->company_zip_code ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $renew_certification->title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<input class="form-control" type="text" name="description" id="description-field" value="{{ old('description', $renew_certification->description ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $renew_certification->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $renew_certification->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $renew_certification->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $renew_certification->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('renew_certifications.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection