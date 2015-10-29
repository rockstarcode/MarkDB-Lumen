@extends('layouts.layout',['title'=>$page->title])
@section('body')
    {!! $page->content() !!}
@stop