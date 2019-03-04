<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Timetable;
use App\Course;
use App\Programme;


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
       // $coursetime=Course::find(Auth::user()->id);
        $users=User::find(Auth::user()->id);
        
        return view('users.timetable')->with(compact('users'));
                                     // ->with(compact('coursetime'));
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


         

            if($request->input('course')=="Algebrae and Trigonometry"){
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
            
           // $course_id=$request->input('course');
           // $timetable->course_id= $request->input('course');
            $timetable->programme_id= Auth::user()->programme_id;
            $timetable->date=$request->input('date');
            $timetable->timefrom=$request->input('timefrom');
            $timetable->timeto=$request->input('timeto');
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
       
        $programme=Programme::find($id);
        return view('users.show')->with(compact('programme'));
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
}
