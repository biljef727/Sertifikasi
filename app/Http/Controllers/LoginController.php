<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Session;

class LoginController extends Controller
{
    //Fetch data from Login Model
    public function login(Request $req) {
        //request input from view
        $useradmin = $req->input('username');
        $passwordadmin = $req->input('password');
    
        //making new model to check if there is the data inputted
        $model = new Login;
        $check = $model->isExist($useradmin, $passwordadmin);
        $admin = $model->isAdmin($useradmin);
    
        if ($check && $admin) {
            $redirectPath = '/history';
        } elseif ($check && !$admin) {
            $redirectPath = '/book';
        } else {
            Session::flash('error', 'Email or Password is Incorrect!');
            return redirect('/');
        }
    
        Session::put('username', $useradmin);
        Session::put('password', $passwordadmin);
        Session::flash('success', 'Login Success!');
        return redirect($redirectPath);
    }
    
}