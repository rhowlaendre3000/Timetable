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
                            <div class="card bg-color2" style="height:13em;" >
                            <div class="card-header"><h5>Timetable</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>

            

            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color5" style="height:13em;">
                            <div class="card-header"><h5>Profile</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>



            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color3" style="height:13em;">
                            <div class="card-header"><h5>User Listing</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>



            
            
</div>

<div class="row" style="margin-bottom: 20px;">

        
            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color4" style="height:13em;" >
                            <div class="card-header"><h5>Programmes</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>

            

            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color1" style="height:13em;">
                            <div class="card-header"><h5>Courses</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;"><span>Please</span> <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>



            <div class="col-sm-4 col-lg-4">
                            <div class="card bg-color6" style="height:13em;">
                            <div class="card-header"><h5>Anything Later</h5></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
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


  <div class="container">
      <div class="row">
      
          <div class="col-6">
          <div class="jumbotron jumbotron-fluid">
    <h3 class="display-5">Any Heading here. </h3>
    <p class="lead">to the The Student Examination Timetable Portal. This system is for authenticated and validated 
    students of the Accra Technical University</p>
  </div>
  
  
</div>
<div class="col-6">
          <div class="jumbotron jumbotron-fluid">
    <h3 class="display-5">Any Heading </h3>
    <p class="lead">to the The Student Examination Timetable Portal. This system is for authenticated and validated 
    students of the Accra Technical University</p>
  </div>
</div>
</div>

      </div>      

@endsection
@section('footer')
@include('includes.footer')
@endsection