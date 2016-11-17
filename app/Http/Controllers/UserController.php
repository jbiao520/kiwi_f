<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    /**
     * Show the user/info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            //$users = DB::table('users')->get();
            $user = Auth::user();
            return view('/user/userinfo')->with('users', $user);
        } else {
            return view('welcome');
        }


    }
}
