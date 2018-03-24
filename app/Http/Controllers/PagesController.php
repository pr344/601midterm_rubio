<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    //
    function home(){
        return view('pages.welcome');
    }

    function contact(){
        return view('pages.contact');
    }

    function store(Request $request) {
        $email = $request->email;
        return redirect()->route('thanks',['email' => $email ]);
    }

    function thanks($email, Request $request) {
        return view('pages.thankyou')->with(compact('email'));
    }


}
