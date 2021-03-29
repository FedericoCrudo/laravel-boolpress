
@extends('layouts.app')


@section('content')
         @if(session('status'))         
        <h3>MEssaggio inviato con successo</h3>
        @else
        <h3>Servizio momentaneamente non disponibile</h3>
        @endif
@endsection
