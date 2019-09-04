<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
  public function store(){

      request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'contect' => 'required'
      ]);

      return 'Datos Validado';
    
  }

}
