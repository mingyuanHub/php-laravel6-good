<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function file(Request $request)
    {
    	$file = $request->file('photo');
    	var_dump($file);

    	$a = $request->photo;

    	var_dump($a);

    	$path = $request->photo->path();
    	var_dump($path);

    	$extension = $request->photo->extension();
    	var_dump($extension);

    	$path = $request->photo->store('images');
    	var_dump($path);
    }
}
