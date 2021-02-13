<?php

namespace App\Http\Controllers;


// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm(){

        return view('auth.passwords.email');
    }





    public function  sendResetLinkEmail(Request $request){
      $request->validate([
          'email' => 'required|email|exists:users',
      ]);

      $token = Str::random(60);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('auth.passwords.verify',['token' => $token], function($message) use ($request) {
                $message->from($request->email);
                $message->to('juwavictor@gmail.com');
                $message->subject('Reset Password Notification');
             });

      return back()->with('message', 'We have e-mailed your password reset link!');
    }
}
