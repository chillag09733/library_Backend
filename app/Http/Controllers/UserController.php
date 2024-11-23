<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return User::all();
       }
    
       public function store(Request $request){
        $record = new User();
        $record -> fill($request -> all());
        $record -> save();
       }
}
