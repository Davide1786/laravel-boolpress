@extends('layouts.dashboard')

@section('content') 

<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="text" class="form-label">Modifica titolo</label>
          <input type="text" name="title" class="form-control" id="text" value="{{ old( 'title', $post->title) }}" class="@error('title') is-invalid @enderror">
          @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Modifica descrizione</label>
          <textarea name="content" id="content" class="form-control" class="@error('content') is-invalid @enderror">{!! old( 'contetn', $post->content) !!}</textarea>
          @error('content')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Conferma Modifica</button>
        <a href="{{ route('admin.posts.index', $post->id ) }}" class="btn btn-primary">Torna alla lista</a>

      </form>
    </div>
  </div>
</div>


@endsection