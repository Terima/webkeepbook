<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'password',
        'phone_number',
        'created_at',
        'updated_at'
    ];

    public function borrowrecords()
    {
        return $this->hasMany('App\BorrowRecord');
    }
}
