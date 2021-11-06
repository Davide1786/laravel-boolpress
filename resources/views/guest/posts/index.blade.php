@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
      {{$post->title}}
    </div>
    <div class="card-body">
      <a href="{{ route('posts.show', $post->id )}}" class="btn btn-primary">Dettaglio</a>
    </div>
</div>
@endforeach
{{-- <div class="container">
  <div class="row">
    <div class="col-12">
      <a href="{{route('index')}}" class="btn btn-primary">Torna alla home</a>
    </div>
  </div>
</div> --}}
    
@endsection