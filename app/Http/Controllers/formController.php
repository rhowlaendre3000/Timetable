<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Programme;
use App\Course;


class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
       
       // $this->middleware('auth', ['except' => ['create']]);
    }

    public function profile(){

        $profile = User::find(Auth::user()->id);
       return view('users.profile',compact('profile'));
    }



    public function index($id)
    {
        //
    
        $users = User::latest()->paginate();
        
        return view('users.all', compact('users'));
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
        return view('users.create', compact('programme'));
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
        $rules = [
            'name'     => 'required|min:4',
            'email'    => 'required|email|unique:users',
            'level'    => 'required',
            'programme'      => 'required',
            'studentid'=>  'required',
            'password' => 'required|string|min:6|confirmed',
            
        ];
        $status="update";

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('index/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $user = new User;

           $user->programme_id= Programme::where('programmename','=',$request->input('programme'))->first()->id;

           if($request->input('programme')=="Academic Directorate"){
            $user->admin=1;
           }
            /*
            if($request->input('programme')=="Mathematics"){
                $user->programme_id=1;
            }elseif($request->input('programme')=="Computer Science"){
                $user->programme_id=2;
            }elseif($request->input('programme')=="Statistics"){
                $user->programme_id=3;
            }elseif($request->input('programme')=="Economics"){
                $user->programme_id=4;
            }
            elseif($request->input('programme')=="Academic Directorate"){
                $user->programme_id=5;
                $user->admin=1;
            }
            */
            $user->name       = $request->input('name');
            $user->email      = $request->input('email');
            $user->level      = $request->input('level');
            $user->programmename   = $request->input('programme');
            $user->studentid   = $request->input('studentid');
            $user->password    = $request->input('password');
            

            if(!$user){
                $status="create";
            }
            if ($request->has('password')) {
                $user->password = bcrypt($request->input('password'));
            }
            if ($user->save()) {
                session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('login'));
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
        $user=User::find($id);
        return view('view')->with('user', $user);
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
        $user=User::find($id);
        return view('users.update')->with('user',$user);
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
        $user=User::find($id);
        $validator = Validator::make($request->all(), [
            'name'     => 'required|min:4',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('index/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{


            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->password=bcrypt($request->input('password'));
            $user->save();
        
            session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('index'));
        }
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
        $user = User::find($id);
        if ($user->delete()) {
            session()->flash('status', 'User deleted successfully');
        } else {
            session()->flash('status', 'Unable to delete user. Please try again');
        }
    
    return back();
    }
}
