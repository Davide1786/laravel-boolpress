@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        {{-- <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Slug</th>
              <th scope="col">Category</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
        </table> --}}
        <ul>
          @foreach ($posts as $post)
              <div class="card">
                  <div class="card-header">
                    {{$post->title}}
                  </div>
                  <div class="card-header">
                    @if ($post->category)
                    {{ $post->category->name }}
                    @endif
                  </div>
                  <div class="card-body">          
                    <a href="{{ route('admin.posts.show', $post->id ) }}" class="btn btn-primary">Vai al dettaglio</a>
                    <a href="{{ route('admin.posts.edit', $post->id ) }}" class="btn btn-dark">Modifica Post</a>
                    <form action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST" class="d-inline confirm-delete-post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
              </div>
          @endforeach
        </ul>
      </div>
    </div>
    </div>
  </div>
    
@endsection