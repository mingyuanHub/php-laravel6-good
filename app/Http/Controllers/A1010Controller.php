<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class A1010Controller extends Controller
{
    //
    public function search() {
    	$res = DB::connection()->table('users')->where('id', 1)->get();
    	dd($res);
    }
}
