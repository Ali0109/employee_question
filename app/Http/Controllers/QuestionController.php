<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class QuestionController extends Controller
{
    public function form($token) {
        $user = User::where('token', $token)
            ->with('question')
            ->first();

        if($user->question == null) {
            return redirect()->route('success_message')->with('success', __('main.success_message'));
        }
        if($user == null) {
            return abort(404);
        }



        // multiple
        $lang = App::getLocale();
        $name = "name_" . $lang;
        $variant_1 = "variant_1_" . $lang;
        $variant_2 = "variant_2_" . $lang;
        $variant_3 = "variant_3_" . $lang;


        return view('form', compact(
            'user',
            'lang',
            'name',
            'variant_1',
            'variant_2',
            'variant_3',
        ));
    }

    public function form_post(Request $request) {
        $validation = $request->validate([
            'question_id' => 'required',
            'var' => 'required',
        ],[
            'var.required' => __('validation.required'),
        ]);
        $user_id = $request->input('user_id');
        $question_id = $request->input('question_id');
        $var = $request->input('var');

        $answer = Answer::create([
            'user_id' => $user_id,
            'question_id' => $question_id,
            'variant' => $var,
        ]);

        $user = User::where('id', $user_id)->update([
            'question_id' => $question_id + 1,
        ]);

        return back();
    }

    public function successMessage() {
        return view('success_message');
    }
}
