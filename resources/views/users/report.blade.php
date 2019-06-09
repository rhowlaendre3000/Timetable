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

<div class="col-sm-4 col-lg-4">
                            <div class="card bg-color2" style="height:13em;">
                            <div class="card-header"><h5>Number of Users :</h5></div>
  <div class="card-body">
    
  <div class="row" id="">
      <div class="col-sm-8">
    <p class="card-text" style="color:white;"> The Total Number of <strong>Users : </strong>{{ $user->count() }} </p>
</div>
<div class="col-sm-4" id="butts">
</div>
  </div>
    <div class="progress" style="height: 3px;">
  <div  class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
  
                            </div>
            </div>


        <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color5" style="height:13em;">
                            <div class="card-header"><h5>Number of Programmes</h5></div>
  <div class="card-body">
    
  <div class="row" id="">
      <div class="col-sm-8">
    <p class="card-text" style="color:white;">Total Number of <strong>Programmes : </strong>{{$programme->count() }}</p>
</div>
<div class="col-sm-4" id="butts">
</div>
  </div>
      <div class="progress" style="height: 3px;">
  <div  class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
                            </div>
            </div>

            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color2" style="height:13em;">
                            <div class="card-header"><h5>Number of Courses</h5></div>
  <div class="card-body">
    
  <div class="row" id="">
      <div class="col-sm-8">
    <p class="card-text" style="color:white;"> Total Number of <strong>Courses : </strong>{{$course->count()}} </p>
</div>
<div class="col-sm-4" id="butts">
</div>
  </div>
    <div class="progress" style="height: 3px;">
  <div  class="progress-bar" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </div>
  
                            </div>
            </div>


            
</div>


</div>



                    @endsection
