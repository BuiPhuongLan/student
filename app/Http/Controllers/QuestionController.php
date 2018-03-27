<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\User;
use App\Result;
use Auth;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::simplePaginate(6);
        $users = User::all();
        $id_nhom = Auth::user()->nhom;
        $dem = 1;
        //$count = DB::table('questions')->count();
        // $questions = DB::table('questions')->simplePaginate(2);
        return view('student.survey', compact('questions','users','id_nhom','dem'));
    }
    
}
