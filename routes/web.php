<?php

use App\Http\Controllers\IncidentController;
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

// Route::get('/incidente', function () {
//     return view('home');
// });
// Route::get('/incidente', function () {
//     return view('incidente');
// }

Route::get('/', [IncidentController::class , 'home']);
Route::get('/table', [IncidentController::class , 'tablef']);
Route::get('/editpage',[IncidentController::class ,'editpage']);

Route::get('/addincident', [IncidentController::class , 'addincident']);

Route::post('/create' , [IncidentController::class , 'create']);
Route::delete('/delete/{id}', [IncidentController::class , 'delete']);
Route::get('/editincident/{id}' , [IncidentController::class , 'editincident']);
Route::put('/updateincident/{id}', [IncidentController::class , 'updateincident']);
