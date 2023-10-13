<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function insert() 
    {

    }

    public function update() 
    {

    }

    public function delete() 
    {

    }

    public function countAll() {
        $users = DB::table('users')->count();

        return view('dashboard', ['users' => $users]);
    }
}
