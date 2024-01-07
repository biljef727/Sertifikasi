<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use DB;

class Login extends Model
{
    //taking data from pengguna_project database to check data
    use HasFactory;
    public $timestamps = false;
    public function isExist($username, $password){
        $auth = "SELECT count(*) is_exist FROM pengguna_project WHERE username= '".$username."' AND password= '".$password."';";
        $login = DB::select($auth);
        if($login[0]->is_exist == 1){
            return true;
        }
        return false;
    }
    //taking data from pengguna_project database to check admin
    public function isAdmin($username) {
        $adminCount = DB::table('user')->where('username', $username)->where('Status', 'admin')->count();
        return $adminCount > 0;
    }
}
