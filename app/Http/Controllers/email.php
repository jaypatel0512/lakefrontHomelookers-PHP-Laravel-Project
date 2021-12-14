<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class email extends Controller
{
    public function index(){
        $data= ['name'=>"Neeti",'data'=>"Hello Neeti"];
        $user['to']= 'neeti.malhotra18@gmail.com';
        Mail::send('mail', $data,function($messages)use($user){
            $messages-> to($user['to']);
            $messages->subject('Test Message');
        });
    }
}
