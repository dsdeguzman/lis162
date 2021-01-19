<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <style>
      .label{
        text-align:center
      }

      .details{
        text-align:center;
      }

      .table{
        background-color:#ffffff;
      }
    </style>

  <body>
    <div class="py-3">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="/home/"><button type="button" class="btn btn-info btn-sm">Home</button></a> /
        <a href="/home/sections"><button type="button" class="btn btn-info btn-sm">Back to list of sections</button></a>
      </div>
    </div>

  @foreach($student_list as $student)
  @endforeach
    <div class="py-0">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
              <h5>Grade Level: <strong>{{$student->level->grade_level}}</strong></h5>
              <h5>Section: <strong>{{$student->section->section_name}}</strong></h5>
              <h5>Adviser: <strong>{{$student->adviser->adviser_full_name}}</strong></h5>
          </div>
        </div>
      </div>
    </div>

    <div class="py-7 max-w-7xl mx-auto sm:px-6 lg:px-8 table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="label">
            <td><strong>LRN</strong></td>
            <td><strong>Full Name</strong></td>
            <td><strong>Sex</strong></td>
            <td><strong>Guardian</strong></td>
          </tr>
        </thead>

        @foreach($student_list as $student)

        <tbody>
          <tr class=details>
            <td style="padding-top:35px;">{{$student['lrn']}}</td>
            <td style="padding-top:35px;">{{$student['student_full_name']}}</td>
            <td style="padding-top:35px;">{{$student['studentSex']}}</td>
            <td>
              <p>{{$student->guardian->guardian_full_name}}</p>
              <a href="/home/search/student/{{$student['guardian_id']}}">
                <button type="button" class="btn btn-info btn-sm">
                  See Guardian Details
                </button>
              </a>
          </tr>
        </tbody>

        @endforeach
      </table>
    </div>
  </body>

  <footer id="fh5co-footer" class="footer" role="contentinfo">
    <div class="copyright">
      <div class="col-md-12 text-center">
        <hr>
        <p>
          <small class="block">&copy; 2021 | All Rights Reserved.</small>
          <small class="block">Millenium University</small>
        </p>
      </div>
    </div>
  </footer>

</x-app-layout>
