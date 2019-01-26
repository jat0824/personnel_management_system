@extends('common.layouts')

@section('content')

    {{--@include('common.validator')--}}

    @include('common.message')

    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">新增培训课程信息</div>
        <div class="panel-body">
            @include('info.course.form')
            {{--@include('info.staff.testform')--}}
        </div>
    </div>

@stop