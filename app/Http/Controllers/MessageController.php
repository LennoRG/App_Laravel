<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
  public function store(){

      $message = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required'
        
      ]);

      Mail::to('lenorg24@gmail.com')->queue(new MensajeRecibido($message));

      
      return 'Mensaje Enviado';
    
  }

}
