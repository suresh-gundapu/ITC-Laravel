<?php

namespace App\Http\Controllers;

use App\Mail\Mytestmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function about()
    {

        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }
    public function contact()
    {
        return view('contact');
    }


    public function contactSave(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,gif,svg|max:2048'
        ]);
        $uploadedImage = $request->file('picture');
        $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('uploads');
        $uploadedImage->move($destinationPath, $imageName);
        dd('file upload successfully');
        dd($request->all());
    }

    public function sendEmail(Request $request)
    {
        // dd($request->all());

        $email = $request->input('email');
        $details = [
            'email' => $email,
            'title' => "Mail from Parul University",
            'body' => "This is test mail by using laravel smtp"
        ];

        Mail::to($email)->send(new Mytestmail($details));

        return redirect()->back()->with('success', 'email sent successfully')->withInput();

        //dd('email sent successfully');
    }
}
