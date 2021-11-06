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
                    <a href="{{ route('admin.posts.index', $post->id ) }}" class="btn btn-primary">Torna alla lista</a>
                </div>
            </div>
        </div>
    </div>
</div>      

@endsection