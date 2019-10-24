<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Flight;

class RedisController extends Controller
{
    //
    public function test() {
        Redis::set('name', 'Taylor');
        $res = Redis::get('name');
        // dd($res);

        Redis::pipeline(function ($pipe) {
            for ($i = 0; $i < 1000; $i++) {
                $pipe->set("key-larv:$i", $i);
            }
        });
    }

    public function test2() {
        $res = Flight::where('name','222')->first();

        $flight = Flight::find(2);
        $flight->name = 233;
        $flight->save();

        $flight = Flight::findOrFail(2);
        // dd($flight);

        $flight = new Flight();
        $flight->name =44;
        $flight->airline =44;
        $res = $flight->save();
        // dd($res);

        $res = Flight::destroy(1);
        dd($res);
    }
}
