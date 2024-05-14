<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = [
        'novel_name',
        'novel_rate',
        'novel_des',
        'about_author',
        'img',
        'author_id',
        'pdf'
    ];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
