<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
}
