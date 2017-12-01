@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">

			<div class="panel-heading">
				<h1>
					<i class="glyphicon glyphicon-edit"></i> 编辑个人资料
				</h1>
			</div>

			@include('common.error')

			<div class="panel-body">

				<form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label for="name-field">用户名</label>
						<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name ) }}" />
					</div>
					<div class="form-group">
						<label for="email-field">邮 箱</label>
						<input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email ) }}" readonly="readonly" />
					</div>
					<div class="form-group">
						<label for="introduction-field">个人简介</label>
						<textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction ) }}</textarea>
					</div>
					<div class="form-group">
						<label for="" class="avatar-label">用户头像</label>
						<input type="file" name="avatar">

						@if($user->avatar)
							<br>
							<img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
						@endif
					</div>
					<div class="well well-sm">
						<button type="submit" class="btn btn-primary">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
	<script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
	<script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
	<script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
	<script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

	<script>
		$(document).ready(function(){
			var editor = new Simditor({
				textarea: $('#introduction-field'),
			});
		});
	</script>
@stop