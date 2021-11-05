@extends('layouts.dashboard')

@section('content')
    <ul>
        @foreach ($posts as $post)
            {{-- <li><a href="{{ route('admin.posts.show', $post->id)}}">{{ $post->title }}</a></li> --}}
            <div class="card">
                <div class="card-header">
                  {{$post->title}}
                </div>
                <div class="card-body">
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="{{ route('admin.posts.show', $post->id ) }}" class="btn btn-primary">Vai al dettaglio</a>
                </div>
            </div>
        @endforeach
    </ul>
@endsection