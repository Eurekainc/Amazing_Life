<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\GroupActivities;
use App\Group;
use App\Department;
use App\UserDetail;
use App\user;

class GroupActivitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = GroupActivities::whereGroup(Auth::user()
                                  ->group)->whereDepartment(Auth::user()
                                  ->department)->orderBy('id','desc')
                                  ->paginate(10);

        $group = Group::whereId(Auth::user()->group)->first();
        $department = Department::whereId(Auth::user()->department)->first();
        if(count($posts) > 0) {
          foreach($posts as $post){
            $uid = $post->user_id;
            $users = user::find($uid)->GroupActivities;
          }
          return view('user.groups',['group'=>$group, 'department'=>$department,'posts'=>$posts,'users'=>$users]);
        } else {
          return view('user.groups',['group'=>$group, 'department'=>$department,'posts'=>$posts]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment'=>'required',
        ]);

        $comment = new GroupActivities;
        $comment->user_id = Auth::user()->id;
        $comment->department = Auth::user()->department;
        $comment->group = Auth::user()->group;
        $comment->content = $request->input('comment');
        $comment->save();
        return redirect('user/groups')->with('success','Post Submitted!');;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
