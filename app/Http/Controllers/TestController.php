<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('layouts.dashboard.new_test');
    }

    public function store()
    {
        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        /* Neefektivny sposob */
        //$data['user_id'] = auth()->user()->id;
        //$test = Test::create($data);

        $test = auth()->user()->tests()->create($data);

       return redirect('/tests/'.$test->id);
    }

    public function show(Test $test)
    {
        $test->load('questions.answers.responses');

        //dd($test);

        return view('layouts.dashboard.show', compact('test'));
    }

    public function destroy(Test $test, Question $question)
    {
        /*if(count($test->questions) > 0) {
            foreach ($test->questions as $question) {
                $question->answers()->delete();
                $question->delete();
            }
            $test->delete();
        } else {
            return 'error';
        }*/


       /*foreach ($test->questions as $question) {
                $question->answers()->delete();
                $question->delete();
            }
            $test->delete();*/

        /*foreach ($test->questions as $question) {
            if(empty($question)){
                $test->delete();
            } else
              $question->answers()->delete();
              $question->delete();
              $test->delete();
        }*/

        if(empty($test->questions)){
            $test->delete();
        } else
            foreach ($test->questions as $question) {
                $question->answers()->delete();
                $question->delete();
            }
        $test->delete();

        return redirect('/dashboard')->with('status', 'Test successfully deleted.');
    }

    public function edit($id)
    {
        // fetching table
        $tests = Test::find($id);
        return view('layouts.dashboard.update_test')->with('tests', $tests);
    }

    public function update(Request $request, $id)
    {
        $tests = Test::find($id);

        $tests->title = $request->input('title');
        $tests->description = $request->input('description');

        $tests->save();

        return redirect('/dashboard');
    }

}
