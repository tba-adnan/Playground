<?php

namespace App\Http\Controllers;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
    $promotion = Promotion::all();   
        return view('index',compact('promotion'));
}
    public function create(){
        return view('add');
}
public function store(Request $request){

    $promotion = new Promotion();
    $promotion->name = $request->Name ;
    $promotion->save();
    if( $promotion->save()){
    return redirect('index')->with("added!!!");
    }

}

}
