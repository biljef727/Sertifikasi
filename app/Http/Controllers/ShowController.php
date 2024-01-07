<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class ShowController extends Controller
{
    //fetch data from Collection Model
    public function show(){
        $data = Collection::all();
        return view('book', compact('data'));
    }
}
