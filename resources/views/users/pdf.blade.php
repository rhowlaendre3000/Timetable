



	
	
	

 <div class="row">
       
	   
	   

	
	

<div class="card ">
		
<div class="card-header">
			  Timetable
	  </div>
		<div class="card-body">
			
				<div class="table">
					<table>
						<thead>
							<tr>
								
								<th>Course</th>
								<th>Course Codes</th>
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
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>


