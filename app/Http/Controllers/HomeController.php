<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Group;
use App\People;
use App\Department;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::whereId(Auth::user()->group)->first();
        $department = Department::whereId(Auth::user()->department)->first();
        $people = People::paginate(2);
        return view('home',['group' => $group, 'department' => $department,'people' => $people]);
    }
}
