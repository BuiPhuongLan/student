<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Result;

class ResultController extends Controller
{

    public function store(Request $request)
    {        
        $re = new Result;

        $re->MSSV = Auth::user()->MSSV;
        $re->nhom = Auth::user()->nhom;
        $re->cau1 = $request->answer1;
        $re->cau2 = $request->answer2;
        $re->cau3 = $request->answer3;
        $re->cau4 = $request->answer4;
        $re->Thanhvien1 = $request->diem1;
        $re->Thanhvien2 = $request->diem2;

        $re->save();

        return redirect()->route('home_student');
    }
}
