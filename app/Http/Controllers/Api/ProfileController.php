<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\PortfolioResource;
use App\Models\Profile;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Profile::first();
        $portfolios = Portofolio::all();

        return response()->json([
            'profile' => new ProfileResource($profile),
            'portfolios' => PortfolioResource::collection($portfolios)
        ]);
    }

    /**
     * Mengirim data profile (GET) dan menerima data profile (POST/PUT) dari aplikasi/website lain
     */
    public function export()
    {
        $profile = Profile::first();
        $portfolios = Portofolio::all();
        return response()->json([
            'profile' => new ProfileResource($profile),
            'portfolios' => PortfolioResource::collection($portfolios)
        ]);
    }

    public function import(Request $request)
    {
        $data = $request->validate([
            'bio' => 'nullable|string',
            'name' => 'required|string',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'website' => 'nullable|string',
            'degree' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'freelance' => 'required|in:Available,Not Available',
            'pic' => 'nullable|string',
            'portfolios' => 'nullable|array',
            'portfolios.*.title' => 'required_with:portfolios|string',
            'portfolios.*.description' => 'required_with:portfolios|string',
            'portfolios.*.image' => 'nullable|string',
            'portfolios.*.category' => 'nullable|string',
        ]);
        $profile = Profile::updateOrCreate(['email' => $data['email']], $data);
        // Import portfolios jika ada
        if (!empty($data['portfolios'])) {
            foreach ($data['portfolios'] as $portfolio) {
                \App\Models\Portofolio::updateOrCreate(
                    [
                        'title' => $portfolio['title'],
                        'description' => $portfolio['description'],
                        'category' => $portfolio['category'] ?? null,
                    ],
                    [
                        'image' => $portfolio['image'] ?? null,
                    ]
                );
            }
        }
        return response()->json([
            'message' => 'Profile & portfolios imported/updated',
            'profile' => new ProfileResource($profile),
            'portfolios' => isset($data['portfolios']) ? $data['portfolios'] : []
        ]);
    }
}
