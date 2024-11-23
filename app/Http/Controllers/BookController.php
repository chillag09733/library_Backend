<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   public function index(){
    return Book::all();
   }

   public function store(Request $request){
    $record = new Book();
    $record -> fill($request -> all());
    $record -> save();
   }
}
