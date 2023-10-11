<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index(): string
    {
        return "ini dari file page, dengan method index";
    }

}
