<?php

namespace App\Http\Controllers;

use App\Models\mailSend;
use App\Models\Message;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Exonet\SecureMessage\SecureMessage;

use App\Mail\SecureMessageVeriCodeMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
    function index (Request $request, $id = null) {
        if ($id != null) {
            $email_already_send = mailSend::select('email_send')->where('msg_id', $id)->first();

            //checks if the id is existing
            if ($email_already_send != null) {

                //checks if the email is already send
                if ($email_already_send->email_send == 0) {

                    //if the mail is sent update the email_send to 1
                    mailSend::where('msg_id', $id)->update(['email_send' => 1]);

                    $getData = mailSend::select('code_with_salt', 'email')->where('msg_id', $id)->first();

                    $code_with_salt = Crypt::decryptString($getData->code_with_salt);

                    //removes the salt from the decrypted value
                    $code_without_salt = str_replace('eiZCn!Ylg33%#JDIDVTg', '', $code_with_salt);

                    $data = [
                        'code' => $code_without_salt,
                    ];

                    Mail::to($getData->email)->send(new SecureMessageVeriCodeMail($data));

                }

            }

        }

        return view('login', compact('id'));
    }

    function store (Request $request) {
        $args = $request->validate([
            'id' => ['bail', 'required'],
            'code' => ['required', 'size:10'],
        ]);

        $result = Message::where('id', $request->id)->first();

        //if the $result has a value execute the decrypt function, if not message back
         if ($result) {
             $decrypted = \SecureMessage::decryptMessage($request->id, $request->code);

             //removes the |||| from the message and splits it into an array
             $decrypted_message = explode('||||', $decrypted->getContent());

             Message::where('id', $request->id)->delete();

             return redirect()->route('note.index')->with([
                 'message_title' => $decrypted_message[0],
                 'message_content' => $decrypted_message[1],
             ]);

         } else {
             return redirect()->route('login.index', $request->id)
                 ->with('message', 'Je bericht is verwijderd, verlopen of bestaat niet meer.');
         }
    }
}
