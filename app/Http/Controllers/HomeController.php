<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.home');
    }
    public function contatti()
    {
        return view('guest.contatti');
    }
    public function contattisend (Request $request)
    {
        $data=$request->all();
        $newlead= new Lead();
        $newlead->fill($data);
        $newlead->save();
        Mail::to('assistenza@boolpress.com')->send(new SendNewMail($newlead));
        return redirect()->route('guest.contatti')->with('status','ok');
      
    }

    
}
