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

class UserController extends Controller
{
    public function sign_in(Request $request){

        if($request->isMethod('get')){
            return view('user/sign_in');
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email'   => 'required',
                'password'=> 'required',
               ]);


               $user_data = array(
                'email'  => $request->email,
                'status'  => "active",
                'user_role'  => 2,
                'password' => $request->password
                );

                if (Auth::attempt($user_data)) {
                    if(session('answer_main_id')){
                        $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
                        $QuestionAnswerMain->user_id = Auth::user()->id;
                        $QuestionAnswerMain->update();

                        $request->session()->forget(['answer_main_id']);
                    }
                    if(User::where('id', Auth::user()->id)->value('package') == null){
                        return redirect('packages');
                    }
                    else{
                        return redirect('dashboard');
                    }
                } else {
                    return back()->with('fail', 'Wrong Login Details');
                }
        }
    }
    public function sign_up(Request $request){
        if($request->isMethod('get')){
            return view('user/sign_up');
        }
        if($request->isMethod('post')){
            $this->validate($request, [
                'first_name'   => 'required',
                'last_name'   => 'required',
                'email'   => 'required | email | unique:users',
                'password_confirmation'  => 'required',
                'password'=> 'required | confirmed | min:6',
               ]);

                $user = new User();
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->user_role = 2;
                $user->status = "active";
                $user->save();

                $customer = new CustomerDetails();
                $customer->user_id = $user->id;
                $customer->first_name = $request->first_name;
                $customer->last_name = $request->last_name;
                $customer->save();

                $user_data = array(
                    'email'  => $request->email,
                    'status'  => "active",
                    'user_role'  => 2,
                    'password' => $request->password
                );

                if (Auth::attempt($user_data)) {
                    if(session('answer_main_id')){
                        $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
                        $QuestionAnswerMain->user_id = Auth::user()->id;
                        $QuestionAnswerMain->update();

                        $request->session()->forget(['answer_main_id']);
                    }
                    if(User::where('id', Auth::user()->id)->value('package') == null){
                        return redirect('packages');
                    }
                    else{
                        return redirect('dashboard');
                    }
                } else {
                    return back()->with('fail', 'Wrong Login Details');
            }
        }
    }
    public function buy_package($package, Request $request){
        if($request->isMethod('get')){
            $user = User::where('id',Auth::user()->id)->first();
            $user->package = $package;
            $user->activated_date = date('Y-m-d');
            $user->update();
            return back()->with('success', 'Package activated');
        }
        if($request->isMethod('post')){
         return redirect('questions/q6');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('sign-in');
    }
}
