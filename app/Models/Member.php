<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function borrowrecords()
    {
        return $this->belongsTo(BorrowRecord::class, 'id');
    }
}
