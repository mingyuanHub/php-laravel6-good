<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    //
    public function test1() {
        return 1111;
    }

    //
    public function test2() {
        return 2222;
    }

    public function test3(Request $request) {
        $a = $request->query();
        var_dump($a) ;

        $input = $request->all();
        var_dump($input);
        echo $request->is('hello/*');
        $uri = $request->url();
        var_dump($uri);
        $uri = $request->path();
        var_dump($uri);
        $name = $request->input("name");
        $a = $request->input("a");
        var_dump($name);
        var_dump($a);
        return response('Hello World', 300);
    }
}
