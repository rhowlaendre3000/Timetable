@extends('layouts.app')

@section('content')

<div class="container-fluid">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif

	
	
	



 <div class="row">
       
	   
	   
 @if(Auth::user()->admin==1)
	   <div class="col-sm-3 col-sm-offset-3"> 
	  	
	  <div class="card">
	  <div class="card-header">
			  Add Venue,Date and Time
	  </div>
		  <div class="card-body">
			  
			  <form method="post" action="/timetable">
			  {{ csrf_field() }}
			  @include('includes.datevenueform')
			  </form>
				  
</div>	
		  </div>
		 
	</div>
	@endif

	
	<div class="col-sm-9 col-sm-offset-3"> 

<div class="card ">
		
<div class="card-header">
			  Timetable
	  </div>
		<div class="card-body">
			
				<div class="table">
					<table class="table table-bordered">
						<thead>
							<tr>
								
								<th>Course</th>
								<th>Course Code</th>
                                <th>Lecturer</th>
								<th>Time</th>
								<th>Venue</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>

					
						
									
					
					
					
						@foreach($users->programme->course->where("level_id",'==', substr($users->programme->course->last()->coursecode,0,1)) as $user)
						
							<tr>
								
							
								
							
								
                                <td>{{$user->coursetitle}}</td>
                                <td>{{$user->coursecode}}</td>
                                <td>{{$user->lecturer}}</td>
								
								@isset($user->timetable->timefrom)
								<td>{{$user->timetable->timefrom}} to {{$user->timetable->timeto}}</td>
								@endisset
								@isset($user->timetable->venue)
								<td> {{$user->timetable->venue}}</td>
								@endisset
								@isset($user->timetable->date)
								<td> {{$user->timetable->date}}</td>
								@endisset
						
							
							</tr>
							
							@endforeach
						</tbody>
					</table>
					
				</div>

				
				<div class="text-center">
				
				</div>
			
				
		
		</div>
	</div>

</div>
</div>




@endsection