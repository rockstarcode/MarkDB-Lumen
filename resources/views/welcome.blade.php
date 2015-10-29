@extends('layouts.layout',['title'=>'Welcome'])
@section('body')
    <h1>My Blog Posts</h1>
    <ul class="uk-list">
    @foreach($articles as $article)
        <li><a href="{{route('article',['slug'=>$article->slug])}}">{{$article->title}}</a></li>
    @endforeach
    </ul>
@stop