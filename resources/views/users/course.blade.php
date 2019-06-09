@extends('layouts.app')

@section('content')
<div class="container-fluid">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
    

         <div class="col-sm-4 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Add New Courses
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/course">
                {{ csrf_field() }}
                @include('includes.courseform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-8 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Courses Available
    	</div>
    		<div class="card-body">
                <div class="table">
                    <table class="table table-bordered">
                        <thead>
                       
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Lecturer</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    <tbody>
                    @foreach($course as $courses)
                        <tr></tr>
                        <td>{{$courses->coursetitle}}</td>
                        <td>{{$courses->coursecode}}</td>
                        <td>{{$courses->lecturer}}</td>
                        <td><a href="{{ route('course.edit', $courses->id) }}" class="btn btn-success btn-xs">Edit</a>
									
									<form action="{{ route('course.destroy', $courses->id) }}" method="POST" style="display:inline-block">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-xs">
											<span>DELETE</span>
										</button>
									</form></td>
                                    
                                    
                   @endforeach
                   
                    </tbody>

                    </table>
                    {{$course->links()}}
                </div>
                
					
</div>	
            </div>
      </div>

</div>

</div>
@endsection