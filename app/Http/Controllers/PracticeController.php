<?php

namespace App\Http\Controllers;

use App\Models\Practice_1;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function show($id){
        $fib=new Practice_1();
        return $fib->fib($id);
    
    }

    public function showAllposts()
    {
        return response()->json(Practice_1::all());
    }

}   
