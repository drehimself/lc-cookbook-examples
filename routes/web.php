<?php

use App\Models\Announcement;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/announcement', function () {
    $announcement = Announcement::first();

    abort_if(!$announcement->isActive, 404);

    return view('announcement', [
        'announcement' => $announcement,
    ]);
});

Route::get('/announcement/edit', function () {
    $announcement = Announcement::first();

    return view('edit-announcement', [
        'announcement' => $announcement,
    ]);
});

Route::patch('/announcement/update', function (Request $request) {
    $fields = $request->validate([
        'isActive' => 'required',
        'bannerText' => 'required',
        'bannerColor' => 'required',
        'titleText' => 'required',
        'titleColor' => 'required',
        'content' => 'required',
        'buttonText' => 'required',
        'buttonColor' => 'required',
        'buttonLink' => 'required|url',
    ]);

    $announcement = Announcement::first();

    $announcement->update($fields);

    return back()->with('success_message', 'Announcement was updated!');
});
