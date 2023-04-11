<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;

class ForgePasswordController extends Controller
{
    //
public function display(Request $request){
    return view('forgetpassword');
}

public function submitForgetPasswordForm(Request $request){
    //dd($request->all());
// $request-validate([


// ]);

$token = Str::random(64);
DB::table('password_resets')->insert([
    'email' => $request->email,
    'token' => $token,
    'created_at' => Carbon::now()
  ]);

  Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
    $message->to($request->email);
    $message->subject('Reset Password');
});
echo "success";

//return back()->with('message', 'We have e-mailed your password reset link!');
}

}
