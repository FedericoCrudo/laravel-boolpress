@extends('layouts.app')
@section('title','Post')
@section('content')


    <h2>Elenco Post</h2>
    <div class="container">
    
        @foreach($post as $items)
        <div style="margin-bottom:20px;" class="card ">
            <div class="card-header d-flex justify-content-between">
               <span>{{$items->user->name}}</span> 
                <span>{{$items->user->created_at}}</span>
                </div>
            <div class="card-body">
                <h5 class="card-title">{{$items->title}}</h5>
                <p class="card-text">{{$items->content}}</p>
                <a href="#" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    


    </div>


@endsection