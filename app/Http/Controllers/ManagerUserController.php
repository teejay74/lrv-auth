<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkUser() {
        return view('manager', ['user' => Auth::user()]);
    }
}
