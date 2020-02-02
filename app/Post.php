<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //id
    public $primaryKey = 'id';
    //timestamp
    public $timestamps = true;
}
