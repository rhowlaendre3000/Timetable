@extends('layouts.app')

@section('content')

<div class="container-fluid" style="width:1000px">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif


	<div class="card">
	
  <div class="card-header text-center" >
    STUDENT PROFILE
  </div>
 
 <div class="row">
 
  <div class="col-sm-6">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="card-text" style="color:black;">NAME : {{$profile->name}}</div>
   
  </div>
</div>



<div class="col-sm-6">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="card-text" style="color:black;">STUDENT ID :{{$profile->studentid}} </div>
   
  </div>
</div>




  </div>

  <div class="row">

  <div class="col-sm-6">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="card-text" style="color:black;">EMAIL : {{$profile->email}}</div>
   
  </div>
</div>


<div class="col-sm-6">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="card-text" style="color:black;">LEVEL: {{$profile->level}}</div>
   
  </div>
</div>




  </div>

  <div class="row">

  <div class="col-sm-6">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="card-text" style="color:black;">PROGRAMME : {{$profile->programmename}}</div>
   
  </div>
</div>







  </div>
  
  <div class="card-footer text-muted">
    
  </div>
</div>





    </div>

@endsection