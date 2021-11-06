@extends('layouts.dashboard')

@section('content')   
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="{{ route('admin.posts.store') }}" method="post">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label for="text" class="form-label">Inserisci un titolo</label>
            <input type="text" name="title" class="form-control" id="text" placeholder="Inserisci un titolo per il tuo post" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">Inserisci una descrizione</label>
            <textarea name="content" id="content" class="form-control" class="@error('content') is-invalid @enderror" placeholder="Inserisci del testo">{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
  
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>       


    
@endsection