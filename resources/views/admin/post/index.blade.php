@extends('layouts.appAdm')

@section('content')

    <h1>Lista Posts</h1>
    <div class="add">
            <button type="button" class="btn btn-success"> <a class="text-white text-decoration-none"  href="{{route('post.create')}}">Aggiungi Post</a></button>

    </div>

        <table class="table w-0">
    <thead>
        <tr>
        <th scope="col">#ID</th>
        <th scope="col">Titolo</th>
        
        <th scope="col">Slug</th>
        <th scope="col">Operazioni</th>
        </tr>
    </thead>
    <tbody>
    @foreach($post as $items)
        <tr>
        <th scope="row">{{$items->id}}</th>
        <td>{{$items->title}}</td>
        
        <td>{{$items->slug}}</td>
        <td>
            <button class="btn btn-info"><a class="text-white text-decoration-none"href="{{route('post.show',['post'=>$items->id])}}">Info</a></button>
            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none"href="{{route('post.edit',['post'=>$items->id])}}">Edit</a></button>
            <form action="{{route('post.destroy', $items->id)}}" class="d-inline-block" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none">Delete</a></button>       

            </form>
  
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    
        
           
@endsection