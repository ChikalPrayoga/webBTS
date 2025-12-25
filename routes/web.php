<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PelacakanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

Route::get('/', [HalamanController::class, 'index']);
Route::get('/api/tracking/{id}', [PelacakanController::class, 'lacak']);

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'contact' => 'required',
        'message' => 'required'
    ]);
    
    // Log for testing
    Log::info('Contact Form Submission', $request->all());
    
    return back()->with('success', 'Pesan terkirim! Terima kasih telah menghubungi kami.');
})->name('contact.send');
