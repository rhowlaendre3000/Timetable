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

        
            <div class="col-sm-4 col-lg-3">
                            <div class="card bg-color2">
                            <div class="card-header"><h3>PROFILE</h3></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>

            

            <div class="col-sm-4 col-lg-3">
                            <div class="card bg-color2">
                            <div class="card-header"><h3>TIMETABLE</h3></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                            <div class="card bg-color2">
                            <div class="card-header"><h3>CONTACT ADMIN</h3></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" ">Click</a> whatever</p>
  </div>
                            </div>
            </div>

            <div class="col-sm-4 col-lg-3">
                            <div class="card bg-color2">
                            <div class="card-header"><h3>TAB 1</h3></div>
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