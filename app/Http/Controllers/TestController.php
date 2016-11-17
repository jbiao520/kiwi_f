<?php

namespace App\Http\Controllers;

use DB;


class TestController extends Controller
{
    /**
     *
     */
    public function info()
    {


        $users = DB::table('users')->get();
        foreach ($users as $user) {
            dd($user);
        }
    }
}