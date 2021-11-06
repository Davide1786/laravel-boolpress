@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
{{-- <li><a href="{{ route('admin.posts.show', $post->id)}}">{{ $post->title }}</a></li> --}}
<div class="card">
    <div class="card-header">
      {{$post->title}}
    </div>
    <div class="card-body">
      {{-- <p class="card-text">{{$post->content}}</p> --}}
      <a href="{{ route('posts.show', $post->id )}}" class="btn btn-danger">Dettaglio</a>
      <a href="{{route('index')}}" class="btn btn-primary">Torna alla home</a>
    </div>
</div>
@endforeach
    
@endsection