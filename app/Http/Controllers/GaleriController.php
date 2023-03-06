<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index (Request $request)
    {
        $galeris=Galeri ::latest()->get();
        return view('client.galeri', compact('galeris'));
    }
}
