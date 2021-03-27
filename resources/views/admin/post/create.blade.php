@extends('layouts.appAdm')

@section('content')
<h1>Aggiungi Post</h1>
    @if (session('success') )
  
    @endif
<form action="{{route('post.store')}}" method="post">
    @method('POST')
    @csrf
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Nome...">
  </div>
  <div class="form-group">
    <label for="content">Descrizione</label>
    <textarea type="text" class="form-control" id="descrizione" name="content" placeholder="Descrizione..."></textarea>
  </div>

  
  <button type="submit" class="btn btn-success">Submit</button>
</form>


     
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @if(session('add')) 
        <script>
           Swal.fire({
         
            icon: 'success',
        title: 'Elemento Aggiunto con successo',
        showConfirmButton: false,
        timer: 1500
})
      </script>
  @endif
@endsection