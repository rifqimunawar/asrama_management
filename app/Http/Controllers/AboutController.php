<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about=About::all();
        return view('client.about', compact('about'));
    }
}
