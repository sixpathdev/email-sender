<?php

use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::controller(EmailController::class)->group(function () {
    Route::post('/send-contact-mail', 'sendContactMail');
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
