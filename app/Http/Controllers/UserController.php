<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sign_in() {
        return view('sign_in');
    }

    public function sign_up_user() {
        return view('sign_up_user');
    }

    public function sign_up_candidate() {
        return view('sign_up_candidate');
    }
}