<?php

use App\Http\Controllers\QuizController;
use App\Models\Quiz;
use Illuminate\Support\Facades\DB;
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

//Route::get('/', function () {
//    $quiz = Quiz::all();
//    return response() -> json($quiz);
//});

Route::get('/', function() {
    $quizzes = DB::table('quiz')->where('status', 'active')
        ->where(function ($query) {$query->whereNotNull('img')
            ->orWhere(function ($query) {$query->whereNull('img')
                ->whereNotNull('description');
            });
        })
        ->orderBy('record_date')
        ->take(8)
        ->get();
    return response() -> json($quizzes);
});
