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
      .form-control{
        width:750px;
        margin-left: auto;
        margin-right: auto;
      }
      .row{
        width:780px;
        background-color:#FFFFFF;
        border-radius:20px;
        margin-left: auto;
        margin-right: auto;
      }

      .form{
        background-color:#ffffff;
      }

    </style>

<body>
  <div class="py-7">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h2><strong>Edit Guardian Details</strong></h2>
          <p>You may now edit the guardian details.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Warning!</strong> Please check input field code<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  </div>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" id="myForm" action="">
          @csrf
        <input type="hidden" name="guardian_id" value="{{$guardian['id']}}">
         <div class="form row py-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="guardian_full_name" value="{{$guardian['guardian_full_name']}}" class="form-control" placeholder="Full Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    <input type="text" name="guardianSex" value="{{$guardian['guardianSex']}}" class="form-control" placeholder="Sex">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number 1:</strong>
                    <input type="text" name="guardianMobileNumber1" value="{{$guardian['guardianMobileNumber1']}}" class="form-control" placeholder="Mobile Number 1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number 2:</strong>
                    <input type="text" name="guardianMobileNumber2" value="{{$guardian['guardianMobileNumber2']}}" class="form-control" placeholder="Mobile Number 2">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number 3:</strong>
                    <input type="text" name="guardianMobileNumber3" value="{{$guardian['guardianMobileNumber3']}}" class="form-control" placeholder="Mobile Number 3">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telephone Number:</strong>
                    <input type="text" name="guardianTelNumber" value="{{$guardian['guardianTelNumber']}}" class="form-control" placeholder="Telephone Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="text" name="guardianEmail" value="{{$guardian['guardianEmail']}}" class="form-control" placeholder="E-mail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="guardianAddress" value="{{$guardian['guardianAddress']}}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Relation to Student:</strong>
                    <input type="text" name="guardianRelType" value="{{$guardian['guardianRelType']}}" class="form-control" placeholder="Relation to Student">
                </div>
            </div>
        </div>

        <div class="py-3 col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
      </form>

    <div class="py-0 col-xs-12 col-sm-12 col-md-12 text-center">
      <a href="/home/search/student/{{$guardian->id}}"><button type="submit" class="btn btn-info">Cancel</button></a>
      <p></p>
    </div>
  </div>
</body>

<footer id="fh5co-footer" class="footer fh5co-bg" role="contentinfo">
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
