<?php

namespace App\Http\Controllers;

use App\Mail\SendNewRegistrationEmail;
use App\Mail\SendNewUserRegistrationEmail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'country'=>'required|string|max:255',
            'email'=>'required|email|string|max:255|unique:users',
            'password'=>'required|string|confirmed',
            'date_of_birth'=>'nullable|date',
            'gender'=>'nullable|in:male,female',
            'accept'=>'required|accepted',
        ]);

        $user = new User();
        $user->first_name= $data['first_name'];
        $user->last_name= $data['last_name'];
        $user->country= $data['country'];
        $user->email= $data['email'];
        $user->password= Hash::make($data['password']);
        $user->date_of_birth= $data['date_of_birth'];
        $user->gender= $data['gender'];
        $user->accept= $data['accept'];
        $save= $user->save();

        if($save){
            Mail::to($request->email)->send(new SendNewRegistrationEmail($data));
            return redirect()->back()->with('success', 'You are Successfully Registered');
        }else{
            return redirect()->back()->with('fail', 'Something went wrong, failed to register');
        }

    }

    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email|string|max:255|exists:users',
            'password'=>'required|string',
        ],[
            'email.exists'=>'This email is not exist in database user table'
        ]);

        $credintails= $request->only('email', 'password');

        if(Auth::attempt($credintails)){
            return redirect()->route('user.home');
        }else{
            return redirect()->back()->with('fail', 'This account is not registered');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showForgotForm()
    {
        return view('dashboard.user.forgot-password');
    }

    public function resetPasswordLink(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ],[
            'email.exists'=>'This email is not registered !'
        ]);

        $token= Str::random(64);
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);
        $action_link=route('user.reset.password.form',[$token, 'email'=>$request->email]);
        $body="We are received a request to reset a password to <b>.env(APP_NAME)</b> account associated with " .$request->email . " You can reset your password by clicking the link below";
        Mail::send('email-forgot', ['action_link'=>$action_link, 'body'=>$body], function($message) use ($request){
            $message->from('admin@Hakeem-web.com', 'Hakeem-Web');
            $message->to($request->email, 'admin')
                ->subject('Reset Password');
        });

        return back()->with('success', 'We have emailed your password reset link!');
    }

    public function showRestForm(Request $request, $token=null)
    {
        return view('dashboard.user.reset')->with(['token'=>$token, 'email'=>$request->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|string|confirmed',
        ],[
            'email.exists'=>'This email is not registered !'
        ]);

        $check_token= DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{
            User::where('email', $request->email)->update([
                'password'=>Hash::make($request->password)
            ]);
            DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('user.login')
                ->with('info', 'Your password has been changed! You can login with new password')
                ->with('verifiedEmail', $request->email);
        }

    }

}
