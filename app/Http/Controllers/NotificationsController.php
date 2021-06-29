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
        'surname'=> $request->surname,
        'lastname'=> $request->lastname,
        'dmessage' => $request->message,
        'email' => $request->email,
        'phone' => $request->phone,
      );

      $adress = $request->email;
      $customer = 1;

        Mail::send('mails.notification', $data, function($message) use($data){
           $message->to('info@tka-software-systems.de', 'Sie haben eine Anfrage erhalten')
           ->subject('Anfrage');
           $message->from('info@tka-software-systems.de','Test Robot');
        });

        $data['customer'] = $customer;

        Mail::send('mails.notification', $data, function($message) use($data, $adress){


           $message->to($adress, 'Wir haben Ihre Nachricht erhalten')
           ->subject('Wir haben Ihre Nachricht erhalten');
           $message->from('info@tka-software-systems.de','Kundendienst');
        });

        return redirect()->back();
    }
    public function setCookies()
    {
      session(['cookies' => 'true']);
    }
}
