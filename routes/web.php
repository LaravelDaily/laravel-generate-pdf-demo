<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('pdf', function () {
    $data = [
        ['quantity' => 1, 'description' => '1 Year Subscription', 'price' => '129.00']
    ];

    $pdf = Pdf::loadView('pdf', ['data' => $data]);

    return $pdf->stream();
});
