<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function Aboutus()
    {
        return view('front.aboutus.aboutus');
    }

    public function Clients()
    {
        return view('front.clients.clients');
    }
}
