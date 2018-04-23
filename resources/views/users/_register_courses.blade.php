@if (count($registerCourses))
<table class="table table-hover table-bordered">
    <th>课程名称</th> <th>开始时间</th> <th>结束时间</th> <th>报名状态</th>
    @foreach($registerCourses as $registerCourse)
    <tr>
        <td>
            <a href="{{ route('register_courses.show', $registerCourse->id) }}">
                {{--{{ $registerCourse->training->name }}--}}
            </a>
        </td>
        <td>
            {{--{{ date('Y-m-d', strtotime($registerCourse->training->start_date)) }}--}}
        </td>
        <td>
            {{--{{ date('Y-m-d', strtotime($registerCourse->training->end_date)) }}--}}
        </td>
        <td>{{ trans('dataDict.register_course_status.'.$registerCourse->status) }}</td>
    </tr>
    @endforeach
</table>
@else
<div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $registerCourses->render() !!}