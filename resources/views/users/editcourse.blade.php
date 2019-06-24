@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
   <div class="col-sm-2 col-sm-offset-3"> 	
       
       </div>
    

         <div class="col-sm-5 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Edit Course
    	</div>
    		<div class="card-body">
                
                <form method="POST" action="{{ action('courseController@update', $course->id)}}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                              <label for="programme">Programme</label><em>*</em>
                              <select type="text" name="programme" class="form-control" id="title" required>
                              @foreach($programme as $programmes)
                              <option> {{ $programmes->name }}</option>
                              @endforeach
                              </select>
                              </div>
                              <div class="form-group">
                              <label for="name">Course Title</label><em>*</em>
                              <input type="text" name="title" value="{{$course->coursetitle}}" class="form-control" id="title" required>
                              </div>
                              <div class="form-group">
                              <label for="code">Course Code</label><em>*</em>
                              <input type="text" value="{{$course->coursecode}}" name="code" class="form-control" id="code" required>
                              </div>
                              <div class="form-group">
                              <label for="lecturer">Course Lecturer</label><em>*</em>
                              <input type="text" value="{{$course->lecturer}}" name="lecturer" class="form-control" id="lecturer" required>
                              </div>
                              <div class="form-group">
                              <input type="submit" class="btn btn-success" value="submit">
                              </div>

                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-2 col-sm-offset-3"> 	
       
      </div>

</div>

</div>
@endsection