@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
    

         <div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Add Programmes
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/programme">
                {{ csrf_field() }}
                @include('includes.programmeform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Available Programmes 
    	</div>
    		<div class="card-body">
                <div class="table">
                    <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Name</th>
                                 
                              </tr>
                        </thead>

                        <tbody>
                        @foreach($programme as $programmes)
                              <tr>
                                   
                              <td> <a href="{{ route('timetable.show', $programmes->id) }} "> {{ $programmes->name }} </a></td>
                                         
                              </tr>
                              @endforeach
                        </tbody>
                        
                    </table>

                </div>
                
					
</div>	
            </div>
      </div>

</div>

</div>
@endsection