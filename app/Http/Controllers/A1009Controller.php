<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class A1009Controller extends Controller
{
    //
    public function master ()
    {
    	return view('a1008/master');
    }

    public function dbtest()
    {
        $res = DB::table("users")->select('name')->get();
        // dd($res[0]);

        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->name;
        }

        $users = DB::table('users')->where('name', 'Ashley Ryan')->first();
        echo $users->name;

        $users = DB::table('users')->where('name', 'Ashley Ryan')->value('name');
        echo $users;

        $users = DB::table('users')->pluck('name', 'email');

        $users = DB::table('users')->count();

        $users = DB::table('users')->max('email');

        $users = DB::table('users')->avg('id');

        DB::table('users')->orderBy('id')->chunk(2, function($users) {
            var_dump(count($users));
        });

        $users = DB::table('users')->where('name','Ashley Ryan')->select(['name','id'])->first();

        $users = DB::table('users')->rightJoin('user_age', 'users.id', '=', 'user_age.userid')->get();

        dd($users);
    }

    public function egretTest(Request $request)
    { 
        $input = $request->all();
        $name = $request->input("name");
        return [
            'code' => 200,
            'data' => [
                'name' => $name,
                'age' => 20
            ]
        ];
    }
}
