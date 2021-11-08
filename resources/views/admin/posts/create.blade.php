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
          <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
              <option value="">-- Seleziona Categoria --</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                  {{ old('category_id') == $category->id ? 'selected' : null }}
                  >{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
  
          <button type="submit" class="btn btn-primary">Crea nuovo post</button>
        </form>
      </div>
    </div>

  </div>   
    


    
@endsection