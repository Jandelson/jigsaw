@extends('_layouts.master')

@section('body')
    <h1>{{ $page->title }}</h1>
    <p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @yield('content')

    <p>Total de {{ $posts->count() }} posts</p>

    <p>Listagem:</p>
    <ul>
    @foreach ($posts as $post)
        <li>
          <a class="{{ $page->selected($post->_meta->url[0]) }}" href="{{$post->_meta->url[0]}}">{{ $post->title }}</a>
        </li>
    @endforeach
    </ul>

@endsection