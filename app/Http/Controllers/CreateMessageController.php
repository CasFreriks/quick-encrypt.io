<?php

namespace App\Http\Controllers;

use App\Models\mailSend;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exonet\SecureMessage\SecureMessage;

use App\Mail\SecureMessageMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;


class CreateMessageController extends Controller
{
    function index () {
        return view('home');
    }

    function store (Request $request) {
        $args = $request->validate([
            'email_to' => ['required', 'email'],
            'valid_until' => ['required', 'date_format:Y-m-d'],
            'message_subject' => ['required', 'max:250'],
            'message_content' => 'required',
        ]);

        //sets a |||| between the subject and content for separation reasons
        $completed_message = sprintf("%s||||%s", $request->message_subject, $request->message_content);

        $encrypted_message = \SecureMessage::encrypt($completed_message, carbon::createFromDate($request->valid_until));

        $format_date = new Carbon($request->valid_until);

        $data = [
            'id' => $encrypted_message->getId(),
            'code' => $encrypted_message->getVerificationCode(),
            'valid_until' => $format_date->format('d-m-Y'),
        ];

        Mail::to($request->email_to)->send(new SecureMessageMail($data));

        //sets the id in a table with a default value of 0 for email_send because It's for the verification code email in the loginController
        MailSend::create([
            'msg_id' => $encrypted_message->getId(),
            'code_with_salt' => Crypt::encryptString($encrypted_message->getVerificationCode() . "eiZCn!Ylg33%#JDIDVTg"),
            'email' => $request->email_to,
        ]);

        return redirect()->route('home.index')->with('message', 'Je bericht is succesvol verzonden!');
    }

}
