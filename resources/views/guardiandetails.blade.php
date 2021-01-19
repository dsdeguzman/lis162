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
      .table{
        width:600px;
      }

      .label{
        text-align:right;
      }

      .table{
        background-color:#ffffff;
        border-radius:20px;
        margin-left: auto;
        margin-right: auto;
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
              <h2><strong>Guardian Details</strong></h2>
              <p>Below are the student/s related to this guardian:</p>
                <div>
                  @foreach ($student as $stud)
                    <li>{{$stud->student_full_name}}</li>
                  @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          @if(Session::has('guardian_updated'))
            <div class="alert alert-success" role="alert">
              {{Session::get('guardian_updated')}}
            </div>
          @endif
        </div>
      </div>

      <div class="py-7 max-w-7xl mx-auto sm:px-6 lg:px-10 table-responsive">
        <div class="px-6">
          @foreach ($guardian_details as $guardian_detail)
            <table class="table table-borderless">
                <tr>
                  <td class="label"><strong>Name: &#128203;</strong></td>
                  <td>{{$guardian_detail->guardian_full_name}}</td>
                </tr>
                  <td class="label"><strong>Sex: 	&#9892;</strong></td>
                  <td>{{$guardian_detail->guardianSex}}</td>
                </tr>
                <tr>
                  <td class="label"><strong>Mobile Number 1: &#128241;</strong></td>
                  <td>{{$guardian_detail->guardianMobileNumber1}}</td>
                </tr>
                <tr>
                  <td class="label"><strong>Mobile Number 2: &#128241;</strong></td>
                  <td>
                    @if (empty($guardian_detail->guardianMobileNumber2))
                      N/A
                    @else
                      {{$guardian_detail->guardianMobileNumber2}}
                    @endif
                  </td>
                </tr>
                <tr>
                  <td class="label"><strong>Mobile Number 3: &#128241;</strong></td>
                  <td>
                    @if (empty($guardian_detail->guardianMobileNumber3))
                      N/A
                    @else
                      {{$guardian_detail->guardianMobileNumber3}}
                    @endif
                  </td>
                </tr>
                <tr>
                  <td class="label"><strong>Telephone Number: &#9742;</strong></td>
                  <td>
                    @if (empty($guardian_detail->guardianTelNumber))
                      N/A
                    @else
                      {{$guardian_detail->guardianTelNumber}}
                    @endif
                  </td>
                </tr>
                <tr>
                  <td class="label"><strong>E-mail: &#128233;</strong></td>
                  <td>{{$guardian_detail->guardianEmail}}</td>
                </tr>
                <tr>
                  <td class="label"><strong>Address: &#127968;</strong></td>
                  <td>{{$guardian_detail->guardianAddress}}</td>
                </tr>
                <tr>
                  <td class="label"><strong>Relation to Student: &#128106;</strong></td>
                  <td>{{$guardian_detail->guardianRelType}}</td>
                </tr>
            </table>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <a href="/home/search/student/{{$guardian_detail->id}}/edit" class="btn btn-info">Edit Details</a>
            </div>
          @endforeach

        </div>
      </div>

      <footer class="footer fh5co-bg">
        <hr>
          <div class="row text-center">
            <p class="col-md-12">
              <small class="block">&copy; 2021 | All Rights Reserved.</small>
              <small class="block">Millenium University</small>
            </p>
          </div>
      </footer>

</x-app-layout>
