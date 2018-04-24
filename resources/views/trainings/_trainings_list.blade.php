@if (count($trainings))
{{--@if($trainings->count())--}}
	<table class="table table-striped">
		<thead>
		<tr>
			<th class="text-center">#</th>
			<th>{{ trans('training.course_name') }}</th> <th class="hidden-xs">{{ trans('training.course_code') }}</th>
			<th>{{ trans('training.remaining_seats') }}</th> <th class="hidden-xs">{{ trans('training.location') }}</th>
			<th>{{ trans('training.start_day') }}</th> <th class="hidden-xs">{{ trans('training.end_day') }}</th>
			<th class="text-right">{{ trans('training.registration') }}</th>
		</tr>
		</thead>

		<tbody>
		@foreach($trainings as $key => $training)
			<tr>
				<td class="text-center"><strong>{{ $key + 1 }}</strong></td>

				<td>
					<a href="{{ route('trainings.show', $training->id) }}">
						@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
							{{$training->name}}
						@else
							@if( $training->en_name != null &&  $training->en_name != '')
								{{$training->en_name}}
							@else
								{{$training->name}}
							@endif
						@endif
					</a>
				</td>

				<td class="hidden-xs">{{$training->number}}</td>
				<td><strong>{{ $training->total - $training->apply_count }}</strong></td>
				<td class="hidden-xs">
					@if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
						{{ str_limit( $training->location, 20) }}
					@else
						@if( $training->en_location != null &&  $training->en_location != '')
							{{ str_limit( $training->en_location, 20) }}
						@else
							{{ str_limit( $training->location, 20) }}
						@endif
					@endif
				</td>
				<td>{{ date('Y-m-d', strtotime($training->start_date)) }}</td>
				<td class="hidden-xs">{{ date('Y-m-d', strtotime($training->end_date)) }}</td>

				<td class="text-right">
					<a class="btn btn-xs btn-primary" href="{{ route('register_courses.create', $training->id) }}">
						报名
					</a>

					{{--<form action="{{ route('trainings.destroy', $training->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">--}}
					{{--{{csrf_field()}}--}}
					{{--<input type="hidden" name="_method" value="DELETE">--}}

					{{--<button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>--}}
					{{--</form>--}}
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{!! $trainings->render() !!}
@else
	<table class="table table-striped">
		<thead>
		<tr>
			<th class="text-center">#</th>
			<th>课程名称</th> <th class="hidden-xs">课程编号</th>
			<th>剩余名额</th> <th class="hidden-xs">培训地点</th>
			<th>开始时间</th> <th class="hidden-xs">结束时间</th>
			<th class="text-right">操作</th>
		</tr>
		</thead>

		<tbody>
			<tr>
				<td colspan="8">
					<h3 class="text-center alert alert-info">Empty!</h3>
				</td>
			</tr>
		</tbody>
	</table>

@endif