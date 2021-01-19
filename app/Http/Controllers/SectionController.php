<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use Illuminate\Validation\ValidationException;

class SectionController extends Controller
{
    public function section_index()
    {
      $section_list= Section::query()->orderBy("level_id", "asc")->get();

      return view('sections', ['section_list'=>$section_list]);
    }

    public function sectionstudentlist($section_id)
    {
      //shows table containing guardian details
      $student_list= Student::where('section_id',$section_id)->get();

      return view('sectionstudentlist', ['student_list'=>$student_list]);
    }

}
