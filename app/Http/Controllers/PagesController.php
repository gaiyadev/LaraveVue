<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = 'THIS IS MY HOME PAGE';
        return view('pages/index', compact('title'));
    }

    public function about () {
        $title = 'THIS IS MY ABOUT PAGE';
        return view('pages/about', compact('title'));
    }

    public function services () {
        $data = array (
            'title'=> 'Services',
            'services'=> ['web design', 'seo', 'graphics']

        );
        return view('pages/services')->with($data);
    }
}
