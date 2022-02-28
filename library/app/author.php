<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
//  protected $table='authors' ;
   public $timestamps=false ;
    protected $primaryKey = 'author_id';

    protected $fillable = ['author_id','author_name','author_rate','nationality','about_author','author_des','img'];

    public function books(){
        return $this->hasMany('App\book','book_id','author_id');
    }
    public function novels()
    {
        return $this->hasMany('App\novel', 'novel_id', 'author_id');
    }

}
