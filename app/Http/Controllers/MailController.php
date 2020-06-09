<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller

{


    public function sendemail(Request $request){
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'sujet' => 'min:3',
        //     'message' => 'min:3'
        // ]);
        $data = array(
            'email' => $request->email,
            'sujet' => $request->sujet,
            'nom' => $request->nom,
            'emessage' => $request->emessage,
           

        );
        Mail::send('mail.mail',$data, function($message){

            $message->from('info@ivoiresn.com');
            $message->to('info@ivoiresn.com');
           
            
        });
        // Session::flash('Votre Message a bien ete envoyer ');

        return redirect('/contact');
    }



    public function sendrv(Request $request){
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'sujet' => 'min:3',
        //     'message' => 'min:3'
        // ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
           

        );
        Mail::send('mail.mailrv',$data, function($message){

            $message->from('info@ivoiresn.com');
            $message->to('info@ivoiresn.com');
           
           
            
        });
        // Session::flash('Votre Message a bien ete envoyer ');

        return redirect('/');
    }



    public function sendinscrit(Request $request){
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'sujet' => 'min:3',
        //     'message' => 'min:3'
        // ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'nom' => $request->nom,
           
            'telephone' => $request->telephone,
            'idForm' => $request->idForm,
           

        );
     
        Mail::send('mail.inscrit',$data, function($message){

            $message->from('info@ivoiresn.com');
            $message->to('info@ivoiresn.com');
           
           
            
        });
        // Session::flash('Votre Message a bien ete envoyer ');

        return redirect('/formation');
    }



    public function devis(Request $request){
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'sujet' => 'min:3',
        //     'message' => 'min:3'
        // ]);
        $data = array(
            'email' => $request->email,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'formation' => $request->formation,
            'message' => $request->message,
           

        );
    
        Mail::send('mail.devis',$data, function($message){

            $message->from('info@ivoiresn.com');
            $message->to('info@ivoiresn.com');
           
           
            
        });
        // Session::flash('Votre Message a bien ete envoyer ');

        return redirect('/formation');
    }
}
