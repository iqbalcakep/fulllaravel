<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Blog extends Model
{
    use SoftDeletes;
    protected $softDelete = true;
    protected $table = 'blogs';
   protected $dates = ['deleted_at'];
    // protected $table="";
    // public $timestamps=false;

    //whitelist
    protected $fillable=["title","description"];
    //blacklist
    // protected $guarded=[""];
}
