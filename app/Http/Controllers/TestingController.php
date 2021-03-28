<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function show(Test $test, $slug)
    {
        $test->load('questions.answers');
        return view('testing', compact('test'));
    }

    public function store(Test $test)
    {
        $data = \request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'studenttest.name' => 'required',
            'studenttest.email' => 'required|email'
        ]);
        //dd(request()->all());

        $studenttest = $test->studenttests()->create($data['studenttest']);
        $studenttest->results()->createMany($data['responses']);

        return 'Your test has been successfully submitted.';
    }
}
