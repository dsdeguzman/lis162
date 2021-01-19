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
        background-color:#F8F8FF
      }

      .btn1{
        width:600px;
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
            <h2 style="padding-top:5px;"><strong>Class Sections</strong></h2>
            <p>See all students according to section.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3">
      @foreach($section_list as $section)
      <div class="container py-1">
        <div>
          <p><strong>{{$section->level->grade_level}} - Adviser: {{$section->adviser->adviser_full_name}}</strong></p>
          <a href="/home/sections/{{$section['id']}}">
            <button type="button" class="btn1 btn-info btn-lg">{{$section['section_name']}}</button>
          </a>
        </div>
      </div>
      @endforeach
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
