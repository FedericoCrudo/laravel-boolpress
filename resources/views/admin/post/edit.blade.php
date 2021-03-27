

@extends('layouts.appAdm')

@section('content')

    <h1>Info Post: #{{$post->id}}-{{$post->title}}-{{$post->user->name}}</h1>
    
    
    <h1>Aggiungi Post</h1>
<form action="{{route('post.update',$post)}}" method="post">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{$post->title}}" id="title" name="title" aria-describedby="emailHelp" placeholder="title...">
  </div>
  <div class="form-group">
    <label for="content">Descrizione</label>
    <textarea type="text" class="form-control"  id="content" name="content" placeholder="Descrizione...">{{$post->content}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>
      
    
        
           
@endsection





</div>