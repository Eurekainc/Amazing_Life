<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Group;
use App\People;
use App\Department;
use App\UserDetail;

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

    **/
    public function index(){
    	return view('user.index');
    }

    public function groups(){
        $group = Group::whereId(Auth::user()->group)->first();
        $department = Department::whereId(Auth::user()->department)->first();
        return view('user.groups',['group'=>$group, 'department'=>$department]);
    	}

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

    public function getUpdate(){

    	return view('user.update');
    }

    public function update(Request $request){
      $id = Auth::user()->id;

      $this->validate($request, [
        'name'=>'required',
        'phone' => 'required',
        'email' => 'required',
        'home_address' => 'required'
      ]);

      //EDIT DETAILS
      $user = UserDetail::find($id);
      $user->name = $request->input('name');
      $user->phone = $request->input('phone');
      $user->email = $request->input('email');
      $user->home_address = $request->input('home_address');
    	return view('/user')->with('success','Your details have been successfully updated!');
    }


}
