<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //

            // public function basic_email() 
            // {

            //     $data = array('name'=>"Test email");
            
            //     Mail::send(['text'=>'mail'], $data, function($message) {
            //     $message->to('gueykarim@gmail.com', 'Test email')->subject('Laravel Basic Testing Mail');
            //     $message->from('gueykarim@gmail.com','Test email');
            //     });
            //     return back();
            // }

                    public function html_email(Request $request) 
                    {
                           
                            $msgFrom=$request->input('email');
                            $msgsubject=$request->input('sujet');
                            $msgbody=$request->input('message');
                            $nom=$request->input('nom');


                        $data = array('name'=>"Virat Gandhi");
                        
                        Mail::send('mail', $data, function($message) {
                        $message->to('gueykarim@gmail.com', 'Tutorials Point')->subject
                            ('Laravel HTML Testing Mail');
                        $message->from('xyz@gmail.com','Virat Gandhi');
                        });
                        echo "HTML Email Sent. Check your inbox.";
                    }


    
    //  public function attachment_email() 
    // {
    //     $data = array('name'=>"Virat Gandhi");
    //     Mail::send('mail', $data, function($message) {
    //        $message->to('abc@gmail.com', 'Tutorials Point')->subject
    //           ('Laravel Testing Mail with Attachment');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
    //        $message->from('xyz@gmail.com','Virat Gandhi');
    //     });
    //     echo "Email Sent with attachment. Check your inbox.";
    //  }
}
