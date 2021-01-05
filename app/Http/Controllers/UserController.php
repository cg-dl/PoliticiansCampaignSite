<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sign_in()
    {
        return view('sign_in');
    }

    public function sign_up_user()
    {
        return view('sign_up_user');
    }

    public function sign_up_candidate()
    {
        return view('sign_up_candidate');
    }

    public function home()
    {
        return view('home');
    }

    public function candidates()
    {
        return view('candidates');
    }

    public function candidates1()
    {
        return view('candidates1');
    }

    public function candidates2()
    {
        return view('candidates2');
    }

    public function candidates3()
    {
        return view('candidates3');
    }

    public function candidates4()
    {
        return view('candidates4');
    }
}
