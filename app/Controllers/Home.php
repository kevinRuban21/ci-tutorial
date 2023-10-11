<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about_index($param1, $param2)
    {
        return "ini adalah parameter 1 : ". $parameter1.
        " dan ini adalah parameter 2 : ". $parameter2;
    }

}
