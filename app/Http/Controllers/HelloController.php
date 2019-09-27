<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello()
    {
    	// return route('foo');
    	return 'name dddd';
    }

    public function foo()
    {
    	var_dump(route('Hello.foo'));
    	return 'name foooooooooooooo';
    }

    public function good()
    {
    	return 'name goooooooooooooooooood';
    }

    public function nice()
    {
    	return 'name niceeeeeeeeeeeee';
    }
}
