<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $table="";
    public $timestamps=false;

    //whitelist
    protected $fillable=["title","description"];
    //blacklist
    // protected $guarded=[""];
}
