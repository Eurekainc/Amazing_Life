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

    public function people(){
        $people = People::paginate(10);
    	return view('user.people')->with('people',$people);
    }

    public function notifications(){
    	return view('user.notifications');
    }


}
