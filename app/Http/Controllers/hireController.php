<?php

namespace myTimeTable\Http\Controllers;

use Illuminate\Http\Request;
use myTimeTable\Profile;
use myTimeTable\User;
use Auth;
class hireController extends Controller
{
    //


    public function index(){
    
    $user=User::all();
    $profile=Profile::all();

        return view('hire')->with(compact('user'))->with(compact('profile'));
    }
}
