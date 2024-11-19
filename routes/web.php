<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//suma
Route::get('/sumar/{n1}/{n2}', function ($n1, $n2) {
    return "La suma de $n1 y $n2 es: " . ($n1 + $n2);
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

//resta
Route::get('/restar/{n1}/{n2}', function ($n1, $n2) {
    return "La resta de $n1 y $n2 es: " . ($n1 - $n2);
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

//multiplicacion
Route::get('/multiplicar/{n1}/{n2}', function ($n1, $n2) {
    return "La multiplicación de $n1 y $n2 es: " . ($n1 * $n2);
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

//divison
Route::get('/dividir/{n1}/{n2}', function ($n1, $n2) {
    return "La división de $n1 entre $n2 es: " . ($n1 / $n2);
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

//saludar con apellido opcional
Route::get('/saludar/{nombre}/{apellido?}', function ($nombre, $apellido = 'Doe') {
    return "¡Hola, $nombre $apellido!";
})->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]*']);

//saludar apuntando controlador
// Route::get('/saludar/{nombre}', function ($nombre) {
//     return view('saludo', ['nombre' => $nombre]);
// })->where('nombre', '[A-Za-z]+');