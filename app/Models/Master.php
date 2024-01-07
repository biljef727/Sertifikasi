<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
     //taking data from pengguna_project database
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengguna_project';
    protected $guarded = [];
}
