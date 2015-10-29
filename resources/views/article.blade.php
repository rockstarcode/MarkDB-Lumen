@extends('layouts.layout',['title'=>'Welcome'])
@section('body')
    <h1>{{$article->title}}</h1>
    <a href="{{route('welcome')}}"><< Back</a>
    <hr>
    {!! $article->content() !!}
@stop