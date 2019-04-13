<?php

namespace myTimeTable\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use myTimeTable\User;
use myTimeTable\Timetable;
use myTimeTable\Course;
use myTimeTable\Programme;
use Carbon\Carbon;
use PDF;
class timetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
       // $course=Course::all();
      
        $users=User::find(Auth::user()->id);
        
        

        return view('users.timetable')->with(compact('users'))
                                      ->with(compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rules=[
            'course'=> 'required',
            'date'  =>  'required',
            'timefrom'=>'required',
            'timeto'  =>'required',
            'venue'   => 'required'
        ];

        $status="added";
        $validator=Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect('timetable/create')
            ->withInput()
            ->withErrors($validator);
        }else{
            $timetable = new Timetable;


            
            $timetable->course_id=Course::where('coursetitle','=',$request->input('course'))->first()->id;

          /*  if($request->input('course')=="Algebrae and Trigonometry"){
                $timetable->course_id=1;
            }elseif($request->input('course')=='Calculus I'){
                $timetable->course_id=2;
            }elseif($request->input('course')=='Computational Mathematics'){
                $timetable->course_id=5;
            }elseif($request->input('course')=="Introduction to Computer Science I"){
                $timetable->course_id=3; 
            }
            elseif($request->input('course')=="Introduction to Computer Science II"){
                $timetable->course_id=4;
            }
            elseif($request->input('course')=="Introduction to Statistics"){
                $timetable->course_id=6;
            }
            elseif($request->input('course')=="Micro Economics"){
                $timetable->course_id=7;
            }
            elseif($request->input('course')=="Macro Economics"){
                $timetable->course_id=8;
            }
            */
            
           // $course_id=$request->input('course');
           // $timetable->course_id= $request->input('course');
            $timetable->programme_id= Auth::user()->programme_id;
            $timetable->date=$request->input('date');
            $timefrom=$request->input('timefrom');
            $timetable->timefrom=Carbon::createFromFormat('H:i',$timefrom)->format('g:i a');
            $timeto=$request->input('timeto');
            $timetable->timeto=Carbon::createFromFormat('H:i',$timeto)->format('g:i a');
            $timetable->venue=$request->input('venue');


            if($timetable->save()){
                session()->flash('status', 'Route '.$status.'d successfully');
                return redirect(route('timetable.index' ));
            }
            session()->flash('status', 'Unable to '.$status.' user. Please try again');
             return back()->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $users=User::find(Auth::user()->id);
        $programme=Programme::find($id);
        return view('users.show')->with(compact('programme'))->with(compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function pdf($id){

        $users=User::find(Auth::user()->id);
        $programme=Programme::find($id);
        $pdf = PDF::loadView('users.pdf',compact('users','programme'));
        return $pdf->download('invoice.pdf');
    }
}
