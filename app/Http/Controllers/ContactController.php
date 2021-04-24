<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()

    {
     


    }

    public function store()

    {

    //  dd(request()->all());

$data=request()->validate([


  'name'=>'required',
  'email'=>'required|email',
  'message'=>'required|between:3,200'


    ]);

//on importe Mail

      Mail::to('maurice.sider29@gmail.com')->send(new ContactMail($data));
      //je creer une instance de mon contactMail
      return redirect('/')->with('success', "Votre message a bien  été envoyé !");

    }



}
