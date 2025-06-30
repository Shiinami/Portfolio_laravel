<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProfileController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Tes apakah route muncul
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

// API profile (dengan sanctum)
Route::middleware('auth:sanctum')->get('/profile', [ProfileController::class, 'show']);

// API untuk kirim data profile ke aplikasi lain (tanpa auth, bisa diubah sesuai kebutuhan)
Route::get('/profile-export', [ProfileController::class, 'export']);
// API untuk menerima data profile dari aplikasi lain
Route::post('/profile-import', [ProfileController::class, 'import']);

// API login manual
Route::post('/login', function (Request $request) {
    $user = \App\Models\User::where('email', $request->email)->first();
    if (! $user || ! \Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    return ['token' => $user->createToken('api-token')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test-api', function() {
    return 'API OK';
});
