<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title','content'];
    protected $visible = ['title','content'];
    protected $timestamps = true;
}
