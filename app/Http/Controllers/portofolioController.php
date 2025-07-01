<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Models\Profile;

class portofolioController extends Controller
{
    public function index()
    {
        $items = Portofolio::all();
        $biodata = \App\Models\Profile::first();

        // Ambil data API teman
        $profile = null;
        $friendPortfolios = [];
        try {
            $response = \Illuminate\Support\Facades\Http::withoutVerifying()->get('https://deva-syaiful.my.id/api/profile-export');
            if ($response->successful()) {
                $apiData = $response->json();
                $profile = $apiData['profile'] ?? null;
                $friendPortfolios = $apiData['portfolios'] ?? [];
            }
        } catch (\Exception $e) {
            // Jika gagal ambil API, biarkan profile dan friendPortfolios null/empty
        }

        return view('layout.app', [
            'items' => $items,
            'profile' => $profile,
            'friendPortfolios' => $friendPortfolios,
            'biodata' => $biodata
        ]);
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpg,png,jpeg,webp,svg|max:2048',
        'category' => 'required|string',
    ]);

    $data['image'] = $request->file('image')->store('portfolio', 'public');
    Portofolio::create($data);

    return redirect()->back();
}

public function destroy($id)
{
    $item = Portofolio::findOrFail($id);
    Storage::disk('public')->delete($item->image);
    $item->delete();

    return redirect()->back();
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);
    $item = Portofolio::findOrFail($id);
    $item->update($data);
    // handle image jika ada
    return redirect()->route('home')->with('success', 'Portfolio berhasil diupdate!');
}

public function biodataStore(Request $request)
{
    $data = $request->validate([
        'bio' => 'required|string',
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0',
            'website' => 'nullable|string|max:255',
            'degree' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'freelance' => 'nullable|string|max:50',
            'pic' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]); // isi sesuai $fillable
    $data['pic'] = $request->file('pic')->store('biodata', 'public');
    Profile::create($data);
    return redirect()->back();
}

public function biodataUpdate(Request $request, $id)
{
    $biodata = Profile::findOrFail($id);
    $data = $request->validate([
        'bio' => 'required|string',
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0',
            'website' => 'nullable|string|max:255',
            'degree' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'freelance' => 'nullable|string|max:50',
            'pic' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    if ($request->hasFile('pic')) {
        Storage::delete('public/' . $biodata->pic);
        $data['pic'] = $request->file('pic')->store('biodata', 'public');
    }
    $biodata->update($data);
    return redirect()->back();
}

public function biodataDestroy($id)
{
    $biodata = Profile::findOrFail($id);
    Storage::delete('public/' . $biodata->pic);
    $biodata->delete();
    return redirect()->back();
}
}
