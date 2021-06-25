<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    public $table = "komentar";
    protected $fillable = ['name','content','featured_image'];
}
