<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){

        //eloquent
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereaaa = Test::where('text','=','aaaa')->get();

        // query builder
        $querybuilder = DB::table('tests')->where('text','=','aaaa')
        ->select('id','text')
        ->get();

        dd($values, $count, $first, $whereaaa, $querybuilder);
        return view('tests/test', compact('values'));
    } 

 
}
