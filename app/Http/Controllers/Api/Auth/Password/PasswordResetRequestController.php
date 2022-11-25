<?php

namespace App\Http\Controllers\Api\auth\password;

use App\Http\Controllers\Controller;
use App\Mail\SendMailreset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class PasswordResetRequestController extends Controller
{
    public function sendEmail(Request $request)
    { // this is most important function to send mail and inside of that there are another function {
        if (!$this->validateEmail($request->email)) { // this is validate to fail send mail or true
            return response()->json([
                'data' => 'Email does\'t found on our database',
            ]);
        }

        $token = $this->createToken($request->email);
        Mail::to($request->email)->send(new SendMailreset($token, $request->email)); // token is important in send mail

        return response()->json([
            'data' => 'successfully, please check your inbox.',
        ]);

    }

    public function createToken($email)
    { // this is a function to get your request email that there are or not to send mail {
        $oldToken = DB::table('password_resets')->where('email', $email)->first();
        if ($oldToken) {
            return $oldToken->token;
        }

        $token = Str::random(40);
        $this->saveToken($token, $email);
        return $token;
    }

    public function saveToken($token, $email)
    { // this function save new password {
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
    }

    public function validateEmail($email)
    { //this is a function to get your email from database {
        return !!User::where('email', $email)->first();
    }
}
