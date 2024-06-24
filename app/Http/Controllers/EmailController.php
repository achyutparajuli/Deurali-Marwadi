<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Exception;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            if ($validator->fails())
            {
                toastr()->error('Please fill out the required inputs.');
                return redirect()
                    ->back();
            }

            // $email = new Email();
            // $email->name = $request->name;
            // $email->email = $request->email;
            // $email->subject = $request->subject;
            // $email->message = $request->message;
            // $email->save();

            $data = $request->all();

            Mail::to(env('GMAIL'))
                ->cc('achyutparajuli49@gmail.com')
                ->queue(new ContactMail($data));

            toastr()->success('Thank you for your email. We will get back to you shortly!');
            return redirect()->route('home');
        }
        catch (Exception $e)
        {
            dd($e->getMessage());
            toastr()->error('Opps! Something went wrong please try again later.');
            return redirect()->route('home');
        }
    }
}
