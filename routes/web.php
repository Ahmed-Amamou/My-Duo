<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage',['games'=> \App\Models\Game::all(),'users'=> \App\Models\User::all()]);
});

Route::get('/dashboard', function () {
    return view('homepage',['games'=> \App\Models\Game::all(),'users'=> \App\Models\User::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Auth
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/games/{game}/follow',[\App\Http\Controllers\UserController::class,'followGame'])->name('games.follow');
    Route::post('/games/{game}/unfollow',[\App\Http\Controllers\UserController::class,'unfollowGame'])->name('games.unfollow');
});

/**
 * Games Route
 */
Route::get('/games', function () {
    $games =\App\Models\Game::all();
    $user = \App\Models\User::find(4);
    $userPosts = $user->posts;

    return view('all-games', [
        'games' => $games,
        'userPosts' => $userPosts,
    ]);
})->name('allgames');

/**
 * Single Game Route
 */
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');

/**
 * Post Creation Route
 */

Route::post('/games/{game}/posts', [PostController::class,'store'])->name('games.posts.store');




//Friends Route
Route::get('/friends', function () {
    $games =\App\Models\Game::all();
    $users= User::with('games')->get();

    return view('all-friends', [
        'games' => $games,
        'users'=> $users
    ]);
})->name('allfriends');



require __DIR__.'/auth.php';
