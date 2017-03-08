<?php

namespace App\Http\Controllers;

use App\Census;
use App\Http\Requests\CreateUsersRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $census = Census::all();

        return view('home', compact('census'));
    }

}
