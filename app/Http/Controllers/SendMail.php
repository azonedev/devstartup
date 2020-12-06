<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendMail extends Controller
{
    function index(){

      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('abdullah914115@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('mail@gmail.com','Virat Gandhi');
      });

    	return 'mail send success';
    }
}
