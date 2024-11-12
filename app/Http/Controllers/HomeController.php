<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function biodata() {
        return view('page.biodata');
    }

    public function send(Request $request) {
        $nama = $request->fullName;
        $alamat = $request->address;

        return view('page.welcome', [
            'nama' => $nama,
            'alamat' => $alamat,
        ]);
    }
}
