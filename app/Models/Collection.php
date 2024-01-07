<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //taking data from bookcollections database
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bookcollections';
    protected $guarded = []; // didnt input anything inside guarded so everything can be fillable
    
    public function histories()  {
        return $this->hasMany(History::class);
    }
}
