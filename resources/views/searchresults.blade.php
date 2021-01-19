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

      .message{
        text-align:center;
        font-weight:bold;
      }

    </style>

  <body>
    <div class="py-3">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="/home/"><button type="button" class="btn btn-info btn-sm">Home</button></a>
      </div>
    </div>

    <div class="py-0">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h2><strong>Search Results</strong></h2>
            <p>Below are the matching results for your search.</p>
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
            <td><strong>Grade Level</strong></td>
            <td><strong>Section</strong></td>
            <td><strong>Adviser</strong></td>
            <td><strong>Guardian</strong></td>
          </tr>
        </thead>

        @forelse($searched_names as $searched_name)

        <tbody>
          <tr class=details>
            <td style="padding-top:35px;">{{$searched_name['lrn']}}</td>
            <td style="padding-top:35px;">{{$searched_name['student_full_name']}}</td>
            <td style="padding-top:35px;">{{$searched_name['studentSex']}}</td>
            <td style="padding-top:35px;">{{$searched_name->level->grade_level}}</td>
            <td style="padding-top:35px;">{{$searched_name->section->section_name}}</td>
            <td style="padding-top:35px;">{{$searched_name->adviser->adviser_full_name}}</td>
            <td>
              <p>{{$searched_name->guardian->guardian_full_name}}</p>
              <a href="/home/search/student/{{$searched_name['guardian_id']}}">
                <button type="button" class="btn btn-info btn-sm">
                  See Guardian Details
                </button>
              </a>
          </tr>
        </tbody>

        @empty
          <div class="py-7">
            <h1 class="message">Sorry, no students match your search.</h1>
          </div>
        @endforelse

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
