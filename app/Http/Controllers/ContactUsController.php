<?php

namespace App\Http\Controllers;

use App\Mail\SendContactorEmail;
use App\Models\Contactor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contactus');
    }
    public function store(Request $request)
    {
        $data=$request->all();

        $request->validate([
            'name'=>'required|string|max:255',
            'city'=>'required|string|max:255',
            'email'=>'required|email|string',
            'phone'=>'required|numeric|digits:11',
            'topic'=>'required',
            'message'=>'required',
        ]);

        Mail::to($request->email)->send(new SendContactorEmail($data));

        return back()->with('message', 'Your message has been sent');
    }

}
