

@extends('layouts.appAdm')

@section('content')

    <h1>Info Post: #{{$post->id}}-{{$post->title}}-{{$post->user->name}}</h1>
    
    
    <h1>Modifica Post</h1>
<form action="{{route('post.update',$post)}}" method="post" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{$post->title}}" id="title" name="title" aria-describedby="emailHelp" placeholder="title...">
  </div>
  
  
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleFormControlFile1">Modifica Immagine</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>
    </div>
    <div class="col-sm">
    @if($post->cover)
    <div class="d-flex flex-column ">
      <span class="font-weight-bold">immagine Attuale</span>
      <img class="img-card" src="{{asset('storage/'.$post->cover)}}" alt="">
    </div>
     @endif
    </div>
    <div class="col-sm">
      <div class="d-flex flex-column ">
        <span class="font-weight-bold">Anteprima</span>
        <img class="img-card" src="{{asset('storage/'.$post->cover)}}" alt="">
     </div>
    </div>
  </div>
  
 






  
  
  
  
  
  
  
  
  <div class="form-group">
    <label for="content">Descrizione</label>
    <textarea type="text" class="form-control"  id="content" name="content" placeholder="Descrizione...">{{$post->content}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>
      
    
        
           
@endsection





</div>