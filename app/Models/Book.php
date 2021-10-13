<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'author',
        'pages',
        'pub_year'
    ];

    public function borrowrecords()
    {
        return $this->hasMany('App\BorrowRecord');
    }
}
