<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    Admin Login Form Method Start
    */

    public function index() {
        return view ('admin.auth.login');
    }

    public function doLogin(LoginRequest $request) {
       $creditials = [
        'email'=>$request->input('email'),
        'password'=>$request->input('password')
       ];

       if(auth()->attempt($creditials)): 
         if(auth()->user()->getRoleNames()->first() =='Owner'):
            Session::flush();
            Auth::logout();
            return response()->json([
                'status'=>'0',
                'msg'=>"Unauthorized Accesss !",
            ],200);
            endif;
            return response()->json([
                'status'=>'1',
                'msg'=>"Login Successfully. Redirecting Please Wait...",
                'url'=>route('admin.dashboard')
            ],200);
       else:
        return response()->json([
            'status'=>'0',
            'msg'=>"Your Credentials invalid,Please try again !",
        ],200);
       endif;
    }

    /*
    Admin Login Form Method End
    */

}
