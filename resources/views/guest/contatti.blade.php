
@extends('layouts.app')


@section('content')

<!--Section: Contact v.2-->
<section class="mb-4">
    <div class="container">
    <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Avete domande? Non esitate a contattarci direttamente. Il nostro team ti ricontatterà entro poche ore per aiutarti.</p>

         @if(session('status')=='ok')         
            <div class="message succes mb-2">
                <span>MEssaggio inviato con successo,verrai contattato il prima possibile </span>
            </div> 
         @endif    
            <form id="contact-form" name="contact-form" action="{{ route('guest.contatti.send')}}" method="POST">
            @csrf
            @method('POST')
            
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
               
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Messaggio</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>

</div>
</section>

     
        
     
      
    

@endsection
