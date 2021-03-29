
@extends('layouts.appAdm')

@section('content')

    <h1>Info Post: #{{$post->id}}-{{$post->title}}-{{$post->user->name}}</h1>
    
    <div style="margin-bottom:20px;" class="card ">
            <div class="card-header d-flex justify-content-between">
               <span>Nome Utente: {{$post->user->name}}</span> 
                <span>Data Creazione: {{$post->user->created_at}}</span>
                </div>
            <div class="card-body">
                <h5 class="card-title"> <span class="font-weight-bold">Titolo:</span>   {{$post->title}}</h5>
                <p class="card-text">
                    <span class="font-weight-bold">Contenuto:</span>
                     
                    <br> {{$post->content}}</p>
                <p class="card-text">
                    <span class="font-weight-bold">Slag:</span>    
                
                     {{$post->slug}}
                </p>
                <p class="card-text">
                    <span class="font-weight-bold">IMG:</span>    
                        <img class="img-card" src="{{asset('storage/'.$post->cover)}}" alt="">
                     
                </p>
                
            </div>
        
        
        </div>
        <div class="tool">
           
            <form action="{{route('post.destroy', $post->id)}}" class="d-inline-block" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none">Delete</a></button>       

            </form>

        </div>
      
    
        
           
@endsection



