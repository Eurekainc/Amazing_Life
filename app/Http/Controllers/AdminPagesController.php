<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminPagesController extends Controller
{
    
    public function index(){
        if(Auth::user()->account_type != 1) {
            return redirect('user')->with('error','You are not permitted to view this page.');
        } else {
            return view('admin.index');
        }
    }



}
