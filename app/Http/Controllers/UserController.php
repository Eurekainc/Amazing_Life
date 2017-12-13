<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Group;
use App\People;
use App\Department;

class UserController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    VARIOUS USER FUNCTIONS THAT TAKE DATA TO RESPECTIVE PAGES
    **/
    public function index(){
    	return view('user.index');
    }

    // public function groups(){
    //     $group = Group::whereId(Auth::user()->group)->first();
    //     $department = Department::whereId(Auth::user()->department)->first();
    //     return view('user.groups',['group'=>$group, 'department'=>$department]);
    // }

    public function people(){
        $people = People::paginate(3);
    	return view('user.people')->with('people',$people);
    }

    public function notifications(){
    	return view('user.notifications');
    }

    public function details(){
        $group = Group::whereId(Auth::user()->group)->first();
        $department = Department::whereId(Auth::user()->department)->first();
    	return view('user.details',['group'=>$group, 'department'=>$department]);
    }
}
