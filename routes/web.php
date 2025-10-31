<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 静的ポートフォリオ用ルーティング
|--------------------------------------------------------------------------
*/

// 🪐 トップページ（Home）
Route::get('/', [HomeController::class, 'index'])->name('home');

// 🚀 プロジェクト詳細ページ（静的配列から）
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// 🎨 スキルギャラクシー（レーダーチャート）
Route::get('/skilldetails', function () {
    return view('skilldetails');
})->name('skilldetails');

// 🧭 成長ストーリー（タイムライン）
Route::get('/profiledetails', function () {
    return view('profiledetails');
})->name('profiledetails');

/*
|--------------------------------------------------------------------------
| 開発補助ルート（必要に応じて）
|--------------------------------------------------------------------------
*/

// 💖 疑似いいね機能（Ajax用・DBなし）
Route::post('/projects/{id}/like', [ProjectController::class, 'like'])->name('projects.like');

// 📜 詳細データAPI（もしJSで呼ぶなら）
Route::get('/projects/{id}/details', [ProjectController::class, 'details'])->name('projects.details');

