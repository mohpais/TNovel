<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use \App\Novel;
class DashboardController extends Controller
{
    public function index()
    {
        $dates = Novel::all();
        $data = \App\Chapter::all();
        return view('author.dashboard.index', ['data' => $data, 'dates' => $dates]);
    }

    public function profile()
    {
        $capt = Auth()->user()->id;
        $author = \App\User::find($capt);
        return view('author.dashboard.profile', ['author' => $author]);
    }

}
