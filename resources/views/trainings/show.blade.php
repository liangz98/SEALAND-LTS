@extends('layouts.app')

@section('content')
<section class="trainings-body">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Training / {{ $training->name }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-primary pull-right" href="{{ route('register_courses.create', $training->id) }}">
                                <i class="fa fa-puzzle-piece"></i> 报名
                            </a>
                        </div>
                    </div>
                </div>

                <table class="table table-hover">
                    <tr>
                        <td class="text-center">课程</td>
                        <td>
                            <label>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                                    {{$training->name}}
                                @else
                                    @if( $training->en_name != null &&  $training->en_name != '')
                                        {{$training->en_name}}
                                    @else
                                        {{$training->name}}
                                    @endif
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">课程编号</td>
                        <td><label>{{ $training->number }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">课程级别</td>
                        <td>
                            <label>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                                    {{$training->level}}
                                @else
                                    @if( $training->en_level != null &&  $training->en_level != '')
                                        {{$training->en_level}}
                                    @else
                                        {{$training->level}}
                                    @endif
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">课程内容</td>
                        <td>
                            <label>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                                    {{$training->content}}
                                @else
                                    @if( $training->en_content != null &&  $training->en_content != '')
                                        {{$training->en_content}}
                                    @else
                                        {{$training->content}}
                                    @endif
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">培训地点</td>
                        <td>
                            <label>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                                    {{$training->location}}
                                @else
                                    @if( $training->en_location != null &&  $training->en_location != '')
                                        {{$training->en_location}}
                                    @else
                                        {{$training->location}}
                                    @endif
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">详细地址</td>
                        <td>
                            <label>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'zh-CN')
                                    {{$training->address}}
                                @else
                                    @if( $training->en_address != null &&  $training->en_address != '')
                                        {{$training->en_address}}
                                    @else
                                        {{$training->address}}
                                    @endif
                                @endif
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">开始时间</td>
                        <td><label>{{ date('Y-m-d', strtotime($training->start_date)) }}</label></td>
                    </tr>
                    <tr>
                        <td class="text-center">结束时间</td>
                        <td><label>{{ date('Y-m-d', strtotime($training->end_date)) }}</label></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
