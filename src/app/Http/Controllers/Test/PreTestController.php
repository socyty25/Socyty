<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\PreTestAssessment\Question;
use App\Models\PreTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PreTestController extends Controller
{
    // Show Pre-Test Questions
    public function showPreTest()
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first to take the pre-test.');
        }

        $user = Auth::user();

        // Ensure the user has a PreTest record
        $preTest = $user->preTest ?? new PreTest();

        if ($preTest && $preTest->has_taken) {
            return redirect('/assessment/preresult')->with('error', "You have already completed the Pre-test Assessment.");
        }

        $questions = Question::with('choices')->get();

        // Remove 'is_correct' field from each choice before sending to frontend
        $questions->each(function ($question) {
            $question->choices->each(function ($choice) {
                unset($choice->is_correct);
            });
        });

        $type = $questions->isNotEmpty() ? $questions->first()->type : null;

        return view('assessment.pretest', compact('questions', 'type'));
    }

    // Handle Pre-Test Completion
    public function completePreTest(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first to complete the pre-test.');
        }

        $user = Auth::user();
        $preTest = $user->preTest ?? new PreTest();

        if ($preTest->has_taken) {
            return redirect('/')->with('error', 'You have already completed the pre-test.');
        }

        $request->validate([
            'answers' => 'required|json',
        ]);

        $answers = json_decode($request->input('answers'), true);

        if (!$answers) {
            return redirect()->route('assessment.pretest')->with('error', 'Invalid answers format.');
        }

        $score = 0;

        foreach ($answers as $answer) {
            $question = Question::with('choices')->find($answer['question_id']);
            if (!$question) {
                continue;
            }

            $correct = $question->choices->firstWhere('is_correct', 1);
            $selectedChoiceId = $answer['selected_choice_id'] ?? null;

            if ($correct && $correct->id == $selectedChoiceId) {
                $score += 5;
            }
        }

        $preTest->user_id = $user->id;
        $preTest->has_taken = true;
        $preTest->score = $score;
        $preTest->taken_at = now();
        $preTest->save();

        return redirect()->route('assessment.pretestresult')->with('success', 'Pre-test completed successfully.');
    }

    // Show Pre-Test Results
    public function showResults()
    {
        $user = Auth::user();
        $preTest = PreTest::where('user_id', $user->id)->first();

        if (!Auth::check()) {
            return redirect()->route('home')->with('error', 'You must log in first to view the pre-test result.');
        }

        if (!$preTest || !$preTest->has_taken) {
            return redirect()->route('assessment.pretest')->with('error', 'You must complete the pre-test first.');
        }

        $score = $preTest->score;
        $totalQuestions = Question::count();

        return view('assessment.pretestresult', [
            'score' => $score,
            'totalQuestions' => $totalQuestions,
        ]);
    }
}
