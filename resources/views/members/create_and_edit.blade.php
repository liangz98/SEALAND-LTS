@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> NACE会员申请
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
				<form class="form-horizontal" action="{{ route('members.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


					<div class="form-group">
						<label for="name-field" class="col-sm-2 control-label">姓名</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $member->name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="en_name-field" class="col-sm-2 control-label">英文名</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="en_name" id="en_name-field" value="{{ old('en_name', $member->en_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="mobile_phone-field" class="col-sm-2 control-label">手机号码</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="mobile_phone" id="mobile_phone-field" value="{{ old('mobile_phone', $member->mobile_phone ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="email-field" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $member->email ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="company_name-field" class="col-sm-2 control-label">公司名称</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="company_name" id="company_name-field" value="{{ old('company_name', $member->company_name ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="country-field" class="col-sm-2 control-label">国家</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="country" id="country-field" value="{{ old('country', $member->country ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="city-field" class="col-sm-2 control-label">城市</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="city" id="city-field" value="{{ old('city', $member->city ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="address-field" class="col-sm-2 control-label">地址</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="address" id="address-field" value="{{ old('address', $member->address ) }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="zip_code-field" class="col-sm-2 control-label">邮编</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="zip_code" id="zip_code-field" value="{{ old('zip_code', $member->zip_code ) }}" />
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">提交</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection