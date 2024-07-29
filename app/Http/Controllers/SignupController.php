<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(Request $request) {
        $token = $request->user()->createToken($request->token_name);

        // \Log::info(json_encode($request->all()));
        return response('Test', 200)
                    ->header('Content-Type', 'text/plain');
    }

    public function test() {
        return response('Test', 200)
                    ->header('Content-Type', 'text/plain');
    }
}