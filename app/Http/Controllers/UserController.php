<?php

namespace App\Http\Controllers;

use App\Users;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');

        return view('user', ['users' => $users]);
    }

    public function show($id)
    {
        $users = Users::find($id);

        return view('userdetails', compact('users'));
    }
}
