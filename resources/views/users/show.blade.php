@extends('layouts.app')

@section('content')

<div class="container-fluid">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif

	
	
	



 <div class="row">
       
	   
	   

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


<div class="col-sm-9 col-sm-offset-3"> 
<div class="card">
		
<div class="card-header">
			  Timetable
	  </div>
		<div class="card-body">
			
				<div class="table-responsive">
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
						@foreach($programme->course as $course)
							<tr>
										<td>{{ $course->coursetitle  }}</td>
										<td>{{$course->coursecode}}</td>
										<td>{{$course->lecturer}}</td>
								
										@isset($course->timetable->timefrom)
										<td>{{$course->timetable->timefrom}} to {{$course->timetable->timeto}}</td>
										@endisset
										@isset($course->timetable->venue)
										<td> {{$course->timetable->venue}}</td>
										@endisset
										@isset($course->timetable->date)
										<td> {{$course->timetable->date}}</td>
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