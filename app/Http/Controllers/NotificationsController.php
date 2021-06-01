<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class NotificationsController extends Controller
{
    public function CustomerNotification(Request $request)
    {
      // dd($request);
      $request->validate([
        'message' => 'required',
        'email' => 'required | email',
        'surname' => 'required',
        'lastname' => 'required',

      ]);

      $data = array(
        'name'=>$request->name,
        'message' => $request->message,
        'email' => $request->email,
        'phone' => $request->phone,
      );

        Mail::send('mails.notification', $data, function($message) {
           $message->to('info@tka-software-systems.de', 'Sie haben eine Anfrage erhalten')
           ->subject('Anfrage');
           $message->from('info@tka-software-systems.de','Test Robot');
        });

        Mail::send('mails.notification', $data, function($message) {
           $message->to($request->email, 'Wir haben Ihre Nachricht erhalten')->subject
              ('Kontaktaufnahme');
           $message->from('info@tka-software-systems.de','Kundendienst');
        });

        return redirect()->back();
    }
}
