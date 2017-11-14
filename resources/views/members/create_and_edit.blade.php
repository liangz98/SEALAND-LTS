@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Member /
                    @if($member->id)
                        Edit #{{$member->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($member->id)
                    <form action="{{ route('members.update', $member->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('members.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="member_number-field">Member_number</label>
                	<input class="form-control" type="text" name="member_number" id="member_number-field" value="{{ old('member_number', $member->member_number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $member->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_name-field">En_name</label>
                	<input class="form-control" type="text" name="en_name" id="en_name-field" value="{{ old('en_name', $member->en_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="sex-field">Sex</label>
                	<input class="form-control" type="text" name="sex" id="sex-field" value="{{ old('sex', $member->sex ) }}" />
                </div> 
                <div class="form-group">
                	<label for="email-field">Email</label>
                	<input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $member->email ) }}" />
                </div> 
                <div class="form-group">
                	<label for="oth_email-field">Oth_email</label>
                	<input class="form-control" type="text" name="oth_email" id="oth_email-field" value="{{ old('oth_email', $member->oth_email ) }}" />
                </div> 
                <div class="form-group">
                	<label for="mobile_phone-field">Mobile_phone</label>
                	<input class="form-control" type="text" name="mobile_phone" id="mobile_phone-field" value="{{ old('mobile_phone', $member->mobile_phone ) }}" />
                </div> 
                <div class="form-group">
                	<label for="oth_mobile_phone-field">Oth_mobile_phone</label>
                	<input class="form-control" type="text" name="oth_mobile_phone" id="oth_mobile_phone-field" value="{{ old('oth_mobile_phone', $member->oth_mobile_phone ) }}" />
                </div> 
                <div class="form-group">
                	<label for="country-field">Country</label>
                	<input class="form-control" type="text" name="country" id="country-field" value="{{ old('country', $member->country ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_country-field">En_country</label>
                	<input class="form-control" type="text" name="en_country" id="en_country-field" value="{{ old('en_country', $member->en_country ) }}" />
                </div> 
                <div class="form-group">
                	<label for="country_code-field">Country_code</label>
                	<input class="form-control" type="text" name="country_code" id="country_code-field" value="{{ old('country_code', $member->country_code ) }}" />
                </div> 
                <div class="form-group">
                	<label for="state-field">State</label>
                	<input class="form-control" type="text" name="state" id="state-field" value="{{ old('state', $member->state ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_state-field">En_state</label>
                	<input class="form-control" type="text" name="en_state" id="en_state-field" value="{{ old('en_state', $member->en_state ) }}" />
                </div> 
                <div class="form-group">
                	<label for="state_code-field">State_code</label>
                	<input class="form-control" type="text" name="state_code" id="state_code-field" value="{{ old('state_code', $member->state_code ) }}" />
                </div> 
                <div class="form-group">
                	<label for="city-field">City</label>
                	<input class="form-control" type="text" name="city" id="city-field" value="{{ old('city', $member->city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_city-field">En_city</label>
                	<input class="form-control" type="text" name="en_city" id="en_city-field" value="{{ old('en_city', $member->en_city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="street-field">Street</label>
                	<textarea name="street" id="street-field" class="form-control" rows="3">{{ old('street', $member->street ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="en_street-field">En_street</label>
                	<textarea name="en_street" id="en_street-field" class="form-control" rows="3">{{ old('en_street', $member->en_street ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="address-field">Address</label>
                	<textarea name="address" id="address-field" class="form-control" rows="3">{{ old('address', $member->address ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="en_address-field">En_address</label>
                	<textarea name="en_address" id="en_address-field" class="form-control" rows="3">{{ old('en_address', $member->en_address ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="company_name-field">Company_name</label>
                	<input class="form-control" type="text" name="company_name" id="company_name-field" value="{{ old('company_name', $member->company_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_company_name-field">En_company_name</label>
                	<input class="form-control" type="text" name="en_company_name" id="en_company_name-field" value="{{ old('en_company_name', $member->en_company_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $member->title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="company_address-field">Company_address</label>
                	<input class="form-control" type="text" name="company_address" id="company_address-field" value="{{ old('company_address', $member->company_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_company_address-field">En_company_address</label>
                	<input class="form-control" type="text" name="en_company_address" id="en_company_address-field" value="{{ old('en_company_address', $member->en_company_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="mailing_address-field">Mailing_address</label>
                	<input class="form-control" type="text" name="mailing_address" id="mailing_address-field" value="{{ old('mailing_address', $member->mailing_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="en_mailing_address-field">En_mailing_address</label>
                	<input class="form-control" type="text" name="en_mailing_address" id="en_mailing_address-field" value="{{ old('en_mailing_address', $member->en_mailing_address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="mailing_name-field">Mailing_name</label>
                	<input class="form-control" type="text" name="mailing_name" id="mailing_name-field" value="{{ old('mailing_name', $member->mailing_name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="mailing_mobile-field">Mailing_mobile</label>
                	<input class="form-control" type="text" name="mailing_mobile" id="mailing_mobile-field" value="{{ old('mailing_mobile', $member->mailing_mobile ) }}" />
                </div> 
                <div class="form-group">
                    <label for="certification_id-field">Certification_id</label>
                    <input class="form-control" type="text" name="certification_id" id="certification_id-field" value="{{ old('certification_id', $member->certification_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="deleted-field">Deleted</label>
                    <input class="form-control" type="text" name="deleted" id="deleted-field" value="{{ old('deleted', $member->deleted ) }}" />
                </div> 
                <div class="form-group">
                	<label for="status-field">Status</label>
                	<input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $member->status ) }}" />
                </div> 
                <div class="form-group">
                    <label for="created_by-field">Created_by</label>
                    <input class="form-control" type="text" name="created_by" id="created_by-field" value="{{ old('created_by', $member->created_by ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_updated_by-field">Last_updated_by</label>
                    <input class="form-control" type="text" name="last_updated_by" id="last_updated_by-field" value="{{ old('last_updated_by', $member->last_updated_by ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('members.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection