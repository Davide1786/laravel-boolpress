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
          @foreach ($categories as $category)
              <div class="card">
                  <div class="card-header">
                    {{$category->nome}}
                    {{$category->slug}}
                  </div>
                  {{-- <div class="card-header">
                    @if ($category->category)
                    {{ $category->category->name }}
                    @endif
                  </div> --}}
                  <div class="card-body">
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="{{ route('admin.categories.show', $category->id ) }}" class="btn btn-primary">Vai al dettaglio</a>
                    <a href="" class="btn btn-dark">Modifica Post</a>
                    <form action="{{ route('admin.posts.destroy', $category->id ) }}" method="POST" class="d-inline confirm-delete-post">
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