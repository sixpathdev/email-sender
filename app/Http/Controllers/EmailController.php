<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendContactMail(ContactFormRequest $request)
    {
        try {
            $data = $request->validated();

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data['email'], $data['subject'], $data['name'], $data['content']));

            return response()->json(['message' => 'Email successfully sent'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
