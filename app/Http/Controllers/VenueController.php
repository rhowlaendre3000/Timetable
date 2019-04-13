<?php

namespace myTimeTable\Http\Controllers;

use myTimeTable\Venue;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class venueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.venue');
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
                'venue'=>'required|string',
                'room' =>'required|string'

        ];

        $status="added";
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('venue.create')
            ->withInput()
            ->withErrors($validator);
        }else{
            $venue = new Venue;
           // $venue->id=5;
            $collection=collect([1,2,3,4,5,6]);
            $venue->course_id=$collection->random();
            $venue->name=$request->input('venue');
            $venue->room=$request->input('room');


            if($venue->save()){
                session()->flash('status', 'venue '.$status.'d successfully');
                 return redirect(route('venue.create'));
            }else{
                session()->flash('status', 'Unable to '.$status.'d successfully');
                return back()->withInput();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \myTimeTable\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myTimeTable\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit(Venue $venue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myTimeTable\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venue $venue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myTimeTable\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venue $venue)
    {
        //
    }
}
