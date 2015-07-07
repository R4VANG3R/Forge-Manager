@extends('master.layout')

@section('title', 'Console')

@section('meta')
    @parent
    {{--append here--}}
@endsection

@section('css')
    @parent
    {{--append here--}}
@endsection

@section('scripts')
    @parent
    {{--append here--}}
@endsection

@section('body')
    @parent
    {{--append here--}}
@endsection

@section('js')
    @parent
    {{----}}
    @include('console.scripts')
@endsection

