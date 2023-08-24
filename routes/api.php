<?php

use App\Http\Controllers\Api\ApartmentController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// register endpoint // http://127.0.0.1:8000/api/register
Route::post("auth/register", [UserController::class, 'register']);
// login endpoint // http://127.0.0.1:8000/api/login
Route::post("auth/login", [UserController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// retrieve all messages related to a user // http://127.0.0.1:8000/api/users/{user}/messages
Route::get('users/{user}/messages', [UserController::class, 'getUserMessages']);

Route::prefix('apartments')->group(function () {
    // retrieve all apartments // http://127.0.0.1:8000/api/apartments/all
    Route::get('/', [ApartmentController::class, 'index']); // Get all apartments with relations
    //  retrieve apartment by id  http://127.0.0.1:8000/api/apartments/{id}
    Route::get('/{id}', [ApartmentController::class, 'show']); // Get apartment by ID with relations
    //  retrieve apartments images // http://127.0.0.1:8000/api/apartments/{id}/images
    Route::get('/{id}/images', [ApartmentController::class, 'getImages']); // Get apartment images
    // retrieve all services related to apartment // http://127.0.0.1:8000/api/apartments/{id}/services
    Route::get('/{id}/services', [ApartmentController::class, 'getServices']); // Get apartment services
    //  retrieve apartments views // http://127.0.0.1:8000/api/apartments/{id}/views
    Route::get('/{id}/views', [ApartmentController::class, 'getViews']); // Get apartment views
    //  retrieve apartments ordered by availability // http://127.0.0.1:8000/api/apartments/ordered-by-availability
    Route::get('/ordered-by-availability', [ApartmentController::class, 'getAllOrderedByAvailability']); // Get all apartments ordered by availability
    //  retrieve apartments ordered by sponsor // http://127.0.0.1:8000/api/apartments/ordered-by-sponsorship
    Route::get('/ordered-by-sponsorship', [ApartmentController::class, 'getAllOrderedBySponsorship']); // Get all apartments ordered by sponsorship
});


