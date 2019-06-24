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
       $programme=Programme::all();
        $course=Course::all();
        
        return view('users.course')->with(compact('programme'))->with(comapact('course'));
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
            'code'=>'required|alpha_num',
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

            if(substr($course->coursecode,3,1)==1){
                $course->level_id=1;
            }elseif(substr($course->coursecode,3,1)==2){
                $course->level_id=2;
            }elseif(substr($course->coursecode,3,1)==3){
                $course->level_id=3;
            }elseif(substr($course->coursecode,3,1)==4){
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $course=Course::find($id);
        return view('users.', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course=Course::find($id);
        $programme=Programme::all();
        return view('users.editcourse')->with(compact('course'))->with(compact('programme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myTimeTable\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $course=Course::find($id);
        $status="updated";
        $rules=[
            'title'=>'required|string',
            'code'=>'required|alpha_num',
            'lecturer'=>'required|string'
        ];

        $validator=Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect('course/'. $id . '/edit')->withErrors($validator)->withInput();
        }else{


            $course->coursetitle=$request->input('title');
            $course->coursecode=$request->input('code');
            $course->lecturer=$request->input('lecturer');

            $course->programme_id=Programme::where('name','=',$request->input('programme'))->first()->id;

            if(substr($course->coursecode,3,1)==1){
                $course->level_id=1;
            }elseif(substr($course->coursecode,3,1)==2){
                $course->level_id=2;
            }elseif(substr($course->coursecode,3,1)==3){
                $course->level_id=3;
            }elseif(substr($course->coursecode,3,1)==4){
                $course->level_id=4;
            }


            $course->save();

            session()->flash('status', 'Course '.$status.'d successfully');
                return redirect(route('course.create'));
        }

        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course=Course::find($id);
        if($course->delete()){
            session()->flash('status', 'Course deleted successfully');
        }else{
            session()->flash('status', 'Unable to delete Course');
        }
        return back();
    }
}
