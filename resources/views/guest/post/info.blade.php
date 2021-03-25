@extends('layouts.app')
@section('title','Info Post')
@section('content')


    <h2></h2>
    <div class="container">
    
        
        <div style="margin-bottom:20px;" class="card ">
            <div class="card-header d-flex justify-content-between">
               <span>{{$post->user->name}}</span> 
                <span>{{$post->user->created_at}}</span>
                </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
            </div>
        </div>

    


    </div>


@endsection