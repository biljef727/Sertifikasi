<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    //fetch data from History Model
    public function show(){
        $data = History::all();
        return view('history', compact('data'));
    }
}
