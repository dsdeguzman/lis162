<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Validation\ValidationException;

class GuardianController extends Controller
{
    public function view_details($guardian_id)
    {
      //get name of student related to said guardian
      $student= Student::where('guardian_id',$guardian_id)->get();

      //shows table containing guardian details
      $guardian_details= Guardian::where('id',$guardian_id)->get();

      return view('guardiandetails', ['student'=>$student, 'guardian_details'=>$guardian_details]);
    }

    public function edit($guardian_id)
    {
      //edit details of student's guardian
      $guardian= Guardian::find($guardian_id);
      return view('editform',['guardian'=>$guardian]);
    }

    public function update(Request $req)
    {
      //update details of student's guardian
      $req->validate([
            'guardian_full_name' => 'required',
            'guardianSex' => 'required',
            'guardianMobileNumber1' => 'required',
            'guardianEmail' => 'required',
            'guardianAddress' => 'required',
            'guardianRelType' => 'required',
        ]);

      $guardian= Guardian::find($req->guardian_id);
      $guardian->guardian_full_name=$req->guardian_full_name;
      $guardian->guardianSex=$req->guardianSex;
      $guardian->guardianMobileNumber1=$req->guardianMobileNumber1;
      $guardian->guardianMobileNumber2=$req->guardianMobileNumber2;
      $guardian->guardianMobileNumber3=$req->guardianMobileNumber3;
      $guardian->guardianTelNumber=$req->guardianTelNumber;
      $guardian->guardianEmail=$req->guardianEmail;
      $guardian->guardianAddress=$req->guardianAddress;
      $guardian->guardianRelType=$req->guardianRelType;
      $guardian->save();

      $guardian_details= Guardian::where('id',$req->guardian_id)->get();

      //get name of student related to said guardian
      $student= Student::where('guardian_id',$req->guardian_id)->get();

      return view('guardiandetails', ['guardian_details'=>$guardian_details, 'student'=>$student])
        //->with('guardian_updated','Guardian details updated successfully!');
    }
}
