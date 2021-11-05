@extends('layouts.dashboard')

@section('content')          

    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="text" class="form-label">Modifica titolo</label>
          <input type="text" name="title" class="form-control" id="text" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Modifica descrizione</label>
          <textarea name="content" id="content" class="form-control">{!! $post->content !!}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Conferma Modifica</button>
      </form>
@endsection