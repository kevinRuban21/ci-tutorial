<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function tentang_kami($parameter1, $parameter2): string
    {
        return "ini adalah parameter 1 : ". $parameter1.
        " dan ini adalah parameter 2 : ". $parameter2;
    }

    public function kontak($parameter1, $parameter2): string
    {
        return "ini adalah parameter 1 : ". $parameter1. 
        " dan ini adalah parameter 2 : ". $parameter2;
    }

}
