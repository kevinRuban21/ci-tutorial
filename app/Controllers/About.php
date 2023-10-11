<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        return "ini dari file about dengan method index ";
    }
    public function contact($param1 = null, $param2 = null)
    {
        if(isset($param1) && isset($param2)) {
            return "ini dari file about, dengan method contact dan ada parameters, dan data parameternya yaitu: ".$param1." dan ".$param2;
        }
        return "ini dari file about, dengan method contact";
    }

}
