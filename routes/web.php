<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form'); // atgriezīs skatījumu ar formu
});

Route::post('/submit', function (\Illuminate\Http\Request $request) {
    // Iegūstam datus no formas
    $name = $request->input('name');
    $email = $request->input('email');

    return "
        <h1>Saņemtie dati</h1>
        <p><strong>Vārds:</strong> {$name}</p>
        <p><strong>E-pasts:</strong> {$email}</p>
    ";
});