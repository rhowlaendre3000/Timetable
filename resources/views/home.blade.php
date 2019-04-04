@extends('layouts.app')
<link href="{{asset('css/admin.css')}}" rel = "stylesheet" type="text/css" />




@section('content')



                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">

<div class="row" style="margin-bottom: 20px;">

<div class="col-sm-5 col-lg-5">
                            <div class="card bg-color2" style="height:13em;">
                            <div class="card-header"><h5>Timetable</h5></div>
  <div class="card-body">
    
  <div class="row" id="">
      <div class="col-sm-8">
    <p class="card-text" style="color:white;"> This Section Displays your <strong>Timetable</strong> </p>
</div>
<div class="col-sm-4" id="butts">
<a href="{{ url('timetable') }}"><button type="button"  class="btn btn-light"><i class="fas fa-calendar-alt"></i></button></a>
</div>
  </div>
    <div class="progress" style="height: 3px;">
  <div  class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
  
                            </div>
            </div>
            <div class="col-sm-2 col-lg-2">
            </div>

        <div class="col-sm-5 col-lg-5">
                            <div class="card bg-color5" style="height:13em;">
                            <div class="card-header"><h5>Profile</h5></div>
  <div class="card-body">
    
  <div class="row" id="">
      <div class="col-sm-8">
    <p class="card-text" style="color:white;"> This Section Helps to Check <strong>User Profile</strong></p>
</div>
<div class="col-sm-4" id="butts">
    <a href="{{url('userprofile')}}"><button type="button"  class="btn btn-light"><i class="fas fa-user"></i></button></a>
</div>
  </div>
      <div class="progress" style="height: 3px;">
  <div  class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
                            </div>
            </div>


            
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="row">
          <div class="col-12">
    <h3 class="display-5">Welcome </h3>
    <p class="lead">to the The Student Examination Timetable Portal. This system is for authenticated and validated 
    students of the Accra Technical University</p>
  </div>
  
</div>
</div>
</div>

</div>



                    @endsection
@section('footer')
@include('includes.footer')
@endsection