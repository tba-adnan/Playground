<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dbdemo extends Controller
{
    // main index db get.
    public function index()
    {
        $name = DB::table('db_demo')->get();
        return view('index',compact('name'));
    }

//  Display first row.
    public function singleRow()
    {
        $name = DB::table('db_demo')->first();
        return $name->name;
    }
 
// find by id
    public function findByid() 
    {
        $name = DB::table('db_demo')->find(2);
    }

}


//  Other Examples to be executed during Présenations.
//  https://laravel.com/docs/9.x/queries#running-database-queries