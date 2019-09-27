<?php

namespace App\Http\Controllers\Hello;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    //
    public function foo()
    {
    	var_dump(route('Hello.foo'));
    	return "hello";
    }
}
