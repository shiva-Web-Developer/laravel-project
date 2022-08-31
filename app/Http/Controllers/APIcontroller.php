<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    function hello()
    {
        return ["result"=>"done","marks"=>"pass"];
    }

}
