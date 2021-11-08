@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">        
        {{-- <h1>Visualizza della categoria {{ $category->id }}</h1> --}}
        <h2>{{ $category->name }}</h2>

        <small>Lo slug è: {{ $category->slug }}</small>
        <div class="col-12 m-5">
          <h2>Lista dei post collegati alla categoria:</h2>
          <ul>
            {{-- @foreach ($category->posts as $post)
              <li><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></li>            
            @endforeach --}}
            @forelse ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></li>
            @empty
                <p>Non sono presenti post</p>
            @endforelse
          </ul>
        </div>
       
      </div>
    </div>
  </div>
  <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Torna alle categorie</a>
    
@endsection
