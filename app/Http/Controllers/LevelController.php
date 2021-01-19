<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Level;
use Illuminate\Validation\ValidationException;

class LevelController extends Controller
{
    public function level_index()
    {
      $level_list= Level::query()->get();

      return view('levels', ['level_list'=>$level_list]);
    }

    public function levelstudentlist($level_id)
    {
      //get name of student under said level
      $student_list= Student::where('level_id',$level_id)->get();

      return view('levelstudentlist', ['student_list'=>$student_list]);
    }
}
