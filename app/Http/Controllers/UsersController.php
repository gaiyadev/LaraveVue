<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function create() {
    	return view('admin.users.create');
    }

    public function store(Request $request) {
         return $request->all();
    }
}
