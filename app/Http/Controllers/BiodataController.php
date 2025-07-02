<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    public function store(Request $request)
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
        ]);
        if ($request->hasFile('pic')) {
            $data['pic'] = $request->file('pic')->store('biodata', 'public');
        } else {
            unset($data['pic']);
        }
        Profile::create($data);
        return redirect()->route('home')->with('berhasil', 'Biodata berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $biodata = \App\Models\Profile::findOrFail($id);
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
            if ($biodata->pic) {
                \Illuminate\Support\Facades\Storage::delete('public/' . $biodata->pic);
            }
            $data['pic'] = $request->file('pic')->store('biodata', 'public');
        } else {
            unset($data['pic']);
        }
        $biodata->update($data);
        return redirect()->route('home')->with('berhasil', 'Biodata berhasil diupdate!');
    }

    public function destroy($id)
    {
        $biodata = Profile::findOrFail($id);
        Storage::delete('public/' . $biodata->pic);
        $biodata->delete();
        return redirect()->back();
    }
}
