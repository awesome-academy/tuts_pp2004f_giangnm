<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('project.home');
    }

    public function about()
    {
        return view('project.about');
    }

    public function contact()
    {
        return view('project.create');
    }
}
