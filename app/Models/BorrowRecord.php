<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRecord extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
