<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_name',
        // 'book_rate',
        'author_id',
        'abook_des',
        'about_author',
        'img',
        'pdf'
    ];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
