<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $home = Home::all();
        return view('client.home', compact('home'));
    }
    public function list(Request $request)
    {
        $list=Home ::latest()->get();
        return view('admin.home', compact('list'));
    }
}
