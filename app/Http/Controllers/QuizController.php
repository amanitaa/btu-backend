<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuizController {
    public function createOrUpdate(Quiz $quiz, Request $request): RedirectResponse {
        $quiz->fill($request->all())->save();
        return redirect()->route('quiz.list');
    }

    public function get(Quiz $quiz, Request $request): JsonResponse
    {
        $quiz::all();
        return response() -> json($quiz);
    }
}
