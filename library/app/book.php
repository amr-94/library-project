<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    // protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'book_id';
    protected $fillable = ['book_id','book_name','book_class','book_rate','author_id','book_des','img','pdf'];
    public function author()
    {
        return $this->belongsTo('App\author');
    }
}
