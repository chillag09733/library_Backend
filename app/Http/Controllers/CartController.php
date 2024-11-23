<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(){
        return Cart::all();
       }
    
    public function store(Request $request){
        $record = new Cart();
        $record -> fill($request -> all());
        $record -> save();
       } 

    public function show (string $id){
        return Cart::find($id);
    }

    public function update (Request $request, string $id){
        $record = Cart::find($id);
        $record -> fill($request -> all());
        $record -> save();
    }
}
