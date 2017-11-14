@if (count($replies))

	<ul class="list-group">
		@foreach ($replies as $reply)
			<li class="list-group-item">
				{{--<a href="{{ $reply->topic->links(['#_replies' . $reply->id]) }}">--}}
				{{--<a href="{{ $reply->topic->link() }}">--}}
				{{--<a href="{{ $replies->link() }}">--}}
				<a href="{{ route('topics.show', $reply->topic->id) }}">
					{{ $reply->topic->title }}
				</a>

				<div class="rpely-content" style="margin: 6px 0;">
					{!! $reply->content !!}
				</div>

				<div class="meta">
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 回复于 {{ $reply->created_at->diffForHumans() }}
				</div>
			</li>
		@endforeach
	</ul>

@else
	<div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{{--appends() 方法可以使 URI 中的请求参数得到继承。--}}
{!! $replies->appends(Request::except('page'))->render() !!}