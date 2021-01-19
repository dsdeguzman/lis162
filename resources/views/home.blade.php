<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>

    <style>
      .dropdown1{
        width:300px;
      }

      .ddcontainer{
        text-align:center;
      }

      .copyright{
        position:absolute;
        bottom:0px;
        right:0px;
        left:0px;
      }
    </style>

  <body>
    <!-- Welcome message -->
    <div class="py-7">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 border-gray-200">
            <h2><strong>Home</strong></h2>
            <p>Welcome! You may now search.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Alert message -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      @if(Session::has('required_value'))
        <div class="alert alert-danger" role="alert">
          {{Session::get('required_value')}}
        </div>
      @endif
    </div>

    <!-- Search Widget -->
    <div class="py-0">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card my-3">

                <form class="card-body" action="/home/search/{student_name}" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter name of student" name="student_name">
                        <span class="input-group-btn">
                    <button class="btn btn-info" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
          </div>
      </div>
    </div>

    <div class="py-1">
      <h5><center>or you may also</center></h5>
        <div class="ddcontainer py-0">
          <div class="dropdown1 btn-group py-3">
            <button type="button" class="btn btn-info">View students according to...</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="/home/sections">Section</a>
              <a class="dropdown-item" href="/home/levels">Grade Level</a>
            </div>
          </div>
      </div>
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
