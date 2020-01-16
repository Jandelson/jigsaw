@extends('_layouts.master')
@section('body')
<ul>
  @foreach ($posts as $post)
    <li><a href="{{$post->_meta->url[0]}}">{{ $post->title }}</a></li>
  @endforeach
</ul>
<h1>Listagem de posts</h1>
@include('_layouts.post')
@endsection