<?php

namespace myTimeTable\Http\Controllers;


use Auth;
use Illuminate\Support\Facades\Validator;

use myTimeTable\User;
use myTimeTable\Programme;
use Illuminate\Http\Request;

class programmeController extends Controller
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


        $programme=Programme::all();
        return view('users.programme', compact('programme'));
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
                'name'=>'required|alpha',
                'initials'=>'required|alpha'
                
        ];

        $status="stored";
        $validator=Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect('programme/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $programme = new Programme;

            $programme->name= $request->input('name');
            $programme->initials= $request->input('initials');

            
            

            if($programme->save()){
                session()->flash('status', 'Programme '.$status.'d successfully');
                return redirect(route('programme.create'));
            }else{
                session()->flash('status', 'Unable to '.$status.' user. Please try again');

                return back()->withInput();
            }
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myTimeTable\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(Programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myTimeTable\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myTimeTable\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        //
    }
}
