<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\verifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\ResetPassword;

class UserController extends Controller
{
    public function dashbaord()
    {
        return view('user.dashbaord');
    }// End method

    public function register()
    {
        return view('user.register');
    } // End method

    public function register_submit(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password']
        ]);

        $token = hash('sha256', time());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->token = $token;
        $user->save();

        $verificationLink = url('verify-email/'.$token.'/'.$request->email);
        $subject = "Email Verification";
        $info = [
            'user' => $user['name'],
            'verificationLink' => $verificationLink
        ];

        Mail::to($request->email)->send(new verifyEmail($subject, $info));

        return redirect()->back()->with('success', 'You need to verify your email to complete your registration! We have sent a verification link to your email. If you cannot find the email in your inbox, please check your spam folder.');
    } // End method

    public function email_verification($token, $email)
    {
        $user = User::where('email', $email)->where('token', $token)->first();
        if(!$user)
        {
            return redirect()->route('login');
        }

        $user->token = "";
        $user->status = 1;
        $user->update();

        return redirect()->route('login')->with('success', 'Your email is verified! You can now login to your account.');
    } // End method

    public function login()
    {
        return view('user.login');
    } // End method

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        $inputs = $request->all();
        $data = [
            'email' => $inputs['email'],
            'password' => $inputs['password']
        ];

        if(Auth::guard('web')->attempt($data))
        {
            return redirect()->route('user_dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid login credentials! Please try again.');
        }
    } // End method

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', 'User logout successfully!');
    } // End method

    public function user_forgot_password()
    {
        return view('user.forgot_password');
    } // End method

    public function forgot_password_submit(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $user = User::where('email', $request->email)->where('status', 1)->first();
        if(!$user)
        {
            return redirect()->back()->with('error', 'User with provided email does not exist!');
        }

        $token = hash('sha256', time());
        $user->token = $token;
        $user->update();

        $pResetLink = url('password-reset/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $info = [
            'user' => $user['name'],
            'pResetLink' => $pResetLink
        ];

        Mail::to($request->email)->send(new ResetPassword($subject, $info));

        return redirect()->back()->with('success', 'We have sent a password reset link to your email. Please check your email. If you do not find the email in your inbox, please check your spam folder.');
    } // End method

    public function password_reset($token, $email)
    {
        $user = User::where('email', $email)->where('token', $token)->first();
        if(!$user)
        {
            return redirect()->route('login')->with('error', 'Your reset password token is expired! Please start over.');
        } else {
            return view('user.reset_password', compact('token', 'email'));
        }
    } // End method

    public function reset_password_submit(Request $request, $token, $email)
    {
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['required', 'same:password'],
        ]);

        $user = User::where('email', $email)->where('token', $token)->first();
        if(Hash::check($request->password, $user->password))
        {
            return redirect()->back()->with('error', 'You can not use your old password again!');
        }

        $user->password = Hash::make($request->password);
        $user->token = "";
        $user->update();

        return redirect()->route('login')->with('success', 'Your password is reset! You can now login with your new password.');
    } // End method
}
