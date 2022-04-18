<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactanos;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    //
    public function index()
    {
        return view('contactanos');
    }

   // public function store(Request $request)
    public function store(StoreContactanos $request)
    {
        //return $request;
       /* $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);*/

        $correo = new ContactanosMailable($request->all());
        Mail::to('rrrosario16@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado correctamente');
    }
}
