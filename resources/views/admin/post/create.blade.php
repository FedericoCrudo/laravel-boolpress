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

  @foreach($tags as $items)
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="tags[]"  id="flexCheckChecked" value="{{$items->id}}">
    <label class="form-check-label" for="flexCheckChecked">
     {{$items->name}}
    </label>
  </div>
  @endforeach

  
  <button type="submit" class="btn btn-success mt-10">Submit</button>
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