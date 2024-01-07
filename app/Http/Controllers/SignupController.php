<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Session;

class SignupController extends Controller
{
    //redirecting to enter signup view
    public function signup(){
        return view('signup');
    }
    //inserting data for new user
    function insertdata(Request $request){
        $signup = new Signup();
        $signup->Username = $request->input('Username');
        $signup->Password = $request->input('Password');
        $signup->Name = $request->input('Name');
        $signup->Status = 'user';
        $signup->Delete = 'YES';
        $filename = time().'.'.$request->Profile->extension();
            $request->Profile->storeAs('public/signup',$filename);
            $signup->Profile = $filename;
            $signup->save();
        return redirect('/')->with('signup',$signup);
    }
}
