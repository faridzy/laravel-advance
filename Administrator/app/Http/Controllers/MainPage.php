<?php

namespace Administrator\Http\Controllers;

use Illuminate\Http\Request;
use Common\Models\User;

class MainPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('welcome', ['title' => 'Backend Laravel']);
    }
}
