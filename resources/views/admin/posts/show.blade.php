@extends('layouts.dashboard')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->content}}</p>
                    <div class="test">
                        <small>Lo slug è: {{$post->slug}}</small>
                    </div>
                    <div class="test">
                        <small>Categoria di appartenenza: <a href="{{ route('admin.categories.show', $post->category->id) }}">{{$post->slug}}</a></small>
                    </div>
                    <a href="{{ route('admin.posts.index', $post->id ) }}" class="btn btn-primary">Torna alla lista dei post</a>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Torna alle categorie</a>
                </div>
            </div>
        </div>
    </div>
</div>      

@endsection