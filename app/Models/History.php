<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //taking data from historyBorrow database
    use HasFactory;
    public $timestamps = false;
    protected $table = 'historyBorrow';

    //declaring now date
    protected $casts = [
        'BorrowedTime' => 'date',
        'ReturnedTime' => 'date',
    ];

    protected $guarded = [];

    public function collection() {
        return $this->belongsTo(Collection::class);
    }
}
