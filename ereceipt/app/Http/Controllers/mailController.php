<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\mail\sendMail;
use Illuminate\Support\Facades\Redirect;
class mailController extends Controller
{
	public function send(Request $request)
	{
		$data = array(
            'email' => $request->to,
            'subject' => $request->sub,
            'bodyMessage' => $request->message,
            'attachment' => $request->attachment
            );
    
		Mail::send('mail', $data, function($message) use ($data)
		{
            $message->to($data['email']);
            $message->subject($data['subject']);
            $message->from('abidarrafigm@gmail.com');
            $message->attach($data['attachment']->getRealPath(),array('as' => 'attachment' .$data['attachment']->getClientOriginalExtension(),
                'mime' => $data['attachment']->getMimeType())
                );
        });
		return "Mail Sending Successfull !!!";
		return Redirect::to('/email');
	}

	public function email()
	{
		return view('email');
	}
	public function mail()
	{
		return view('mail');
	}
}
