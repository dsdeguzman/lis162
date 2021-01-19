<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{

  public function search(Request $student_name)
    {
      try
      {
        //search students with matching name accdg to user's search key
        $student_name->validate([
              'student_name'=> 'required',
          ]);

        $key = trim($student_name->get('student_name'));

        $searched_names= Student::query()
          ->where(function($query) use ($key){
            $query->where('student_full_name',"like","%".$key."%");
          })
          ->get();

        return view('searchresults',['searched_names'=>$searched_names]);
      }
      catch(\Exception $e)
      {
        return redirect('/home')->with('required_value','Please enter name to search.');
      }

    }

  }
