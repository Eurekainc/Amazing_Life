<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\GroupActivities;
use App\Group;
use App\Department;
use App\UserDetail;
use DB;

class GroupActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         
        $posts = GroupActivities::whereGroup(Auth::user()->group)->whereDepartment(Auth::user()->department)->paginate(2);
        $group = Group::whereId(Auth::user()->group)->first();
        $department = Department::whereId(Auth::user()->department)->first();

        if(count($posts) > 0) {
            foreach($posts as $post){
                $users = UserDetail::whereId($post->user_id)->get();
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
        //
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
