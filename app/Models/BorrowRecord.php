<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRecord extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->hasMany(Member::class, 'id');
    }

    public function book()
    {
        return $this->hasMany(Book::class, 'id');
    }
}
