<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ApiLimitterController extends Controller
{
    public function index()
    {
        return view('myApp');
    }

    public function secondSession()
    {
        return view('secondsession');
    }

    public function newsession()
    {
        Session::forget('ipAddress');
        return redirect('myapp');

    }
}
