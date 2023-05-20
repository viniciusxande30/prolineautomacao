<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function homeIndex(){
        return view('welcome');
    }


    public function quotationApi(){
    
    Mail::raw('Nova Cotação Pro Line | '.'Nome: '.$_POST['name'].' - Telefone: '.$_POST['phone'].'- E-mail : '.$_POST['email'].'- Mensagem : '.$_POST['msg'], function ($message){
      $message->to('comercial@rsweb.com.br')
    ->subject('Nova Cotação da RS Web')
    ->from('comercial@rsweb.com.br');
    });
  
      return redirect()->route('homeIndex');
      }


}
