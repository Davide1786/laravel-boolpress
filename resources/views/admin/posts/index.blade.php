@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
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
                    <a href="{{ route('admin.posts.edit', $post->id ) }}" class="btn btn-dark">Modifica Post</a>
                    <form action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST" class="d-inline confirm-delete-post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    {{-- <a href="{{ route('admin.posts.destroy', $post->id ) }}" class="btn btn-danger">Delete</a> --}}
                  </div>
              </div>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
    
@endsection