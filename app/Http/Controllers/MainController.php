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

class MainController extends Controller
{
    public function index(){

        return view('home');
    }
    public function packages(){

        return view('dashboard/packages');
    }
    public function dashboard(){

        return view('dashboard/dashboard');
    }
    public function tips(){

        return view('dashboard/tips');
    }

    public function consultationBooking(){

        return view('dashboard/consultation-booking');
    }
    public function internships(){

        return view('dashboard/internships');
    }
    public function scholarships(){

        return view('dashboard/scholarships');
    }
    public function universityPrograms(){

        return view('dashboard/university-programs');
    }
    public function testAttempt(){

        return view('dashboard/test-attempt');
    }
    public function suparFutureClub(){

        return view('dashboard/supar-future-club');
    }
    public function profile(){

        return view('dashboard/profile');
    }
    public function events(){

        return view('dashboard/event');
    }
    public function parentCommunity(){

        return view('dashboard/parent-community');
    }
    public function tipInner(){

        return view('dashboard/tip-inner');
    }
    public function uniInner(){

        return view('dashboard/university-inner');
    }
    public function internInner(){

        return view('dashboard/internship-inner');
    }
    public function scholarshipInner(){

        return view('dashboard/scholarship-inner');
    }
    public function superFutureInner(){

        return view('dashboard/super-futer-inner');
    }
    public function consultStepTwo(){

        return view('dashboard/consultation-booking-step-2');
    }
    public function searchBuddy(){

        return view('dashboard/search-buddy');
    }
    public function jobs(){

        return view('dashboard/jobs');
    }
    public function jobsInner(){

        return view('dashboard/jobs-inner');
    }
}
