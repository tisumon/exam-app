<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.add');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
    public function manage()
    {
        return view('admin.user.manage');
    }
}
