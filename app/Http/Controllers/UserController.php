<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class UserController extends Controller
{
    //fetch data from Master Model
    public function master(){
        $data = Master::all();
        return view('user', compact('data'));
    }
    //deleting user based on which id was the delete link
    public function deleteUser($id)
    {
        $user = Master::find($id);

        if ($user) {
            $user->delete();
        }
        return redirect('/user');
    }
}
