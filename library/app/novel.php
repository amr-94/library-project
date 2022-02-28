<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class novel extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'novel_id';
    protected $fillable = ['novel_id','novel_name','novel_rate','novel_class','novel_des','img','author_id','pdf'];
    public function author()
    {
        return $this->belongsTo('App\author');
    }
}

