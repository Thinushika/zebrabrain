<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;

use App\Models\User;
use App\Models\Questions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;

class QuestionsController extends Controller
{
    public function question($question){
        if($question == "q1"){
            $question = Questions::where('id', 1)->first();
            return view('questions/question',['question' => $question,'question_no' => 1]);
        }
        if($question == "q2"){
            $question = Questions::where('id', 2)->first();
            return view('questions/question',['question' => $question,'question_no' => 2]);
        }

        if($question == "q3"){
            $question = Questions::where('id', 4)->first();
            return view('questions/question',['question' => $question,'question_no' => 3]);
        }
        if($question == "q4"){
            $question = Questions::where('id', 5)->first();
            return view('questions/question',['question' => $question,'question_no' => 4]);
        }
        if($question == "q5"){
            $question = Questions::where('id', 6)->first();
            return view('questions/question',['question' => $question,'question_no' => 5]);
        }
        if($question == "q6"){
            $question = Questions::where('id', 7)->first();
            return view('questions/question',['question' => $question,'question_no' => 6]);
        }
        if($question == "q7"){
            $question = Questions::where('id', 8)->first();
            return view('questions/question',['question' => $question,'question_no' => 7]);
        }
        if($question == "q8"){
            $question = Questions::where('id', 9)->first();
            return view('questions/question',['question' => $question,'question_no' => 8]);
        }
        if($question == "q9"){
            $question = Questions::where('id', 10)->first();
            return view('questions/question',['question' => $question,'question_no' => 9]);
        }
        if($question == "q10"){
            $question = Questions::where('id', 11)->first();
            return view('questions/question',['question' => $question,'question_no' => 10]);
        }
        if($question == "q11"){
            $question = Questions::where('id', 12)->first();
            return view('questions/question',['question' => $question,'question_no' => 11]);
        }
        if($question == "q12"){
            $question = Questions::where('id', 13)->first();
            return view('questions/question',['question' => $question,'question_no' => 12]);
        }
        if($question == "q13"){
            $question = Questions::where('id', 14)->first();
            return view('questions/question',['question' => $question,'question_no' => 13]);
        }
        if($question == "q14"){
            $question = Questions::where('id', 15)->first();
            return view('questions/question',['question' => $question,'question_no' => 14]);
        }
        if($question == "q15"){
            $question = Questions::where('id', 16)->first();
            return view('questions/question',['question' => $question,'question_no' => 15]);
        }
        if($question == "q16"){
            $question = Questions::where('id', 17)->first();
            return view('questions/question',['question' => $question,'question_no' => 16]);
        }
        if($question == "q17"){
            $question = Questions::where('id', 18)->first();
            return view('questions/question',['question' => $question,'question_no' => 17]);
        }
        if($question == "q18"){
            $question = Questions::where('id', 19)->first();
            return view('questions/question',['question' => $question,'question_no' => 18]);
        }
        if($question == "q19"){
            $question = Questions::where('id', 20)->first();
            return view('questions/question',['question' => $question,'question_no' => 19]);
        }
        if($question == "q20"){
            $question = Questions::where('id', 21)->first();
            return view('questions/question',['question' => $question,'question_no' => 20]);
        }
        if($question == "q21"){
            $question = Questions::where('id', 22)->first();
            return view('questions/question',['question' => $question,'question_no' => 21]);
        }
        if($question == "q22"){
            $question = Questions::where('id', 23)->first();
            return view('questions/question',['question' => $question,'question_no' => 22]);
        }
        if($question == "q23"){
            $question = Questions::where('id', 24)->first();
            return view('questions/question',['question' => $question,'question_no' => 23]);
        }
        if($question == "q24"){
            $question = Questions::where('id', 25)->first();
            return view('questions/question',['question' => $question,'question_no' => 24]);
        }
        if($question == "q25"){
            $question = Questions::where('id', 26)->first();
            return view('questions/question',['question' => $question,'question_no' => 25]);
        }
        if($question == "q26"){
            $question = Questions::where('id', 27)->first();
            return view('questions/question',['question' => $question,'question_no' => 26]);
        }
        if($question == "q27"){
            $question = Questions::where('id', 28)->first();
            return view('questions/question',['question' => $question,'question_no' => 27]);
        }
        if($question == "q28"){
            $question = Questions::where('id', 29)->first();
            return view('questions/question',['question' => $question,'question_no' => 28]);
        }
        if($question == "q29"){
            $question = Questions::where('id', 30)->first();
            return view('questions/question',['question' => $question,'question_no' => 29]);
        }
        if($question == "q30"){
            $question = Questions::where('id', 31)->first();
            return view('questions/question',['question' => $question,'question_no' => 30]);
        }
    }
    public function save_answers(Request $request){
        if(Auth::check()){
            if(Auth::user()->user_role == 2){
                if(session('answer_main_id')){
                    $question_no = $request->question_no;

                    if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
                            $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->update();

                            if($question_no == 5){
                                return redirect('questions/game-1');
                            }
                            else if($question_no == 10){
                                return redirect('questions/game-2');
                            }
                            else if($question_no == 15){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 20){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 25){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 30){
                                return redirect('packages');
                            }
                            else{
                                $next_page = $question_no +1;
                                return redirect('questions/q'.$next_page.'');
                            }
                    }
                    else{
                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = session('answer_main_id');
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            if($question_no == 5){
                                return redirect('questions/game/game-1');
                            }
                            else if($question_no == 10){
                                return redirect('questions/game/game-2');
                            }
                            else if($question_no == 15){
                                return redirect('questions/game/game-3');
                            }
                            else if($question_no == 20){
                                return redirect('questions/game/game-4');
                            }
                            else if($question_no == 25){
                                return redirect('questions/game/game-5');
                            }
                            else if($question_no == 30){
                                return redirect('packages');
                            }
                            else{
                                $next_page = $question_no +1;
                                return redirect('questions/q'.$next_page.'');
                            }
                    }

                    }
                    else{
                        if($request->question_no == 1){
                            $QuestionAnswerMain = new QuestionAnswerMain();
                            $QuestionAnswerMain->user_id = Auth::user()->id;
                            $QuestionAnswerMain->save();

                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            session(['answer_main_id' => $QuestionAnswerMain->id]);

                            return redirect('questions/q2');
                        }
                        else{
                            return redirect('questions/q1')->with('message', 'Please answer this question first');
                        }
                    }
            }
            else{
                if(session('answer_main_id')){
                    $question_no = $request->question_no;

                    if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
                            $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->update();

                            if($question_no == 5){
                                return redirect('questions/game-1');
                            }
                            else if($question_no == 10){
                                return redirect('questions/game-2');
                            }
                            else if($question_no == 15){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 20){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 25){
                                return redirect('questions/game-4');
                            }
                            else if($question_no == 30){
                                return redirect('sign-in');
                            }
                            else{
                                $next_page = $question_no +1;
                                return redirect('questions/q'.$next_page.'');
                            }
                    }
                    else{
                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = session('answer_main_id');
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            if($question_no == 5){
                                return redirect('questions/game/game-1');
                            }
                            else if($question_no == 10){
                                return redirect('questions/game/game-2');
                            }
                            else if($question_no == 15){
                                return redirect('questions/game/game-3');
                            }
                            else if($question_no == 20){
                                return redirect('questions/game/game-4');
                            }
                            else if($question_no == 25){
                                return redirect('questions/game/game-5');
                            }
                            else if($question_no == 30){
                                return redirect('sign-in');
                            }
                            else{
                                $next_page = $question_no +1;
                                return redirect('questions/q'.$next_page.'');
                            }
                    }

                    }
                    else{
                        if($request->question_no == 1){
                            $QuestionAnswerMain = new QuestionAnswerMain();
                            $QuestionAnswerMain->save();

                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            session(['answer_main_id' => $QuestionAnswerMain->id]);

                            return redirect('questions/q2');
                        }
                        else{
                            return redirect('questions/q1')->with('message', 'Please answer this question first');
                        }
                    }
            }
        }
        else{
            if(session('answer_main_id')){
            $question_no = $request->question_no;

            if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
                    $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
                    $QuestionAnswers->question_id = $request->question_id;
                    $QuestionAnswers->first_answer = $request->first_answer;
                    $QuestionAnswers->second_answer = $request->second_answer;
                    $QuestionAnswers->third_answer = $request->third_answer;
                    $QuestionAnswers->forth_answer = $request->forth_answer;
                    $QuestionAnswers->update();

                    if($question_no == 5){
                        return redirect('questions/game-1');
                    }
                    else if($question_no == 10){
                        return redirect('questions/game-2');
                    }
                    else if($question_no == 15){
                        return redirect('questions/game-4');
                    }
                    else if($question_no == 20){
                        return redirect('questions/game-4');
                    }
                    else if($question_no == 25){
                        return redirect('questions/game-4');
                    }
                    else if($question_no == 30){
                        return redirect('sign-in');
                    }
                    else{
                        $next_page = $question_no +1;
                        return redirect('questions/q'.$next_page.'');
                    }
            }
            else{
                    $QuestionAnswers = new QuestionAnswers();
                    $QuestionAnswers->answer_main_id = session('answer_main_id');
                    $QuestionAnswers->question_no = $request->question_no;
                    $QuestionAnswers->question_id = $request->question_id;
                    $QuestionAnswers->first_answer = $request->first_answer;
                    $QuestionAnswers->second_answer = $request->second_answer;
                    $QuestionAnswers->third_answer = $request->third_answer;
                    $QuestionAnswers->forth_answer = $request->forth_answer;
                    $QuestionAnswers->save();

                    if($question_no == 5){
                        return redirect('questions/game/game-1');
                    }
                    else if($question_no == 10){
                        return redirect('questions/game/game-2');
                    }
                    else if($question_no == 15){
                        return redirect('questions/game/game-3');
                    }
                    else if($question_no == 20){
                        return redirect('questions/game/game-4');
                    }
                    else if($question_no == 25){
                        return redirect('questions/game/game-5');
                    }
                    else if($question_no == 30){
                        return redirect('sign-in');
                    }
                    else{
                        $next_page = $question_no +1;
                        return redirect('questions/q'.$next_page.'');
                    }
            }

            }
            else{
                if($request->question_no == 1){
                    $QuestionAnswerMain = new QuestionAnswerMain();
                    $QuestionAnswerMain->save();

                    $QuestionAnswers = new QuestionAnswers();
                    $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
                    $QuestionAnswers->question_no = $request->question_no;
                    $QuestionAnswers->question_id = $request->question_id;
                    $QuestionAnswers->first_answer = $request->first_answer;
                    $QuestionAnswers->second_answer = $request->second_answer;
                    $QuestionAnswers->third_answer = $request->third_answer;
                    $QuestionAnswers->forth_answer = $request->forth_answer;
                    $QuestionAnswers->save();

                    session(['answer_main_id' => $QuestionAnswerMain->id]);

                    return redirect('questions/q2');
                }
                else{
                    return redirect('questions/q1')->with('message', 'Please answer this question first');
                }
            }


        }
    }
    public function game_1(Request $request){
        if($request->isMethod('get')){
        return view('questions/game_1');
        }
        if($request->isMethod('post')){
         return redirect('questions/q6');
        }
    }
    public function game_2(Request $request){
        if($request->isMethod('get')){
        return view('questions/game_2');
        }
        if($request->isMethod('post')){
         return redirect('questions/q11');
        }
    }
    public function game_3(Request $request){
        if($request->isMethod('get')){
        return view('questions/game_3');
        }
        if($request->isMethod('post')){
         return redirect('questions/q16');
        }
    }
    public function game_4(Request $request){
        if($request->isMethod('get')){
        return view('questions/game_4');
        }
        if($request->isMethod('post')){
         return redirect('questions/q21');
        }
    }
    public function game_5(Request $request){
        if($request->isMethod('get')){
        return view('questions/game_5');
        }
        if($request->isMethod('post')){
         return redirect('questions/q26');
        }
    }
}
