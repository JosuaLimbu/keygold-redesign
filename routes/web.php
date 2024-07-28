<?php
use App\Models\Buyback;
use App\Models\Buybackemas;
use App\Models\Hargaemas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $buyback = Buyback::all();
    $buybackemas = Buybackemas::all();
    $hargaemas = Hargaemas::all();
    return view('home', [
        'buyback' => $buyback,
        'buybackemas' => $buybackemas,
        'hargaemas' => $hargaemas,
    ]);
});

Route::get('/member', function () {
    return view('member');
});




