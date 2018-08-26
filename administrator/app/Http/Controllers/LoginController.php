<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 26/08/18
 * Time: 21.02
 */

namespace Administrator\Http\Controllers;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

}