<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\checknameModel;

use Illuminate\Http\Request;

class checknameController extends Controller
{

    public function checkExist($name) {
         
        // $name = "haitam";
        $exists = checknameModel::where('name', $name)->exists();
        // dd($exists);
        return [
            'exists' => $exists,
        ];


    }


    public function searchU() {

        $users = checknameModel::all();
 
        return [
            'data' => $users,
        ];

    }


    public function deleteUser($delete) {
        DB::table('names')->where('name', $delete)->delete();
    }

    public function addUser($add) {

        $name = new checknameModel();
        $name->name = $add;
        $name->nickname = "default";
        $name->save();

  
    }



    public function listUsers() {

        $users = checknameModel::all()->toArray();
 
        return $users;

    }



}
