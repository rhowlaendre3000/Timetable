<?php

namespace myTimeTable\Http\Controllers;

use myTimeTable\User;
use Auth;
use myTimeTable\Programme;
use myTimeTable\Timetable;
use myTimeTable\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $course=Course::all();
        
        return view('users.course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $course=Course::paginate(3);
        $programme=Programme::all();
        return view('users.course')->with(compact('programme'))->with(compact('course'));
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
            'title'=>'required|string',
            'code'=>'required|string',
            'lecturer'=>'required|string'
        ];

            $status='added';
        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect('course/create')
            ->withErrors($validator)
            ->withInput();
        }else{

            $course = new Course;
            

            $course->coursetitle=$request->input('title');
            $course->coursecode=$request->input('code');
            $course->lecturer=$request->input('lecturer');

            $course->programme_id=Programme::where('name','=',$request->input('programme'))->first()->id;


           /* if($request->input('programme')=="Mathematics"){
                    $course->programme_id=1;
            }elseif($request->input('programme')=="Computer Science"){
                    $course->programme_id=2;
            }elseif($request->input('programme')=="Statistics"){
                    $course->programme_id=3;
            }elseif($request->input('programme')=="Economics"){
                    $course->programme_id=4;
            }
            */


           // $course->programme_id=Programme::all()->last()->id;

            if(substr($course->coursecode,0,1)==1){
                $course->level_id=1;
            }elseif(substr($course->coursecode,0,1)==2){
                $course->level_id=2;
            }elseif(substr($course->coursecode,0,1)==3){
                $course->level_id=3;
            }elseif(substr($course->coursecode,0,1)==4){
                $course->level_id=4;
            }

            if($course->save()){
                session()->flash('status', 'course '.$status.'d successfully');
                return redirect(route('course.create'));
            }else{
                session()->flash('status', 'Unable to '.$status.'d successfully');
                return back()->withInput();
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \myTimeTable\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myTimeTable\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myTimeTable\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myTimeTable\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
