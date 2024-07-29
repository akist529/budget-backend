<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class MailController extends Controller
{
    public function forgotPassword(Request $request) {
        $request->validate(['email' => 'required|email']);

        $user = User::whereEmail($request->email)->first();
        $token = Password::getRepository()->create($user);

        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // return $status === Password::RESET_LINK_SENT 
        //             ? back()->with(['status' => __($status)]) 
        //             : back()->withErrors(['email' => __($status)]);

        Mail::to($user)->send(new DemoMail($token));

        dd("Email is sent successfully.");
    }

    public function forgotPasswordView(Request $request) {
        return view('emails.demoMail');
    }
}
