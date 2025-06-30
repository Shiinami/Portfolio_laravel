<?php

namespace App\Http\Controllers\GetApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetApiController extends Controller
{
    public function showFriendsProfile()
    {
        $response = Http::get('https://deva-syaiful.my.id/api/profile-export');
        if ($response->successful()) {
            $data = $response->json();
            return view('content.portfolio', [
                'profile' => $data['profile'],
                'portfolios' => $data['portfolios']
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch profile data',
            ], $response->status());
        }
    }
}
