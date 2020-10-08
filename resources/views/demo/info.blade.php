@extends('demo.base')
@section('title','首页')

@section('main')
    <p>我是main的内容</p>
@endsection

@section('nav')
    @parent
{{--    <p>我是替换主模板的nav部分</p>--}}
    <p>我是主模板的nav部分之后追加的</p>
@endsection