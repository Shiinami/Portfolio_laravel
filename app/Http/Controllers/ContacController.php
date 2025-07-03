<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function index()
    {
        // Ambil data biodata
        $biodata = \App\Models\Profile::first();

        // Tambahkan data yang dibutuhkan layout.app agar tidak error
        $items = \App\Models\Portofolio::all();
        $profile = [];
        $friendPortfolios = [];

        return view('layout.app', [
            'biodata' => $biodata,
            'items' => $items,
            'profile' => $profile,
            'friendPortfolios' => $friendPortfolios,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\Contact::create($data);

        // Redirect kembali ke halaman sebelumnya (home) dengan pesan sukses
        return redirect()->back()->with('contact-success', 'Pesan berhasil dikirim!');
    }
}
