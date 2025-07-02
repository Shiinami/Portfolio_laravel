<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class portofolioController extends Controller
{
    public function index()
    {
        $items = Portofolio::all();

        // Ambil data biodata
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

        $viewName = request('view') === 'portfolio' ? 'content.portfolio' : 'layout.app';

        return view($viewName, [
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
}
