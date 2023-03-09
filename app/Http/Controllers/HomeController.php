<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

/**
 * Summary of HomeController
 */
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
        return view('admin.home_index', compact('list'));
    }
    /**
     * Summary of edit
     * @param mixed $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id, Request $request)
    {
        $edit=Home ::find($id);
        return view('/admin/home_edit', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $home = Home::find($id);
        $home->judul = $request->judul;
        $home->deskripsi = $request->deskripsi;
        $home->link = $request->link;

        $home->update();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'profile' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            // $request->img->move(public_path() . '/uploads/' . $newFileName);
            $request->file('img')->storeAs('/img', $newFileName);
            $home['photo'] = $newFileName;
            $home->update();
        }
        return redirect('/admin/home/');
    }



}
