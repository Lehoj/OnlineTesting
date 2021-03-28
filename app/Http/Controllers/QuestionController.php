<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Test;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Test $test)
    {
        return view('layouts.dashboard.new_question', compact('test'));
    }

    public function store(Test $test)
    {
        //dd(request()->all());

        $data = \request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);

        //dd($data);

        // relationships
        $question = $test->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/tests/'.$test->id);
    }

    // Vymaze otazku aj s odpovedami
    public function destroy(Test $test, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($test->path());
    }

    // Edit otazky
    public function edit($id)
    {
        // fetching table
        $questions = Question::find($id);
        return view('layouts.dashboard.update_question')->with('questions', $questions);
    }


    public function update(Request $request, $id)
    {
        $questions = Question::find($id);
        //$answers = Answer::find($id);

        $questions->question = $request->input('question');
        //$answers->answer = $request->input('answer');

        $questions->save();
        //$answers->save();

        return redirect('/dashboard');
    }

}
