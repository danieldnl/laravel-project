<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Daniel','Eliane','Brisa','Chiquinho'];
        return View('home',compact('people'));
    }

    public function about()
    {
        return View('about');
    }
}
