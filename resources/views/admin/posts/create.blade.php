@extends('layouts.dashboard')

@section('content')          
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ciao sono la nuova vista</h1>
            </div>
        </div>
    </div> --}}
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="text" class="form-label">Inserisci un titolo</label>
          <input type="text" name="title" class="form-control" id="text" placeholder="Inserisci un titolo per il tuo post">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Inserisci una descrizione</label>
          <textarea name="content" id="content" class="form-control" placeholder="Inserisci del testo"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection